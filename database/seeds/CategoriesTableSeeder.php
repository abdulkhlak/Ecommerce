<?php

use App\model\categories;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();
        foreach (range(1,10) as $index)
        {
            $category = $faker->name;
            categories::create([
                'category_name'=>$faker->name,
                'category_logo'=>$faker->name,
                'category_slug'=> slugify($category),
                'status'=>rand(0,1)
            ]);
        }
    }
}
