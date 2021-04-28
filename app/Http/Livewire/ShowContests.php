<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contest;

class ShowContests extends Component
{
    public $title;
    public $description;
    public $image;

    public function mount($url)
    {
        $this->retrieveContent($url);
    }
    public function render()
    {
        return view('livewire.show-contests', [])->layout('layouts.frontend');
    }

    public function retrieveContent($url)
    {
        $data = Contest::where('id', $url)->first();
        $this->title = $data->title;
        $this->description = $data->description;
        $this->image = $data->image;
    }
}
