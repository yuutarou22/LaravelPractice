<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // -----foldersというテーブルを作成-----
        Schema::create('folders', function (Blueprint $table) {
            // -----各カラムの作成-----
            // 自動採番のID
            $table->increments('id');
            // 20文字以内のタイトル文字列
            $table->string('title', 20);
            // 作成・更新日時
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
        Schema::dropIfExists('folders');
    }
}
