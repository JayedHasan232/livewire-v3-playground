<?php

namespace App\Livewire\Tests\QueryTest;

use App\Models\Category;
use Livewire\Component;

class Form extends Component
{
    public $categories = [];
    public $text = 'Data';

    public function mount()
    {
        // $this->categories = Category::select('name')->get();
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.tests.query-test.form');
    }
}
