<?php

use App\Category;
use App\Product;
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
        $categories = Category::all();
        if ($categories->count() == 0) {
            $categories = factory(Category::class, 10)->create();
        }
        $random_categories = $categories->random(3)->pluck('id')->all();
        $product = factory(Product::class)->create();
        $product->categories()->attach($random_categories);
    }
}
