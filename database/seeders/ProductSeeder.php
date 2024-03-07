<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Chanel No.5',
                'description' => 'Chanel',
                'image' => 'https://i.pinimg.com/564x/62/b4/9b/62b49b35c4d8d4352e5b0094f96afea8.jpg',
                'price' => 120
            ],
            [
                'name' => 'Miss Dior',
                'description' => 'Dior',
                'image' => 'https://i.pinimg.com/564x/23/56/68/235668cfc31cd8eaa5d4c27f1de64f49.jpg',
                'price' => 200
            ],
            [
                'name' => 'Gucci Flora',
                'description' => 'Gucci',
                'image' => 'https://i.pinimg.com/564x/5b/3c/a3/5b3ca34021cf45a9d55edba53493c4ff.jpg',
                'price' => 150
            ],
            [
                'name' => 'kate sprade',
                'description' => 'New York',
                'image' => 'https://i.pinimg.com/564x/07/f2/1f/07f21fdba2946b659f8de920984464ac.jpg',
                'price' => 89
            ],
            [
                'name' => 'Prada Milano',
                'description' => 'Prada',
                'image' => 'https://i.pinimg.com/564x/cb/2e/4b/cb2e4bcee7b62678facabe4d966e900d.jpg',
                'price' => 120
            ],
            [
                'name' => 'Versace Bright Crystal',
                'description' => 'Versace',
                'image' => 'https://i.pinimg.com/736x/ec/fc/92/ecfc921f848145e4baaeee06f9e710c0.jpg',
                'price' => 249
            ],
            [
                'name' => 'Kay Ali',
                'description' => 'Vanila',
                'image' => 'https://i.pinimg.com/564x/bd/2a/d4/bd2ad4f8e4fb4ce58a5bfe5661121bba.jpg',
                'price' => 97
            ],
            [
                'name' => 'Victoria Secret',
                'description' => 'Tease ',
                'image' => 'https://i.pinimg.com/564x/c7/93/4c/c7934ca388ceb7db6c9b2d525fcb2165.jpg',
                'price' => 187
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    
        //
    }
}
