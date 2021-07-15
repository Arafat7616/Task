<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Blogger;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Mr. User';
        $user->email = 'user@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $blogger = new Blogger();
        $blogger->name = 'Mr. Blogger';
        $blogger->email = 'blogger@gmail.com';
        $blogger->password = Hash::make('123456');
        $blogger->save();

        $admin = new Admin();
        $admin->name = 'Mr. Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('123456');
        $admin->save();
    }
}
