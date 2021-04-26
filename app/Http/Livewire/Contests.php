<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Contest;
use Livewire\WithFileUploads;

class Contests extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $modalFormVisible = false;
    public $description;
    public $image;

    public function createShowModal()
    {
        $this->modalFormVisible = true;
    }

    public function createContest()
    {
//         Try a test with Contest::getAll()
//        Content create saves the data into the database // Contest model is linked to contests table
        Contest::create($this->modelData());
        $this->modalFormVisible = false;
    }

    public function modelData()
    {
        return [
          'title' => $this->title,
            'slug' => $this->slug,
            'image' => $this->image,
            'description' => $this->description
        ];
    }
    public function render()
    {
        $contests = DB::table('contests')->get();
        return view('livewire.contests', [
            'contests' => $contests
        ]);
    }
}
