<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class, 3)->create();
        $categories->each(function ($category) {
          $products = factory(Product::class, 15)->make();
          $category->products()->saveMany($products);

          $products->each(function ($p) {
            $images = factory(ProductImage::class, 3)->make();
            $p->images()->saveMany($images);
          });
        });
        // factory(Product::class, 100)->create();
        // factory(ProductImage::class, 200)->create();
    }
}
