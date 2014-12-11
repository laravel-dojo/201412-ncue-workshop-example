<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('zh_TW');
        
        DB::table('comments')->truncate();

		foreach(range(1, 20) as $index)
		{
            Comment::create([
                'name'       => $faker->name,
                'email'      => $faker->email,
                'content'    => $faker->sentence(20),
                'post_id'    => rand(1, 2),
                'created_at' => \Carbon\Carbon::now()->addDays($index),
                'updated_at' => \Carbon\Carbon::now()->addDays($index),
            ]);
		}
	}

}