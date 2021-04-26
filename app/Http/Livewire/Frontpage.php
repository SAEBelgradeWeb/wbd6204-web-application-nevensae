<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;

class Frontpage extends Component
{

    public $title;
    public $content;

    public function mount($urlslug = null)
    {
        $this->retrieveContent($urlslug);
    }

    public function retrieveContent($urlslug)
    {

        if (empty($urlslug)) {
            $data = Page::where('is_default_home', true)->first();
        } else {
            $data = Page::where('slug', $urlslug)->first();

            if(!$data) {
                $data = Page::where('is_default_not_found', true)->first();
            }
        }

        $this->title = $data->title;
        $this->content = $data->content;

    }
    public function render()
    {
//        Specifies which layout componenet to use for this component
        return view('livewire.frontpage')->layout('layouts.frontpage');
    }
}
