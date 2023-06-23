<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = new User;
        $user->name ='Admin';
        $user->apellido ='';
        $user->grado ='';
        $user->grupo ='';
        $user->email = 'afranklin.romero@gmail.com';
        $user->password= 'Afrm4321!';
        $user->role= 'admin';
        
        $user-> save();

        
        $user = new User;
        $user->name ='prueba';
        $user->email = 'prueba@gmail.com';
        $user->password= 'Afrm4321!';
        $user->role= '';
        
        $user-> save();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
    
}
