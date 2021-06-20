<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('会社ID');
            $table->string('name')->default('')->comment('会社名(商号)');
            $table->string('zipcode')->default('')->comment('郵便番号');
            $table->string('address')->default('')->comment('住所');
            $table->string('tel')->default('')->comment('電話番号');
            $table->string('email')->default('')->comment('メール');
            $table->string('representative_name')->default('')->comment('担当者名');
            $table->boolean('is_contract')->default(false)->comment('契約中判定');
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
        Schema::dropIfExists('companies');
    }
}
