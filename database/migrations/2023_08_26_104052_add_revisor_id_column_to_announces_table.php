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
        Schema::table('announces', function (Blueprint $table) {
            $table->unsignedBigInteger("revisor_id")->nullable()->after("user_id");

            $table->foreign("revisor_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('announces', function (Blueprint $table) {
            $table->dropForeign(["revisor_id"]);

            $table->dropColumn("revisor_id");
        });
    }
};
