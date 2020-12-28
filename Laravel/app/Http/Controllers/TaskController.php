<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {

        // 全てのフォルダデータをDBから取得
        $folders = Folder::all();

        // view関数を使って、テンプレートに対してデータを渡し、その結果を返却（出力）する
        return view('tasks/index', [
            'folders' => $folders,
        ]);


        print("hollo");

    }
}
