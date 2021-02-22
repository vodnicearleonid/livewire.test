<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $cat = 'Jofri';

    public function render()
    {
//        $this->cat = 'Barel';

        return view('livewire.hello-world', [
            'name' => 'Leo'
        ]);
    }
}
