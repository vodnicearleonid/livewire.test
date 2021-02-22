<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Leonardo';
    public $ok = false;
    public $greeting = ['Hello'];//Hello array

    public function render()
    {
//        $this->cat = 'Barel';

        return view('livewire.hello-world');
    }
}





/*class HelloWorld extends Component
{
    public $name = 'Leonardo';
    public $ok = false;
    public $greeting = ['Hello'];//Hello array

    public function render()
    {
//        $this->cat = 'Barel';

        return view('livewire.hello-world');
    }
}*/
