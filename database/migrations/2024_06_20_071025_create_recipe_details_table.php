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
        Schema::create('recipe_details', function (Blueprint $table) {
            $table->bigInteger('ingredient_id')->unsigned();
            $table->bigInteger('cooking_recipe_id')->unsigned();
            $table->float('amount')->nullable();
            $table->string('unit')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Thiết lập khóa ngoại
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
            $table->foreign('cooking_recipe_id')->references('id')->on('cooking_recipes')->onDelete('cascade');


            $table->primary(['ingredient_id', 'cooking_recipe_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_details');
    }
};
