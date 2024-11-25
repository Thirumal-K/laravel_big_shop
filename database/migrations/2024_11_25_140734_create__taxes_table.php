<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Enums\TaxeStatus;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_taxes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('taxe_status')->default(TaxeStatus::NONE_ZERO_PERCENT)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_taxes');
    }
};
