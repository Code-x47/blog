<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Driver\AbstractMySQLDriver;

class RenameScienceIdInSportcomments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sportcomments', function (Blueprint $table) {
             $table->renameColumn("science_id","sports_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sportcomments', function (Blueprint $table) {
            // $table->renameColumn("sports_id","science_id");
        });
    }
}
