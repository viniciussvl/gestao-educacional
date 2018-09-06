<?php

use Illuminate\Database\Seeder;
use SON\Models\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create([
            'email' => str_random(10) . '@hotmail.com',
            'enrolment' => 100000
        ])->each(function(User $user){
        });
    }
}
