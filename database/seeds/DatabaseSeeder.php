<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends \Styde\Seeder\BaseSeeder
{
  protected $truncate = array(
        'cars',
        'features',
        'users'
    );

  protected $seeders = array(
      'User',
      'Feature',
      'Car',
  );
    // /**
    //  * Run the database seeds.
    //  *
    //  * @return void
    //  */
    // public function run()
    // {
    //     Model::unguard();
    //
    //     // $this->call(UserTableSeeder::class);
    //     $this->call(CarTableSeeder::class);
    //     $this->call(FeatureTableSeeder::class);
    //
    //     Model::reguard();
    // }
}
