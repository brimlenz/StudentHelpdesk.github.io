<?php

namespace App\Http\Livewire\Backend\UserManagement;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class ManageUsersComponent extends Component
{
    public $name;
    public $email;
    public $role;
    public $department;
    public $reg;
    public $faculty;
    public $departments;


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
    public function render()
    {
        $roles = Role::all();
        $faculties = Faculty::orderBy('name', 'ASC')->get();
        $users = User::all();

        return view('livewire.backend.user-management.manage-users-component', 
        [
            'roles'=>$roles,
            'faculties'=>$faculties,
            'users'=>$users,
        ])->layout('layouts.dashboard');
    }
}
