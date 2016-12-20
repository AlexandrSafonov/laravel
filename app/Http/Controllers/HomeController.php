<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Images;
use App\Models\Img;
use DB;

class HomeController extends Controller {

    public function index() {

        $data = Img::all();
//        return view('pages.messages.index', $data);
        return $data->toJson();
    }

    public function add(Request $request) {
        DB::table('imgs')->insert(
                array('name' => 'asdf')
        );
    }

    public function edit($id) {
        $data = [
            'title' => 'Редактирование: Гостевая книга на Laravel',
            'pagetitle' => 'Редактирование: Гостевая книга'
        ];
        return view('pages.messages.edit', $data);
    }

}
