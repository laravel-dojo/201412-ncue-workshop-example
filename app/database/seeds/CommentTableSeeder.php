<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            Comment::create([
                'name'       => '留言者 ' . $index,
                'email'      => 'tester' . $index . '@test.com',
                'content'    => '假回覆內容假回覆內容假回覆內容假回覆內容假回覆內容假回覆內容假回覆內容假回覆內容假回覆內容',
                'post_id'    => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
		}
	}

}