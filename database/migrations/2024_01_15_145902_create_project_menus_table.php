<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_project');
            $table->date('start_project');
            $table->date('finish_project');
            $table->string('keterangan_project');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_menus');
    }
};
