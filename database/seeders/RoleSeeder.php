<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name' => "Administrador"]);
        $role2 = Role::create(['name' => "profesores"]);
       //$role3 = Role::create(['name' => 'Estudiante']);

        //usuarios permisos de curso
        Permission::create(['name' => 'admincurso.create'])->assignRole($role1);
        Permission::create(['name' => 'admincurso.store'])->assignRole($role1);

        //usuarios permisos de administrador
        Permission::create(['name' => 'adminUsuarios.edit'])->assignRole($role1);
        Permission::create(['name' => 'adminUsuarios.update'])->assignRole($role1);
      


        //public permisos

     
        Permission::create(['name' => 'adminUsuarios.index'])->syncRoles([$role1 , $role2 ]);
     //   Permission::creare(['name' => 'comprarcurso.create'])->assignRole($role3);
        

    
        
        

         \App\Models\User::create([
            'name' => 'Administrador',
            'email' => 'Administrador@example.com',
            'password' => bcrypt('123456789'),
            'apellido' => 'eladministrador',
            'dni'=> '123456789',
            'sexo'=>'admin'

         ])->assignRole($role1);
         
        
    }
}
