<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToLookupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lookups', function (Blueprint $table) {
            $table->string('key')->nullable();
            $table->string('details')->nullable();
            $table->integer('ordering')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lookups', function (Blueprint $table) {
            $table->dropColumn('key');
            $table->dropColumn('details');
            $table->dropColumn('ordering');
        });
    }
}
