<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pack;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class packController extends Controller
{
    public function all(Request $req){
        return view('stickers.main', ["packs"=>Pack::all()]);
    }

    public function delete(Request $req, Pack $pack){
        $pack->delete();
        if(Auth::user()->type==0){
            return redirect()->route('myCollection');
        } else{
            return redirect()->route('admin.packs');
        }

    }

    public function create(Request $req){
        // $user=User::where('name','=',$req->user)->get();
        $user = DB::table('user')->where('name','=',$req->user)->first();
        // dd($user);
        Pack::create([
            'idPack'=>null,
            'idUsu'=>$user->idUsu??Auth::user()->idUsu,
            'name'=>$req->name,
            'creation_date'=>now(),
        ]);
        if(Auth::user()->type==0){
            return redirect()->route('myCollection');
        } else{
            return redirect()->route('admin.packs');
        }
    }

    public function editPackView(Request $req, Pack $pack){
        return view ('admin.editPack', ["pack"=>$pack]);
    }


    public function editPack(Request $req, Pack $pack){

        $pack->name = $req->name??$pack->name;
        $pack->idUsu = $req->idUsu??$pack->idUsu;
        $pack->save();
        if(Auth::user()->type==0){
            return redirect()->route('profile');
        } else{
            return redirect()->route('admin.packs');
        }

    }



}
