<?php

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
        $product = new \App\Product([
        		'imagePath'=>'https://images-na.ssl-images-amazon.com/images/I/919-FLL37TL.jpg',
        		'title'=> 'Game of Throne: Naruto',
        		'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ',
        		'price'=>10

        	]);
        $product->save();

        $product = new \App\Product([
        		'imagePath'=>'http://ecx.images-amazon.com/images/I/51Vb90Q1SlL._SX324_BO1,204,203,200_.jpg',
        		'title'=> 'Game of Throne: dragon ball',
        		'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ',
        		'price'=>10

        	]);
        $product->save();

        $product = new \App\Product([
        		'imagePath'=>'https://images-na.ssl-images-amazon.com/images/I/51UbZ8Kt7LL._SX327_BO1,204,203,200_.jpg',
        		'title'=> 'Game of Throne: Super saiyan',
        		'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ',
        		'price'=>10

        	]);
        $product->save();

        $product = new \App\Product([
        		'imagePath'=>'http://i.imgur.com/IibDqjf.jpg',
        		'title'=> 'Game of Throne: random',
        		'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ',
        		'price'=>10

        	]);
        $product->save();

        $product = new \App\Product([
        		'imagePath'=>'http://www.georgerrmartin.com/wp-content/uploads/2013/03/GOTMTI2.jpg',
        		'title'=> 'Game of Throne: Avatar',
        		'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ',
        		'price'=>10

        	]);
        $product->save();

    }
}
