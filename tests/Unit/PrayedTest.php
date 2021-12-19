<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Exp_bar;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\assertCount;

class PrayedTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_exp_bar_exists()
    {
        $this->assertDatabaseHas('exp_bars', [
            'user_id' => 1
        ]);
    }



    public function test_level_up()
    {
        $UpdateExp = Exp_bar::where('user_id', 1)->get()->first()->update([
            'exp'   =>  0,
            'level' => DB::raw('level+1')
        ]);
       $this->assertTrue($UpdateExp);
    }
}
