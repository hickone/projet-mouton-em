<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(App\User::class, 3)->create();

      DB::Table('users')->insert([
          [
             'pseudo' => 'Laurent',
             'email' => 'laurent@laurent.fr',
             'password' => Hash::make('Laurent'),
          ],
          [
             'pseudo' => 'Eric',
             'email' => 'eric@eric.fr',
             'password' => Hash::make('Eric'),
          ],
          [
             'pseudo' => 'Younes',
             'email' => 'younes@v.fr',
             'password' => Hash::make('Younes'),
          ]
       ]) ;
    }
}

