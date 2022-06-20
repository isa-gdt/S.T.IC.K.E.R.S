<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sticker;
use App\Models\Pack;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\packController;
use App\Http\Controllers\stickerController;
use Illuminate\Support\Facades\DB;

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
        $stickers = Pack::all();
        return view('stickers.main', ["sti" => $stickers]);
    }

    public function getStickers(Request $req){
        $stickers = Pack::all();
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
        $packs = Pack::where('idUsu', '=', Auth::user()->idUsu)->get();
        return view('stickers.artStation', ["packs" => $packs]);
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

    public function createSticker(Request $req){
        $pack = DB::table('pack')->where('name', '=', $req->packName)->first();
        Sticker::create([
            'idSti'=> null,
            'idPack'=>$pack->idPack??1,
            'img'=>$req->img,
        ]);

        return redirect()->route('myCollection');


    }

    public function uploadImg(Request $req){
        $packs = Pack::where('idUsu', '=', Auth::user()->idUsu)->get();

        if($req->hasFile('file')){
            $file = $req->file('file');
            $destinationPath = '../img/';
            $fileName = time(). '-' . $file->getClientOriginalName();
            $uplopadSuccess = $req->file('file')->move($destinationPath, $fileName);

        }
        return view('stickers.artStation', ["img"=>$fileName], ["packs" => $packs]);
    }


}
