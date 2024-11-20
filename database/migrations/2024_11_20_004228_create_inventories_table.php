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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->text('supplement_name')->nullable();
            $table->text('file_name')->nullable();
            $table->text('file_path')->nullable();
            $table->float('price', 8, 2);
            $table->integer('stock')->nullable();
            $table->text('nutrition_facts')->nullable();
            $table->unsignedBigInteger('created_by')->length(10)->nullable();
            $table->unsignedBigInteger('updated_by')->length(10)->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
