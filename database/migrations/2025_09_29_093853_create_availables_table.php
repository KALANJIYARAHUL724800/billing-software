<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('availables', function (Blueprint $table) {
            $table->id();
            $table->integer('one_rupees')->nullable(true);
            $table->integer('two_rupees')->nullable(true);
            $table->integer('five_rupees')->nullable(true);
            $table->integer('ten_rupees')->nullable(true);
            $table->integer('twenty_rupees')->nullable(true);
            $table->integer('fifty_rupees')->nullable(true);
            $table->integer('hundread_rupees')->nullable(true);
            $table->integer('two_hundread_rupees')->nullable(true);
            $table->integer('five_hundread_rupees')->nullable(true);
            $table->integer('thousand_rupees')->nullable(true);
            $table->integer('two_thousand_rupees')->nullable(true);
            $table->double('total')->nullable(true);
            $table->boolean('active_flag')->default(true)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('availables');
    }
};
