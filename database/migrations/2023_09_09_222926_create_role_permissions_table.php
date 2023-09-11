<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('roleTypeUser_id');
            $table->unsignedInteger('permission_id');
            $table->timestamps();

            $table->foreign('roleTypeUser_id')->references('RoleTypeUserID')->on('roleTypeUsers')->onDelete('cascade');
            $table->foreign('permission_id')->references('PermissionID')->on('permissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_permissions');
    }
};
