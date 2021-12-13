<?php

namespace App\Http\Livewire;

use App\Models\Exp_bar;
use Livewire\Component;
use Livewire\WithPagination;

class Ranking extends Component
{
    use WithPagination;

    public $ranking;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->ranking = Exp_bar::orderBy('level', 'DESC')
        ->orderBy('exp', 'DESC')
        ->paginate(10)
        ->items();
        // dd($this->ranking);
    }

    public function render()
    {
        return view('livewire.ranking');
    }
}
