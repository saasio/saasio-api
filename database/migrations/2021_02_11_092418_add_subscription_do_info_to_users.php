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
        Schema::table('users', function (Blueprint $table) {
            $table->string('stripe_scription_id')->nullable();
            $table->string('stripe_price_id')->nullable();
            $table->string('do_instance_id')->nullable();
            $table->string('do_ip')->nullable();
            $table->string('do_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('stripe_scription_id');
            $table->dropColumn('stripe_price_id');
            $table->dropColumn('do_instance_id');
            $table->dropColumn('do_ip');
            $table->dropColumn('do_status');
        });
    }
};
