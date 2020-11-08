<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagsArray = [
            "natura",
            "viaggio",
            "eroe",
            "usa",
            "fiume",
            "fratellanza",
            "pace",
            "guerra",
            "libertà",
            "città",
            "rivoluzione",
            "amore",
            "amicizia",
        ];

        foreach ($tagsArray as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();
        }
    }
}
