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
        $categories = ["Electronics","Shoes","Watches","Health and Beauty","Jewellery",
            "Kids and Babies","Sports","Home and Garden","Washing Machine","T-shirts/ Polo Shirts","Sunflower Oil"
        ];

        foreach (range(1,13) as $index)
        {
            $category = $faker->name;

            foreach ($categories as $category){

                categories::create([
                    'category_name'=>$category,
                    'category_logo'=>$faker->imageUrl(),
                    'category_slug'=> slugify($category),
                    'status'=>'1'
                ]);

            }

        }
    }
}