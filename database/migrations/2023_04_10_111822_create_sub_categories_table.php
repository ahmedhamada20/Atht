<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->longText('name')->nullable();
            $table->longText('notes')->nullable();
            $table->longText('image')->nullable();
            $table->longText('notes_1')->nullable();
            $table->longText('notes_2')->nullable();
            $table->longText('notes_3')->nullable();
            $table->longText('notes_4')->nullable();
            $table->longText('notes_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
};
