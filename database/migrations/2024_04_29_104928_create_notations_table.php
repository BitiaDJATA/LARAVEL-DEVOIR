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
        Schema::create('notations', function (Blueprint $table) {
            $table->id();
            $table-> integer('qualitEns');
            $table-> integer('infrastructure');
            $table-> integer('recherche');
            $table-> integer('isertionPro');
            $table-> foreignId('internautes_id')->constrained();
            $table-> foreignId('universities_id')->constrained();
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(function(Blueprint $table){
            $table->dropConstrainedForeignId("internaute_id");
            $table->dropConstrainedForeignId("universities_id");
        });
        Schema::dropIfExists('notations');
    }
};
