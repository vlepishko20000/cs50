<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Apartament;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PostsSeeder::class);
    }
}
class PostsSeeder extends Seeder
{
	public function run()
	{
			DB::table('Posts')->delete();
			Post::create([
				"arrival_date" => "11.12.2017",
				"departure_date" => "11.12.2017",
				"adult_count" => "3",
				"contact_number" => "+380965895953",
				"childs_count" => "1",
			]);
			Post::create([
				"arrival_date" => "10.10.2017",
				"departure_date" => "11.12.2017",
				"adult_count" => "5",
				"contact_number" => "+380965895953",
				"childs_count" => "4",
			]);
			Post::create([
				"arrival_date" => "11.12.2017",
				"departure_date" => "11.12.2017",
				"adult_count" => "1",
				"contact_number" => "+380965895953",
				"childs_count" => "0",
			]);


			DB::table('Apartaments')->delete();
			Apartament::create([
        		'room'=>1,
        		'floor'=>1,
        		'adult_capacity'=>2,
        		'luxury'=>'normal',
        		'cost_per_day'=>10,
        		'currency'=>"$"
        	]);
			Apartament::create([
        		'room'=>2,
        		'floor'=>1,
        		'adult_capacity'=>4,
        		'luxury'=>'lux',
        		'cost_per_day'=>50,
        		'currency'=>"$"
        	]);
			Apartament::create([
        		'room'=>3,
        		'floor'=>1,
        		'adult_capacity'=>1,
        		'luxury'=>'budget',
        		'cost_per_day'=>5,
        		'currency'=>"$"
        	]);
        	Apartament::create([
        		'room'=>4,
        		'floor'=>1,
        		'adult_capacity'=>1,
        		'luxury'=>'budget',
        		'cost_per_day'=>5,
        		'currency'=>"$"
        	]);
		// DB::table('Posts')->delete();
		// Post::create([
		// 	'title'=> 'First Post',
		// 	'slug'=>'first-post',
		// 	'excerpt'=> '<b>First post body</b>',
		// 	'content'=> '<b>Content first post body</b>',
		// 	'published'=>true,
		// 	'published_at'=> DB::raW('CURRENT_TIMESTAMP'),
		// ]);
		// Post::create([
		// 	'title'=> 'Second Post',
		// 	'slug'=>'second-post',
		// 	'excerpt'=> '<b>Second post body</b>',
		// 	'content'=> '<b>Content Second post body</b>',
		// 	'published'=>false,
		// 	'published_at'=> DB::raW('CURRENT_TIMESTAMP'),
		// ]);
		// Post::create([
		// 	'title'=> 'Third Post',
		// 	'slug'=>'third-post',
		// 	'excerpt'=> '<b>Third post body</b>',
		// 	'content'=> '<b>Content third post body</b>',
		// 	'published'=>false,
		// 	'published_at'=> DB::raW('CURRENT_TIMESTAMP'),
		// ]);
	}
}
