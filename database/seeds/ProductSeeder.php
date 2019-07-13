<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  /* $i=1;
        while ($i<=100){
            \App\Product::create([
                'name'=>'product'.$i,
                'details'=>'product'.$i.' details'
            ]);
            $i++;
        }*/

        factory(Product::class,100)->create();
    }
}
