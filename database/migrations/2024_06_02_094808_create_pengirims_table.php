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
        Schema::create('pengirims', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('noHp');
            $table->string('alamat');
            $table->timestamps();
        });
        Schema::table('pengirims', function (Blueprint $table) { 
            $table->foreign('pengirims')->references('id')->on('pengirims')
            ->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengirims');
        Schema::table('pengirims', function(Blueprint $table) {
            $table->dropForeign('pengirims_customers_id_foreign');
        });
        Schema::table('pengirimss', function(Blueprint $table) {
            $table->dropIndex('pengirims_customers_id_foreign');
        });
        Schema::table('pengirimss', function(Blueprint $table) {
            $table->dropForeign('pengirims_customers_id_foreign');
        });
        Schema::table('pengirims', function(Blueprint $table) {
            $table->dropIndex('pengirims_customers_id_foreign');
        });
        Schema::dropIfExists('pengirims');
    }
};