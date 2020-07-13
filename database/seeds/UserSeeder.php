<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // setup the Roles
        DB::table('roles')->insert([
            ['name' => 'user'],
            ['name' => 'super-admin'],
            ['name' => 'admin-2'],
            ['name' => 'admin-3'],
        ]);

        // setup the Super Admin
        $superAdmin = App\User::create([
            'email' => 'info@naijavegas.com',
            'email_verified_at' => now(),
            'phonenumber' => '+2348163686817',
            'password' => Hash::make('super-pass01'),
            'remember_token' => Str::random(10),
            'role_id' => 2,
        ]);

        $superAdmin->profile()->create([
            'firstname' => 'Hector',
            'lastname' => 'Onojobi',
        ]);
        // setup dummy data for test purposes
        factory(App\User::class, 10)->create()->each(function ($user) {
            //create profiles for each user
            $user->profile()->save(factory(App\Profile::class)->make());

            //create wallet for new user
            $user->wallet()->save(factory(App\Wallet::class)->make());
        });
    }
}
