<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $role=Role::where('name','Doctor')->first();
        if(!$role){
            $role = Role::create(['name' => 'Doctor']);
        }
        
        $email=env('APP_EMAIL_ADMIN');

        $user=User::where('email',$email)->first();

        if(!$user){
            $user=new User();
            $user->name = $email;
            $user->email = $email;
            $user->password = Hash::make($email);
            $user->save();
        }

        $user->assignRole($role);

    }
}
