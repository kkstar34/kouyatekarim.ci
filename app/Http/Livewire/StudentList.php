<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Student;
use App\Http\Livewire\Field;
use Brian2694\Toastr\Facades\Toastr;
use Livewire\Withpagination;

class StudentList extends Component

{
    public $age, $name, $email, $student_id, $student;

    use Withpagination;
    public $perPage = 5; 
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    public $query; 


    public function updatingQuery(){
   
    $this->resetPage();
}
    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        Toastr::success('Post added successfully :)','Success');
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }


    public function store1()
    {

        
        $validatedDate = $this->validate([
                'name.0' => 'required',
                'email.0' => 'required',
                'age.0' => 'required',
                'name.*' => 'required',
                'email.*' => 'required|email',
                'age.*' => 'required',
            ],
            [
                'name.0.required' => 'name field is required',
                'age.0.required' => 'age field is required',
                'email.0.required' => 'email field is required',
	            'email.0.email' => 'The email must be a valid email address.',
                'name.*.required' => 'name field is required',
                'email.*.required' => 'email field is required',
                'email.*.email' => 'The email must be a valid email address.',
                'age.*.required' => 'age field is required',
            ]
        );


        foreach ($this->name as $key => $value) {
            Student::create(['name' => $this->name[$key], 'email' => $this->email[$key], 'age' => $this->age[$key]]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Eleve enregistré avec succès.');

    }
    public function render()
    {
        return view('livewire.student-list', ['students' =>Student::where('name', 'like', '%' . $this->query . '%')->paginate($this->perPage)]);
    }
    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->age = '';
    }


    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required'
        ]);

        Student::create($validatedDate);

        dd(session()->flash('message', 'Eleve crée avec succès.'));

        $this->resetInputFields();

        $this->emit('userStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = Student::where('id',$id)->first();
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->age = $student->age;
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required'
        ]);

        if ($this->student_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'age' =>$this->age
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Eleve modifié avec succes.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
          
            Student::where('id',$id)->delete();
            session()->flash('message', 'Eleve supprimé avec succès.');
        }
    }

}
