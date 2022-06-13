<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    protected $table = 'pack';
    protected $primaryKey= 'idPack';
    public $timestamps = false;

    protected $fillable = ['idPack', 'idUsu','name', 'creation_date'];

    public function user() {
        return $this->belongsTo('App\Models\User', 'idUsu', 'IdUsu')->get();
    }

    public function stickersPack(){
        return $this->hasMany('App\Models\Sticker', 'idPack', 'idPack')->get();
    }


}
