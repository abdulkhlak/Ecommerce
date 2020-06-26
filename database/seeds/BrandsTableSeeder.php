<?php

use App\model\brands;
use Illuminate\Database\Seeder;


class BrandsTableSeeder extends Seeder
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
            $brand = $faker->name;
            brands::create([
                'brand_name'=>$faker->name,
                'brand_logo'=>$faker->name,
                'brand_slug'=> slugify($brand),
                'status'=>rand(0,1)
            ]);
        }
    }
}
