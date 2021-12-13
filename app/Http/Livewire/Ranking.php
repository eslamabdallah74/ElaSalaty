<?php

namespace App\Http\Livewire;

use App\Models\Exp_bar;
use Livewire\Component;
use Livewire\WithPagination;

class Ranking extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';



    public function render()
    {
        $ranking = Exp_bar::orderBy('level', 'DESC')
        ->orderBy('exp', 'DESC')
        ->paginate(10);

        $order = $ranking->firstItem();
        return view('livewire.ranking',[
            'ranking' => $ranking,
            'order'   => $order
        ]);
    }
}
