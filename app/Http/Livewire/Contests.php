<?php

namespace App\Http\Livewire;

use App\Models\Contest;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Contests extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $modalFormVisible = false;
    public $title;
    public $description;
    public $image;
    public $message;
    public $modelId;

//    Livewire function for validation
    public function rules()
    {
        return [
          'title' => 'required',
          'description' => 'required',
          'image' => 'image|required'
        ];
    }

// Saves the data from a form
    public function create()
    {
        $this->validate();
        Contest::create($this->modelData());
        $this->modalFormVisible = false;
        $this->resetVars();
    }

//    Read function to return data sets
    public function read()
    {
        return Contest::paginate(5);
    }

    public function update()
    {
        $this->validate();
        Contest::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
        $this->resetVars();
    }
// Sets the model from the front end to visible (true)
    public function createShowModal()
    {
        $this->resetValidation();
        $this->resetVars();
        $this->modalFormVisible = true;
    }

    public function updateShowModal($id)
    {
        $this->resetValidation();
        $this->resetVars();
        $this->modelId = $id;
        $this->modalFormVisible = true;
        $this->loadModel();
    }

//    Retrieves the corresponding model id and provides the related data to that id
    public function loadModel()
    {
        $data = Contest::find($this->modelId);
        $this->title = $data->title;
        $this->description = $data->description;
        $this->image = $data->image;
    }

//    Data being stored from the database
    public function modelData()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image->store('images', 'public')
        ];
    }
// Properties reset
    public function resetVars()
    {
        $this->modelId = null;
        $this->title = null;
        $this->description = null;
        $this->image = null;
    }

//    Renders the view and passes the data to the view
    public function render()
    {
        return view('livewire.contests', [
            'data' => $this->read()
        ]);
    }
}
