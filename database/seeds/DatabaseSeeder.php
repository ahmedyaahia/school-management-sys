<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);

        $user = User::create([
            'name'          => 'Ahmed Admin',
            'email'         => 'ahmed.adminn@gmail.com',
            'password'      => bcrypt('123456789'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user->assignRole('Admin');


    }
}
