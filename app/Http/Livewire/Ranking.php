<?php

namespace App\Http\Livewire;

use App\Models\Exp_bar;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class Ranking extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $UserRank;
    public $userOrder;

    public function getRank()
    {
        $this->UserRank =  Exp_bar::where('user_id', auth()->user()->id)->first();
        return $this->UserRank;

    }

    public function render()
    {
        // All ranking
        $ranking = Exp_bar::orderBy('level', 'DESC')
        ->orderBy('exp', 'DESC')
        ->paginate(10);

        // All ranking Order
        $order = $ranking->firstItem();

        if (Auth::user()) {
                // Auth user Order
                $collection = collect(Exp_bar::orderBy('level', 'DESC')->orderBy('exp','DESC')->get());
                $data       = $collection->where('user_id', auth()->user()->id);
                $this->userOrder      = $data->keys()->first() + 1;
        }


        return view('livewire.ranking',[
            'ranking'   => $ranking,
            'order'     => $order,
        ]);
    }


}
