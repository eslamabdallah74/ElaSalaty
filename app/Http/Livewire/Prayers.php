<?php

namespace App\Http\Livewire;

use App\Models\PrayerUser as Clicked;
use App\Models\Exp_bar;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Models\Prayers as ModelsPrayers;

class Prayers extends Component
{


    public $prayers;
    public $prayersName;
    public $exp;
    public $level;
    public $ExpBar;
    public $oldExpBar;
    public $ButtonClicked;
    public $GetExp;

    public $failed;
    public function mount()
    {

        // Make new exp row for new user
        $IsExpExists = Exp_bar::where('user_id', auth()->user()->id)->first();
        if ($IsExpExists === null) {
            // Start New Exp Road
            $ExpBar = new Exp_bar();
            $ExpBar->user_id    = auth()->user()->id;
            $ExpBar->exp        = 0;
            $ExpBar->level      = 0;
            $ExpBar->save();
        }
        // Assgin Values
        $this->prayers = ModelsPrayers::OrderBy('id','desc')->get();
        $this->GetExp  = Exp_bar::where('user_id', auth()->user()->id)->get('exp')->first();
        $this->level   = Exp_bar::where('user_id', auth()->user()->id)->get('level')->first();


    }

    public function Prayed($prayer_id)
    {
        auth()->check();
        // if button didn't been clicked in 24h you can click it

        $test = Clicked::where('id' , $prayer_id)->where('user_id', auth()->user()->id)->get();
        // dd($test);
        if(Clicked::where('user_id', auth()->user()->id)->where('prayer_id', $prayer_id)->first() === null
        || Clicked::where('user_id', auth()->user()->id)->where('prayer_id', $prayer_id)->value('clicked') === 0 )
        {
             // Add Exp and clicked
             $UpdateExp = Exp_bar::where('user_id', auth()->user()->id)->get()->first()->update([
                'exp'      =>  DB::raw('exp+5'),
            ]);
           // button Clicked
           if(Clicked::where('user_id', auth()->user()->id)->where('prayer_id', $prayer_id)->value('clicked') === 0)
           {
            $Clicked = Clicked::where('user_id', auth()->user()->id)->where('prayer_id', $prayer_id)->first()->update([
                'clicked'  => '1',
                'user_id'    => auth()->user()->id,
                'prayer_id'  => $prayer_id,
                'created_at' => now(),
             ]);
           } else {
            $Clicked = Clicked::insert([
                'clicked'    => '1',
                'user_id'    => auth()->user()->id,
                'prayer_id'  => $prayer_id,
                'created_at' => now(),
             ]);
           }

               // Here we update the (this exp so we can live render it)
            $this->GetExp = Exp_bar::where('user_id', auth()->user()->id)->get()->first();

           //  Level up
            if($this->GetExp->exp >= 100)
            {
               $UpdateExp = Exp_bar::where('user_id', auth()->user()->id)->get()->first()->update([
                   'exp'   =>  0,
                   'level' => DB::raw('level+1')
               ]);
               // Update on level up
               $this->GetExp = Exp_bar::where('user_id', auth()->user()->id)->get()->first();
               $this->level = Exp_bar::where('user_id', auth()->user()->id)->get()->first();

            }
           // Here we update the (this level so we can live render it)
           $this->level    = Exp_bar::where('user_id', auth()->user()->id)->get()->first();
        } else { // you clicked the pray
            $this->failed = 'You prayed it already';
                // Update on level up
                $this->GetExp = Exp_bar::where('user_id', auth()->user()->id)->get()->first();
                $this->level = Exp_bar::where('user_id', auth()->user()->id)->get()->first();
               // Here we update the (this level so we can live render it)
                $this->level    = Exp_bar::where('user_id', auth()->user()->id)->get()->first();
            return $this->failed;
        }

    }
    public function render()
    {
        return view('livewire.prayers');
    }
}
