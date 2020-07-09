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

        $sub_categories = ["Dresses","Shoes","Jackets","Sunglasses","Health and Beauty","Sport Wear",
            "Kids and Babies","Sports","Home and Garden","Shirts","T-shirts/ Polo Shirts","Blazers","Dresses","Shoes","Jackets","Sunglasses","Health and Beauty","Sport Wear",
            "Kids and Babies","Sports","Home and Garden","Shirts","T-shirts/ Polo Shirts","Blazers","Dresses","Shoes","Jackets","Sunglasses","Health and Beauty","Sport Wear",
            "Kids and Babies","Sports","Home and Garden","Shirts","T-shirts/ Polo Shirts","Blazers","Dresses","Shoes","Jackets","Sunglasses","Health and Beauty","Sport Wear",
            "Kids and Babies","Sports","Home and Garden","Shirts","T-shirts/ Polo Shirts","Blazers","Dresses","Shoes","Jackets","Sunglasses","Health and Beauty","Sport Wear",
            "Kids and Babies","Sports","Home and Garden","Shirts","T-shirts/ Polo Shirts","Blazers","Dresses","Shoes","Jackets","Sunglasses","Health and Beauty","Sport Wear",
            "Kids and Babies","Sports","Home and Garden","Shirts","T-shirts/ Polo Shirts","Blazers"
        ];

        foreach (range(1,13) as $index)
        {
            $category = $faker->name;
            foreach ($sub_categories as $subcat){
                subcategories::create([
                    'category_id'=>rand(1,10),
                    'subcat_name'=>$subcat,
                    'subcat_slug'=> slugify($subcat),
                    'subcat_logo' =>$this->etrandomImage(),
                    'status'=>'1'
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