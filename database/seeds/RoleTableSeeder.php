<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'maestro';
        $role->description = 'Maestro';
        $role->save();

        $role = new Role();
        $role->name = 'alumno';
        $role->description = 'Alumno';
        $role->save();
    }
}
