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
        $user->email = 'admin@gmail.com';
        $user->password= 'Policia2023!';
        $user->role= 'admin';
        
        $user-> save();

        
        $user = new User;
        $user->name ='ventanilla';
        $user->apellido ='';
        $user->grado ='';
        $user->grupo ='';
        $user->email = 'ventanilla@gmail.com';
        $user->password= 'Vediprove!';
        $user->role= 'ventanilla';
        
        $user-> save();

        $user = new User;
        $user->name ='prueba';
        $user->apellido ='';
        $user->grado ='';
        $user->grupo ='';
        $user->email = 'prueba@gmail.com';
        $user->password= 'Policia2023!';
        $user->role= 'denuncia';
        
        $user-> save();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
    
}
