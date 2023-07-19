<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;




return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'ventanilla']);
        $role3 = Role::create(['name' => 'denuncia']);
      
        //$permission = Permission::create(['name' => 'edit articles']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
