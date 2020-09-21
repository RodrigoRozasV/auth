<?php

use Illuminate\Database\Seeder;
use App\Rol;

class StartSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRol = new Rol();
        $userRol->name = "User";
        $userRol->save();

        $userRol = new Rol();
        $userRol->name = "Admin";
        $userRol->save();

    }
}
