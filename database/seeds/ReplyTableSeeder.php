<?php

use App\Reply;
use Illuminate\Database\Seeder;

class ReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Reply::create([
            'user_id' => 1,
            'discussion_id' => 1,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?',
        ]
        );
        App\Reply::create([

            'user_id' => 2,
            'discussion_id' => 2,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?',
        ]
        );
        App\Reply::create([

            'user_id' => 1,
            'discussion_id' => 3,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?',
        ]
        );
        App\Reply::create([

            'user_id' => 2,
            'discussion_id' => 4,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?',
        ]
        );
        App\Reply::create([

            'user_id' => 1,
            'discussion_id' => 5,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?',
        ]
        );
        App\Reply::create([

            'user_id' => 1,
            'discussion_id' => 6,
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?',
        ]
        );
    }
}