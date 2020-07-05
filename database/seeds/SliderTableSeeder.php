<?php

use App\model\Slider;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();
        foreach (range(1,5) as $index)
        {
            Slider::create([
                'title'=>$faker->sentence,
                'sub_title'=>$faker->paragraph,
                'image'=>$faker->imageUrl(),
                'url'=>$faker->imageUrl(),
                'start_date'=>$faker->date(),
                'end_date'=>$faker->date(),
                'status'=> $this->getRandomStatus()
            ]);
        }
    }
}
