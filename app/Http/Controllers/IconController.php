<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Icon;

class IconController extends Controller
{
    /**
     *
     * Iconデータ一覧を表示
     *
     */
    public function index(){
    
	    return view('icon.index');
    }

    /**
     *
     * Iconデータ新規登録画面を表示
     *
     */
    public function create(){
    
  	    return view('icon.create');
    }

    public function show($icon_id) {

        //id番号●●のデータ取得
        $icon = Icon::find($icon_id);

        return view('icon.detail',compact('icon'));
    }

    public function store(Request $request){ //Request $requestでデータを受け取る

        $new_icon = new Icon();
        $new_icon->title = $request->title;
        $new_icon->description = $request->description;

        $new_icon->save();

        return redirect('/dashboard');
    }
}
