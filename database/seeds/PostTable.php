<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = "Understanding Very, Very Bad Fake News";
        $post->content = "Fake news is bad. Very, very bad. Trust me. You want nothing to do with it. Crooked, crooked, crooked. That’s what we’ve been hearing the last few months, right? But the problem with simply saying “fake news is bad” is that fake news itself is such a broad term, and it’s causing miscommunication about what’s going on in advertising right now.";
        $post->date = "2017-010-07 05:10:00";
        $post->auName = "HuongNT";
        $post->cateID = 4;
        $post->point = 7;
        $post->save();
    }
}
