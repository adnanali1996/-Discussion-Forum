<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $channel1 = ['title' => 'Laravel', 'slug' => str_slug('Laravel')];
        $channel2 = ['title' => 'Vue.js', 'slug' => str_slug('Vue.js')];
        $channel3 = ['title' => 'Angular', 'slug' => str_slug('Angular')];
        $channel4 = ['title' => 'React', 'slug' => str_slug('React')];
        $channel5 = ['title' => 'Jquery', 'slug' => str_slug('Jquery')];
        $channel6 = ['title' => 'Javascript', 'slug' => str_slug('Javascript')];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
        Channel::create($channel6);

    }
}