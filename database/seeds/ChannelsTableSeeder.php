<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title' => 'Laravel'];
        $channel2 = ['title' => 'VueJs'];
        $channel3 = ['title' => 'Javascript'];
        $channel4 = ['title' => 'Bootstrap'];
        $channel5 = ['title' => 'Python'];
        $channel6 = ['title' => 'Photoshop'];
        $channel7 = ['title' => 'Bumla'];
        $channel8 = ['title' => 'Lurm'];

        channels::create($channel1);
        channels::create($channel2);
        channels::create($channel3);
        channels::create($channel4);
        channels::create($channel5);
        channels::create($channel6);
        channels::create($channel7);
        channels::create($channel8);
    }
}
