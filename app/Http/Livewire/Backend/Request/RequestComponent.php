<?php

namespace App\Http\Livewire\Backend\Request;

use App\Models\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class RequestComponent extends Component
{

    use WithFileUploads;

    public $subject;
    public $description;
    public $images;



    public function submitRequest()
    {
        $this->validate([
            'subject'=>'required|min:5|max:255',
            'description'=>'required',
        ]);

        $request = new Request();
        $request->subject = $this->subject;
        $request->description = $this->description;

        if ($this->images) {
            $imagesname = '';
            foreach ($this->images as $key => $image) {
                $img_name = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $image->storeAs('images', $img_name);
                $imagesname  = $imagesname . ',' . $img_name;
            }
            $request->images = $imagesname;
        }
        $request->priority = 'urgent';
        $request->status = 'pending';
        $request->student_id = Auth::user()->id;
        $request->department_id = Auth::user()->department_id;

        $request->save();
        $this->reset();
        return redirect()->route('dashboard');

    }

    public function render()
    {
        return view('livewire.backend.request.request-component')->layout('layouts.dashboard');
    }
}
