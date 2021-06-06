<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Car::class, 70) -> make()
            -> each(function($cars){

                $brand = Brand::inRandomOrder() -> first();
                $cars -> brand() -> associate($brand);
                $cars -> save();
            });
    }
}
