<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->default(1); //qui crea la colonna con la sua descrizione del contenuto
            $table->foreign('user_id')->references('id')->on('users'); //gli stiamo dicendo che è chiave esterna che fa riferimento alla colonna id della tabella users
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->dropForeign(['user_id']); //prima sganciamo la chiave
            $table->dropColumn('user_id'); //poi cancelliao la colonna
        });
    }
};
