<?php

namespace App\Http\Livewire;

use App\Models\Exp_bar;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Prayers as ModelsPrayers;

class Prayers extends Component
{
    public function render()
    {
        return view('livewire.prayers');
    }

    public $prayers;
    public $prayersName;
    public $exp;
    public $level;
    public $ExpBar;
    public $oldExpBar;
    public function mount()
    {
        $this->prayers = ModelsPrayers::all();
    }

    public function Prayed()
    {
        auth()->check();
        $IsExpExists = Exp_bar::where('user_id', auth()->user()->id)->first();
        if($IsExpExists === null)
        {
            // Start New Exp Road
            $ExpBar = new Exp_bar();
            $ExpBar->user_id    = auth()->user()->id;
            $ExpBar->exp        = 5;
            $ExpBar->level      = 0;
            $ExpBar->save();

        } else {
            // Add Exp
             $UpdateExp = Exp_bar::where('user_id', auth()->user()->id)->get()->first()->update([
                 'exp' =>  DB::raw('exp+5')
             ]);

             $GetExp= Exp_bar::where('user_id', auth()->user()->id)->get()->first();

            //  Level up
             if($GetExp->exp >= 100)
             {
                $UpdateExp = Exp_bar::where('user_id', auth()->user()->id)->get()->first()->update([
                    'exp'   =>  0,
                    'level' => DB::raw('level+1')
                ]);
             }
        }


    }
}
