<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Abogado = Role::create(['name' => 'Abogado']);
        $cliente = Role::create(['name' => 'Cliente']);
 
 
        $permiso1 = Permission::create(['name' => 'caso.index'])->syncRoles([$Abogado, $cliente]);
        $permiso2 =  Permission::create(['name' => 'caso.create'])->syncRoles([$Abogado, $cliente]);
        $permiso3 =  Permission::create(['name' => 'caso.store'])->syncRoles([$Abogado, $cliente]);
        $permiso4 =  Permission::create(['name' => 'editarcaso'])->syncRoles([$Abogado, $cliente]);
        $permiso5 =   Permission::create(['name' => 'caso.uptate'])->syncRoles([$Abogado, $cliente]);
        $permiso6 =  Permission::create(['name' => 'eliminarcaso'])->syncRoles([$Abogado, $cliente]);
     
    }
}
