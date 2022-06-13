<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sticker;
use App\Models\Pack;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\packController;
use App\Http\Controllers\stickerController;

class stickerController extends Controller
{

    //ir al login
    // public function login (Request $req){
    //     return view('auth.login');
    // }

    //ir a registro
    // public function registro(Request $req){
    //     return view('auth.register');
    // }

    public function getStickersMain(Request $req){
        $stickers = Sticker::all();
        return view('stickers.main', ["sti" => $stickers]);
    }

    public function getStickers(Request $req){
        $stickers = Sticker::all();
        if(Auth::user()->type==0){
            return view('stickers.logged', ["sti" => $stickers]);
        } else{
            return view('admin.adminMain', ["sti" => $stickers]);
        }

    }

    public function goToProfile(Request $req){
        $user= Auth::user();
        return view('stickers.profile', ["usu" => $user]);
    }

    public function goToArtStation(Request $req){
        return view('stickers.artStation');
    }

    public function goToMyCollection(Request $req){
        $packs = Pack::where('idUsu', '=', Auth::user()->idUsu)->get();
        return view('stickers.myCollection', ["pack" => $packs]);
    }

    public function goToCreation(Request $req, Pack $pack){
        return view('stickers.artStation', ["pack"=>$pack]);
    }

    public function index(){
        return view('posts.index');
    }

    public function search(Request $request){
        $results = Sticker::where('title', 'LIKE', "%{$request->search}%")->get();

        $results = DB::select('SELECT img FROM sticker s, sticker_etiqueta se, etiqueta e WHERE s.idSti=se.idSti AND se.idEti = e.idEti AND (e.tag = "%{$request->search}%")')->get();

        //condicional para ver si está logueado o no
        return view('stickers.logged', compact('results'))->with(['search' => $request->search])->render();
    }

    public function show(Request $request){
        $post = Post::findOrFail($request->id);
        return view('posts.post', compact('post'))->render();}
}