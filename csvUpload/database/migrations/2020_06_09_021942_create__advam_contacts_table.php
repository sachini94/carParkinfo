<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvamContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('AdvamContacts', function (Blueprint $table) {

        $table->string('Parker_ID');
        $table->text('First_Name');
        $table->text('Surname');
        $table->text('Address_Line1');
        $table->text('Address_Line2');
        $table->text('Address_City');
        $table->text('Address_Postcode');
        $table->text('Mobile_Number');
        $table->text('Accept_Marketing_Info');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AdvamContacts');
    }
}
