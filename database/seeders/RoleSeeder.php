<?php

namespace Database\Seeders;

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
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Editor']);
        $role3 = Role::create(['name'=>'Reservas']);

        Permission::create(['name'=>'admin.home',
        'description' => 'Ver el Dashboard'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.users.index',
        'description' => 'Ver lista de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.create',
        'description' => 'Crear nuevo usuario'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit',
        'description' => 'Editar usuario'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.destroy',
        'description' => 'Eliminar usuario'])->syncRoles([$role1]);


        Permission::create(['name'=>'admin.categories.index',
        'description' => 'Ver listado de categories'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.categories.create',
        'description' => 'Crear Cateogrias'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.categories.edit',
        'description' => 'Editar Categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.categories.destroy',
        'description' => 'Eliminar Categorias'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.tags.index',
        'description' => 'Ver lista de tags'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.tags.create',
        'description' => 'Crear nuevo tag'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.tags.edit',
        'description' => 'Editar tags'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.tags.destroy',
        'description' => 'Eliminar tags'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.posts.index',
        'description' => 'Ver lista de posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.posts.create',
        'description' => 'Crear nuevo post'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.posts.edit',
        'description' => 'Editar pots'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.posts.destroy',
        'description' => 'Eliminar post'])->syncRoles([$role1, $role2]);
        

        Permission::create(['name'=>'admin.nations.index',
        'description' => 'Ver lista de paises'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.nations.create',
        'description' => 'Crear nuevo pais'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.nations.edit',
        'description' => 'Editar Pais'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.nations.destroy',
        'description' => 'Eliminar Pais'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.destinations.index',
        'description' => 'Ver Lista de destinos'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.destinations.create',
        'description' => 'Crear nuevo destino'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.destinations.edit',
        'description' => 'Editar  destino'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.destinations.destroy',
        'description' => 'Eliminar Destino'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name'=>'admin.tours.index',
        'description' => 'Ver lista de tours'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.tours.create',
        'description' => 'Crear nuevo tour'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.tours.edit',
        'description' => 'Editar tours'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.tours.destroy',
        'description' => 'Eliminar Tour'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.extensions.index',
        'description' => 'Ver lista de Extensiones'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.extensions.create',
        'description' => 'Crear nuevo extension'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.extensions.edit',
        'description' => 'Editar Extension'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.extensions.destroy',
        'description' => 'Eliminar Extension'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.activities.index',
        'description' => 'Ver lista de activities'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.activities.create',
        'description' => 'Crear nuevo activities'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.activities.edit',
        'description' => 'Editar activities'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.activities.destroy',
        'description' => 'Eliminar activities'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.hotels.index',
        'description' => 'Ver lista de hoteles'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.hotels.create',
        'description' => 'Crear nuevos hoteles'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.hotels.edit',
        'description' => 'Editar Hoteles'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.hotels.destroy',
        'description' => 'Eliminar hoteles'])->syncRoles([$role1, $role2]);

        // Reservas
        Permission::create(['name'=>'admin.entrances.index',
        'description' => 'Ver lista de Entradas'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.entrances.create',
        'description' => 'Crear nuevos Entradas'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.entrances.edit',
        'description' => 'Editar Entradas'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.entrances.destroy',
        'description' => 'Eliminar Entradas'])->syncRoles([$role1, $role3]);      
        
        Permission::create(['name'=>'admin.guides.index',
        'description' => 'Ver lista de Guias'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.guides.create',
        'description' => 'Crear nuevos Guias'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.guides.edit',
        'description' => 'Editar Guias'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.guides.destroy',
        'description' => 'Eliminar Guias'])->syncRoles([$role1, $role3]);      

        Permission::create(['name'=>'admin.accomodations.index',
        'description' => 'Ver lista de accomodations'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.accomodations.create',
        'description' => 'Crear nuevos accomodations'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.accomodations.edit',
        'description' => 'Editar accomodations'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.accomodations.destroy',
        'description' => 'Eliminar accomodations'])->syncRoles([$role1, $role3]);      

        Permission::create(['name'=>'admin.lodges.index',
        'description' => 'Ver lista de lodges'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.lodges.create',
        'description' => 'Crear nuevos lodges'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.lodges.edit',
        'description' => 'Editar lodges'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.lodges.destroy',
        'description' => 'Eliminar lodges'])->syncRoles([$role1, $role3]);

        Permission::create(['name'=>'admin.operators.index',
        'description' => 'Ver lista de operators'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.operators.create',
        'description' => 'Crear nuevos operators'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.operators.edit',
        'description' => 'Editar operators'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.operators.destroy',
        'description' => 'Eliminar operators'])->syncRoles([$role1, $role3]);

        Permission::create(['name'=>'admin.restaurants.index',
        'description' => 'Ver lista de restaurants'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.restaurants.create',
        'description' => 'Crear nuevos restaurants'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.restaurants.edit',
        'description' => 'Editar restaurants'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.restaurants.destroy',
        'description' => 'Eliminar restaurants'])->syncRoles([$role1, $role3]);

        Permission::create(['name'=>'admin.transfers.index',
        'description' => 'Ver lista de transfers'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.transfers.create',
        'description' => 'Crear nuevos transfers'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.transfers.edit',
        'description' => 'Editar transfers'])->syncRoles([$role1, $role3]);
        Permission::create(['name'=>'admin.transfers.destroy',
        'description' => 'Eliminar transfers'])->syncRoles([$role1, $role3]);

        Permission::create(['name'=>'admin.inquires',
        'description' => 'Ver el Inquire'])->syncRoles([$role1,$role3]);



    }
}
