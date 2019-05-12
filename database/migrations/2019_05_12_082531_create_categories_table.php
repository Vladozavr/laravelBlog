<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();//ЧПУ Ссылка вида
            $table->integer('parent_id')->nullable();//Для вложености категорий
            $table->tinyInteger('published')->nullable();//Статус опубликовано или нет
            $table->integer('created_by')->nullable();//Кто создал
            $table->tinyInteger('modified_by')->nullable();//Кто модифицировал
            $table->timestamps();//Дата создания и дата обновления записи
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
