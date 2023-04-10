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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable();
            $table->longText('notes')->nullable();
            $table->longText('rating')->nullable();
            $table->foreignId('sub_category_id')->constrained('sub_categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('color_id')->constrained('colors')->cascadeOnDelete()->cascadeOnUpdate();
            $table->longText('price_sub')->nullable();
            $table->longText('price')->nullable();

            $table->longText('notes_1')->nullable();
            $table->longText('notes_2')->nullable();
            $table->longText('notes_3')->nullable();
            $table->longText('notes_4')->nullable();
            $table->longText('notes_5')->nullable();
            $table->longText('notes_6')->nullable();
            $table->longText('notes_7')->nullable();
            $table->longText('notes_8')->nullable();
            $table->longText('notes_9')->nullable();
            $table->longText('notes_10')->nullable();
            $table->longText('notes_11')->nullable();
            $table->longText('notes_12')->nullable();
            $table->longText('notes_13')->nullable();
            $table->longText('notes_14')->nullable();
            $table->longText('notes_15')->nullable();
            $table->longText('notes_16')->nullable();
            $table->longText('notes_17')->nullable();
            $table->longText('notes_18')->nullable();
            $table->longText('notes_19')->nullable();
            $table->longText('notes_20')->nullable();
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
        Schema::dropIfExists('products');
    }
};
