<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Enums\SubCategory\Status;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('image_path')->default('no_image_available.jpg')->nullable();
            $table->string('buying_price')->nullable();
            $table->string('selling_price')->nullable();
            $table->string('measurement_unit')->nullable();
            $table->string('eraned_profit')->nullable();
            $table->string('current_qty')->nullable();
            $table->string('reorder_level')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('status')->default(SubCategoryStatus::PUBLISH)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
