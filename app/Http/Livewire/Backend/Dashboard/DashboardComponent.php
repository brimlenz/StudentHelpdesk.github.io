<?php

namespace App\Http\Livewire\Backend\Dashboard;

use App\Models\Conversation;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class DashboardComponent extends Component
{

    public $filterTerm = 'pending';

    

    public $tableTitle = 'pending';
    public $pending_request = false;
    public $support_agent = false;
    public $student = false;
    public $all_request = false;



    public $name;
    public $email;
    public $role;
    public $department;
    public $reg;
    public $faculty;
    public $departments;

    public $users;

    public function UpdatedFaculty($faculty)
    {
        if ($faculty) {
            $this->departments = Department::where('faculty_id', $faculty)->get();
        }
    }

    public function showUserModal()
    {
        $this->dispatchBrowserEvent('show-user-modal');
    }

    public function createUser()
    {
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->registration_no = $this->reg;
        $user->department_id = $this->department;
        $user->password = Hash::make($this->reg);
        $user->save();

        $role = Role::where('id', $this->role)->first()->name;

        $user->assignRole($role);
        $this->dispatchBrowserEvent('hide-user-modal');
        toastr()->success('User has been saved successfully!');
    }
    public function updateFilter($filter)
    {

        $this->filterTerm = $filter;
        $this->tableTitle = $filter;
    }
    
    

    
    public function mount()
    {
        $this->users = User::all();
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        $this->users = $this->users->except($id);
        
        toastr()->success( 'User deleted successfully.');
    }


    public function updateRequest($request)
    {
        $request = Request::where('id', $request)->first();
        if ($request->status == 'pending') {

            $request->solved_id = Auth::user()->id;
            $request->status = 'in progress';
            $request->update();

            $conversation = new Conversation();
            $conversation->sender_id = Auth::user()->id;
            $conversation->receiver_id = $request->student_id;
            $conversation->request_id = $request->id;
            $conversation->save();
        }
        return redirect()->route('chat', ['request' => $request]);
    }

    public function showPendingRequest()
    {
        $this->pending_request = true;
        $this->support_agent = false;
        $this->student = false;
        $this->all_request = false;
    }
    public function showSupportAgent()
    {
        $this->pending_request = false;
        $this->support_agent = true;
        $this->student = false;
        $this->all_request = false;
    }

    public function showStudent()
    {
        $this->pending_request = false;
        $this->support_agent = false;
        $this->student = true;
        $this->all_request = false;
    }
    public function allRequest()
    {
        $this->pending_request = false;
        $this->support_agent = false;
        $this->student = false;
        $this->all_request = true;
    }

    public function render()
    {


        $students = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Student');
            }
        )->get();
        $supports = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Support Agent');
            }
        )->get();
        $requests = Request::where('student_id', Auth::user()->id)->get();

        $student_requests = Request::where('student_id', Auth::user()->id)
            ->when($this->filterTerm == 'pending', function ($query) {
                $query->where('status', 'pending');
            })
            ->when($this->filterTerm == 'in progress', function ($query) {
                $query->where('status', 'in progress')->where('solved_id', Auth::user()->id);
            })
            ->when($this->filterTerm == 'solved', function ($query) {
                $query->where('status', 'solved')->where('solved_id', Auth::user()->id);
            })
            ->when($this->filterTerm == 'all', function ($query) {
                $query->whereIn('status', ['solved', 'in progress'])->where('solved_id', Auth::user()->id);
            })
            ->get();
        

        $support_request = Request::where('department_id', Auth::user()->department_id)
            ->when($this->filterTerm == 'pending', function ($query) {
                $query->where('status', 'pending');
            })
            ->when($this->filterTerm == 'in progress', function ($query) {
                $query->where('status', 'in progress')->where('solved_id', Auth::user()->id);
            })
            ->when($this->filterTerm == 'solved', function ($query) {
                $query->where('status', 'solved')->where('solved_id', Auth::user()->id);
            })
            ->when($this->filterTerm == 'all', function ($query) {
                $query->whereIn('status', ['solved', 'in progress'])->where('solved_id', Auth::user()->id);
            })
            ->get();

        $pendingRequests = Request::where('status', 'pending')->get();

        $roles = Role::all();
        $faculties = Faculty::orderBy('name', 'ASC')->get();
        return view(
            'livewire.backend.dashboard.dashboard-component',
            [
                'roles' => $roles,
                'faculties' => $faculties,
                'requests' => $requests,
                'support_request' => $support_request,
                'student_requests' => $student_requests,

                'students' => $students,
                'supports' => $supports,
                'pendingRequests' => $pendingRequests,

            ]
        )->layout('layouts.dashboard');
    }
}
