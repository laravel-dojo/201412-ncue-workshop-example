<?php

class CategoryTableSeeder extends Seeder {

	public function run()
	{
        DB::table('categories')->truncate();
        
        $names = ['生活記事', '心情寫真', '學習成果', '雜項'];
        
        foreach($names as $index => $name)
        {
            Category::create([
                'name'        => $name,
                'created_at'  => \Carbon\Carbon::now()->addDays($index),
                'updated_at'  => \Carbon\Carbon::now()->addDays($index),
            ]);
        }
	}

}