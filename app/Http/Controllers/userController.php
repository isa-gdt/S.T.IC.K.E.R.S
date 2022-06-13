<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pack;
use App\Models\Sticker;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function edit(Request $req, User $usu){
        $usu->name = $req->name??$usu->name;
        $usu->email = $req->email??$usu->email;
        $usu->type = $req->type==0?'Premium':'Admin'??$req->type;
        $usu->save();
        return redirect()->route('sticker.profile');
    }

    public function delete (Request $req, User $usu){
        $usu->delete();
        if(Auth::user()->type==0){
            return redirect()->route('logout');
        } else{
            return redirect()->route('admin.users');
        }

    }

    public function goToAdminMain(Request $req){
        $stickers = Sticker::all();
        return view ('admin.AdminMain',["sti" => $stickers]);
    }

    public function goToAdmin(Request $req){
        return view('admin.admin');
    }

    public function goToUsers(Request $req){
        $users = User::all();
        return view('admin.users', ["users"=>$users]);
    }

    public function goToPacks(Request $req){
        $packs = Pack::all();
        $users = User::all();
        return view('admin.packs', ["packs"=>$packs, "users"=>$users]);
    }

    public function createUser(Request $req){
        $type = $req->type =='Premium'?0:1;
        User::create([
            'idUsu'=>null,
            'avatar'=>null,
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>12345,
            'type'=>$type,
            'creation_date'=>now(),
        ]);
        return redirect()->route('admin.users');
    }

}