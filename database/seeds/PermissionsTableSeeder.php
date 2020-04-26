<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podrá editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Podrá eliminar cualquier usuario del sistema',
        ]);


        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podrá crear nuevos roles en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podrá editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podrá eliminar cualquier rol del sistema',
        ]);

        //Registros
        Permission::create([
            'name'          => 'Navegar Registros',
            'slug'          => 'products.index',
            'description'   => 'Lista y navega todos los registros del consumo del agua en el sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un registro',
            'slug'          => 'products.show',
            'description'   => 'Ver en detalle cada registro de la bitácora de consumo de agua en el sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de Registros',
            'slug'          => 'products.create',
            'description'   => 'Podrá crear nuevos registros de la bitácora de consumo de agua en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de Registros',
            'slug'          => 'products.edit',
            'description'   => 'Podrá editar cualquier registro de la bitácora de consumo de agua del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar Registros',
            'slug'          => 'products.destroy',
            'description'   => 'Podrá eliminar cualquier registro de la bitácora de consumo de agudel sistema',
        ]);


        //Reportes
        Permission::create([
            'name'          => 'Navegar en sección de Reportes',
            'slug'          => 'reportes.index',
            'description'   => 'Lista y navega todos los reportes de instalaciones en malas condiciones activos en el sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un Reporte',
            'slug'          => 'reportes.show',
            'description'   => 'Ver en detalle cada reporte de instalaciones en malas condiciones activos en el sistema',
        ]);



        Permission::create([
            'name'          => 'Edición de Reportes',
            'slug'          => 'reportes.edit',
            'description'   => 'Podrá editar cualquier reporte de instalaciones en malas condiciones activos en el sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar Reportes',
            'slug'          => 'reportes.destroy',
            'description'   => 'Podrá editar eliminar reporte de instalaciones en malas condiciones activos en el sistema',
        ]);


        //Edificios
        Permission::create([
            'name'          => 'Navegar en la sección de edificios',
            'slug'          => 'edificios.index',
            'description'   => 'Lista y navega todos los Edificios en el sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle información de un Edificio',
            'slug'          => 'edificios.show',
            'description'   => 'Ver en detalle cada Edificio del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de Edificios',
            'slug'          => 'edificios.create',
            'description'   => 'Podrá crear nuevos registros de Edificios en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de Edificios',
            'slug'          => 'edificios.edit',
            'description'   => 'Podrá editar cualquier registro de Edificios en el sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar Edificios',
            'slug'          => 'edificios.destroy',
            'description'   => 'Podrá eliminar cualquier registro de Edificios en el sistema',
        ]);



    }
}
