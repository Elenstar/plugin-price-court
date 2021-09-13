<?php namespace ElenStar\Offers\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePricesTable extends Migration
{
    public function up()
    {
        Schema::create('elenstar_offers_prices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->longText('content')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('elenstar_offers_prices');
    }
}
