<?php

namespace App\Livewire\Blocks;



use Livewire\Component;
use App\Models\Block;

class Index extends Component
{
    public $blocks;

    public function mount()
    {
        $this->blocks = Block::all();
    }

    public function render()
    {
        return view('livewire.blocks.index');
    }
}

