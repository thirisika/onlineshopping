<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
//use TCG\Voyager\Traits\Seedable;

class VoyagerDatabaseSeeder extends Seeder
{
    //use Seedable;

    //protected $seedersPath = __DIR__.'/';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$this->seed('DataTypesTableSeeder');
        $this->seed('DataRowsTableSeeder');
        $this->seed('MenusTableSeeder');
        $this->seed('MenuItemsTableSeeder');
        $this->seed('RolesTableSeeder');
        $this->seed('PermissionsTableSeeder');
        $this->seed('PermissionRoleTableSeeder');
        $this->seed('SettingsTableSeeder');*/

        $this->call([
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            SettingsTableSeeder::class,
        ]);
    }
}
