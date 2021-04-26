<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Pages extends Component
{
    use WithPagination;
    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $slug;
    public $modelId;
    public $title;
    public $content;
    public $isSetToDefaultHomePage;
    public $isSetToDefaultNotFoundPage;


    public function rules()
    {
        return [
          'title' => 'required',
          'slug' => ['required', Rule::unique('pages', 'slug')->ignore($this->modelId)],
            'content' => 'required'
        ];
    }

    public function mount()
    {
        $this->resetPage();
    }

    public function updatedTitle($value)
    {
        $this->generateSlug($value);
    }


    public function updatedIsSetToDefaultHomePage()
    {
        $this->isSetToDefaultNotFoundPage = null;
    }
    public function updatedIsSetToDefaultNotFoundPage()
    {
        $this->isSetToDefaultHomePage = null;
    }


    public function create()
    {
        $this->validate();
        $this->unassignDefaultHomePage();
        $this->unassignDefaultNotFoundPage();
        Page::create($this->modelData());
        $this->modalFormVisible = false;
        $this->resetVars();
    }
//    Used to show the the form modal of the craete function
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
        $this->loadModal();
    }

    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

// Loads the model data of this component
    public function loadModal()
    {
        $data = Page::find($this->modelId);
        $this->title = $data->title;
        $this->slug = $data->slug;
        $this->content = $data->content;
        $this->isSetToDefaultHomePage = !$data->is_default_home ? null:true;
        $this->isSetToDefaultNotFoundPage = !$data->is_default_not_found ? null:true;
    }

//    The data to be saved
    public function modelData()
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'is_default_home' => $this->isSetToDefaultHomePage,
            'is_default_not_found' => $this->isSetToDefaultNotFoundPage,
        ];
    }

    public function read()
    {
       return Page::paginate(5);
    }

    public function update()
    {
        $this->validate();
        $this->unassignDefaultHomePage();
        $this->unassignDefaultNotFoundPage();
        Page::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
    }

    public function delete()
    {
        Page::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
    }


    public function resetVars()
    {
        $this->title = null;
        $this->modelId = null;
        $this->slug = null;
        $this->content = null;
        $this->isSetToDefaultHomePage = null;
        $this->isSetToDefaultNotFoundPage = null;
    }
// Generates a url slug based on the title
    private function generateSlug($value)
    {
        $process1 = str_replace(' ', '-', $value);
        $process2 = strtolower($process1);
        $this->slug = $process2;
    }

    public function unassignDefaultHomePage()
    {
        if($this->isSetToDefaultHomePage != null) {
            Page::where('is_default_home', true)->update([
                'is_default_home' => false
            ]);
        }
    }

    public function unassignDefaultNotFoundPage()
    {
        if($this->isSetToDefaultNotFoundPage != null) {
            Page::where('is_default_not_found', true)->update([
                'is_default_not_found' => false
            ]);
        }
    }

    public function render()
    {
        return view('livewire.pages', [
            'data' => $this->read()
        ]);
    }
}
