<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('PermissionsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('PermissionRoleTableSeeder');
        $this->call('RoleUserTableSeeder');
        $this->call('CategoriasTableSeeder');
        $this->call('ComerciosTableSeeder');
        $this->call('ProductosTableSeeder');
        $this->call('ArticulosTableSeeder');
        $this->call('OauthClientsTableSeeder');
    }
}
