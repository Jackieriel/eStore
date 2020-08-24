<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('products')->insert([
              'product_name' => 'Tecno Pop3',
              'product_image' => 'default-image.png',
              'product_details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur voluptatem quaerat eveniet numquam eligendi corporis, inventore illo laudantium perspiciatis doloribus mollitia, minus id fugiat distinctio sequi libero vero iure doloremque!',
              'price' => '27000',
              'created_at' => Carbon::now(),
            ]);
        }
    }
}
