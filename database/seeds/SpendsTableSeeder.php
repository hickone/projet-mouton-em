<?php

use Illuminate\Database\Seeder;

class SpendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Spend::class, 30)->create()->each(function($spend){

            $users = \App\User::pluck('id')->all();

            $spendId = $spend->id;

            $depense = $spend->price;

            if($spend->price>1000){
                $max = count($users);
                $nbUser = rand(2, count($users) );

                $usersId = [];
                $usersId[] = $users[rand(0, $max-1)];

                while( count($usersId) < $nbUser){

                    $id = $users[rand(0, $max-1)];

                    while( in_array($id, $usersId)){

                        $id = $users[rand(0, $max-1)];

                    }
                    $usersId[] = $id;

                }

                $part = round( $spend->price/$nbUser, 2);

                $spend->users()->attach( $usersId, ['price' => $part] );
            }

        });


    }

}
