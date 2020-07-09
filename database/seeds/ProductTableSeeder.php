<?php

use App\model\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();
        foreach (range(1,5)as $index)
        {
            foreach (range(1,1000) as $index)
            {
                $name= $faker->sentence;
                Product::create([
                    'cat_id' =>rand(1,10),
                    'sub_cat_id' =>rand(1,100),
                    'brand_id' =>rand(1,50),
                    'product_name' =>$name,
                    'slug' =>$name,
                    'model' =>'samsung',
                    'color' =>'black',
                    'size' =>'xl',
                    'buying_price' =>rand(500,900),
                    'selling_price' =>rand(100,450),
                    'special_price' =>rand(50,450),
                    'special_start' =>$faker->date(),
                    'special_end' =>$faker->date(),
                    'special_start' =>date('Y-m-d'),
                    'special_end' =>date('Y-m-d',strtotime('+1 month')),
                    'quantity' =>rand(5,10),
                    'warranty' =>0,
                    'warranty_duration' =>null,
                    'warranty_condition' =>null,
                    'video_url' =>null,
                    'image' =>$faker->imageUrl(),
                    'image' =>$this->etrandomImage(),
                    'galleary' =>null,
                    'description' =>$faker->paragraph,
                    'long_description' =>null,
                    'status' =>'1',
                ]);
            }
        }


    }
    public function etrandomImage()
    {
       $image= array( 'p1.jpg','p2.jpg','p3.jpg','p4.jpg','p5.jpg','p6.jpg',);
       return $image[array_rand($image)];
    }
}
