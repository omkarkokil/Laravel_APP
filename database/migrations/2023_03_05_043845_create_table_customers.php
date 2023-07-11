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
        Schema::create('table_customers', function (Blueprint $table) {
            $table->id("customer_id");
            $table->string("name", 60);
            $table->string("email", 100);
            $table->enum("gender", ["male", "female", "other"])->nullable();
            $table->text("address");
            $table->date("DOB");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_customers');
    }
};
