<?php

use App\model\Subcategories;
use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
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
            $subcategory = $faker->name;
            subcategories::create([
                'category_id'=>rand(1,10),
                'subcat_name'=>$faker->name,
                'subcat_logo'=>$faker->name,
                'subcat_slug'=> slugify($subcategory),
                'status'=>rand(1,0)
            ]);
        }

    }
}
