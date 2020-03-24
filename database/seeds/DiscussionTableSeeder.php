<?php

use Illuminate\Database\Seeder;

class DiscussionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $title = 'Lorem ipsum, dolor sit amet consectetur';
        App\Discussion::create([
            'user_id' => 1,
            'channel_id' => 2,
            'title' => $title,
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, asperiores ad deleniti maxime voluptate dolore optio saepe voluptatibus dolorem est aperiam dolores ut! Iste laborum debitis obcaecati placeat ducimus ullam.',
            'slug' => str_slug($title),
        ]);
        App\Discussion::create([
            'user_id' => 1,
            'channel_id' => 2,
            'title' => $title,
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, asperiores ad deleniti maxime voluptate dolore optio saepe voluptatibus dolorem est aperiam dolores ut! Iste laborum debitis obcaecati placeat ducimus ullam.',
            'slug' => str_slug($title),
        ]);
        App\Discussion::create([
            'user_id' => 2,
            'channel_id' => 2,
            'title' => $title,
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, asperiores ad deleniti maxime voluptate dolore optio saepe voluptatibus dolorem est aperiam dolores ut! Iste laborum debitis obcaecati placeat ducimus ullam.',
            'slug' => str_slug($title),
        ]);
        App\Discussion::create([
            'user_id' => 2,
            'channel_id' => 2,
            'title' => $title,
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, asperiores ad deleniti maxime voluptate dolore optio saepe voluptatibus dolorem est aperiam dolores ut! Iste laborum debitis obcaecati placeat ducimus ullam.',
            'slug' => str_slug($title),
        ]);
    }
}