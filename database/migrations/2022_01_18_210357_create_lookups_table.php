<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLookupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lookups', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('key')->nullable()->default(0);
            $table->integer('parent_id')->nullable();
            $table->integer('related_id')->nullable();
            $table->integer('media_image_id')->nullable();
            $table->string('name');
            $table->string('display_name')->nullable();
            $table->string('details')->nullable();
            $table->boolean('is_active')->default(0);
            $table->integer('ordering')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('lookups');
    }
}
