
<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //$this->call(ProductsTableSeeder::class);
      $products = factory(App\Product::class)->times(1)->create();
			/*$users = factory(App\User::class)->times(15)->create();
      $categories = factory(App\Category::class)->times(10)->create();


      foreach ($users as $user){
        if ($user->country == 'Argentina'){
          $user->state='Buenos Aires';
        }
      }

			foreach ($products as $oneProduct) {
				$oneProduct->user()->associate($users->random(1)->first()->id);
				$oneProduct->category()->associate($categories->random(1)->first()->id);
				$oneProduct->save();
			}*/
    }
  }
