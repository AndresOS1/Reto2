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
 
 
        $permiso1 = Permission::create(['name' => 'caso.index'])->syncRoles([$Abogado]);
        $permiso2 =  Permission::create(['name' => 'caso.create'])->syncRoles([$Abogado, $cliente]);
        $permiso3 =  Permission::create(['name' => 'caso.store'])->syncRoles([$Abogado, $cliente]);
        $permiso4 =  Permission::create(['name' => 'editarcaso'])->syncRoles([$Abogado]);
        $permiso5 =   Permission::create(['name' => 'caso.uptate'])->syncRoles([$Abogado]);
        $permiso6 =  Permission::create(['name' => 'eliminarcaso'])->syncRoles([$Abogado]);
     


        $permiso7 = Permission::create(['name' => 'rama.index'])->syncRoles([$Abogado]);
        $permiso8 =  Permission::create(['name' => 'rama.create'])->syncRoles([$Abogado]);
        $permiso9 =  Permission::create(['name' => 'rama.store'])->syncRoles([$Abogado]);
        $permiso10 =  Permission::create(['name' => 'editarrama'])->syncRoles([$Abogado]);
        $permiso11 =   Permission::create(['name' => 'actualizarrama'])->syncRoles([$Abogado]);
        $permiso12 =  Permission::create(['name' => 'eliminarrama'])->syncRoles([$Abogado]);
    }
}
