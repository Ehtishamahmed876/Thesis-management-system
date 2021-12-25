<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\User;


class Crud extends Component
{
    public $Users, $name, $rollno,$registration, $email,$vivadate,$vivamarks,$vivateacher,$User_id;
    public $isModalOpen = 0;

    public function render()
    {
        $this->Users = User::all();
        
        



        return view('livewire.crud');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->rollno = '';
        $this->registration = '';
        $this->vivadate = '';
        $this->vivamarks = '';
        $this->vivateacher = '';


        $this->email = '';
        
    }
    
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'rollno' => 'required',
            'registration' => 'required',
            // 'vivadate' => 'required',
            // 'vivamarks' => 'required',
            // 'vivateacher' => 'required',

         
            'email' => 'required',
    
        ]);
    
        User::updateOrCreate(['id' => $this->User_id], [
            'name' => $this->name,
            'rollno' => $this->rollno,
            'registration' => $this->registration,
            'vivadate' => $this->vivadate,
            'vivamarks' => $this->vivamarks,
            'vivateacher' => $this->vivateacher,


            'email' => $this->email,
        
        ]);

        session()->flash('message', $this->User_id ? 'User updated.' : 'User created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $User = User::findOrFail($id);
        $this->User_id = $id;
        $this->name = $User->name;
        $this->rollno = $User->rollno;
        $this->registration = $User->registration;
        $this->vivadate = $User->vivadate;
        $this->vivamarks = $User->vivamarks;
        $this->vivateacher = $User->vivateacher;


        $this->email = $User->email;
    
    
        $this->openModalPopover();
    }
    
    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Student deleted.');
    }
}