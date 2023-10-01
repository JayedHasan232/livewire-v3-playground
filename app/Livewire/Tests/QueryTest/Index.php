<?php

namespace App\Livewire\Tests\QueryTest;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.tests.query-test.index')->layout('layouts.playground');
    }
}
