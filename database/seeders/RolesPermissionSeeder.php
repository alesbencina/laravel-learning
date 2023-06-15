<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionSeeder extends Seeder {

  /**
   * To run the seeder you have to run
   *
   * @command php artisan migrate:fresh --seed
   */
  /**
   * Seed the application's database.
   */
  public function run(): void {
    // You can also manually assign the role via the artisan tinker
    // $user = User::where('id',3)->first();
    // $user->assignRole('admin');

    Permission::create(['name' => 'create-users']);
    Permission::create(['name' => 'edit-users']);
    Permission::create(['name' => 'delete-users']);

    Permission::create(['name' => 'create-blog-posts']);
    Permission::create(['name' => 'edit-blog-posts']);
    Permission::create(['name' => 'delete-blog-posts']);

    $adminRole = Role::create(['name' => 'admin']);
    $writerRole = Role::create(['name' => 'writer']);

    $adminRole->givePermissionTo([
      'create-users',
      'edit-users',
      'delete-users',
      'create-blog-posts',
      'edit-blog-posts',
      'delete-blog-posts',
    ]);

    $writerRole->givePermissionTo([
      'create-blog-posts',
      'edit-blog-posts',
      'delete-blog-posts',
    ]);

    $adminUser = User::factory()->create([
      'name' => 'Admin',
      'password' => '123',
      'email' => 'admin@mail.com'
    ]);
    $adminUser->assignRole($adminRole);

    $writer = User::factory()->create([
      'name' => 'Writer',
    ]);
    $writer->assignRole($writerRole);

  }

}
