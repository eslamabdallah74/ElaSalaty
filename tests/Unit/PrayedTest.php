<?php

namespace Tests\Unit;

use App\Models\Exp_bar;
use Tests\TestCase;

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
        
    }
}
