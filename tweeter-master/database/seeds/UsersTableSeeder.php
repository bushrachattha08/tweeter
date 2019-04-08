<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //  'name' => Str::random(10),
          // 'last_name' => Str::random(10),
         // 'email' => Str::random(10).'@gmail.com',
          // 'gender' => Str::random(10).'@gmail.com',
          //   'country' => Str::random(10).'@gmail.com',
          //     'dob' => Str::random(10).'@gmail.com',
          //       'telephone' => Str::random(10).'@gmail.com',
     //     'password' => bcrypt('secret'),
     // ]);
     factory(App\User::class, 100)->create()->each(function ($user) {
         for($i=0;$i<=rand(1,10); $i++){


       $user->posts()->save(factory(App\Post::class)->make());
   }
   });
    }
}
