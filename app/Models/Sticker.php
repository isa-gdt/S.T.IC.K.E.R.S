<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sticker extends Model
{
    use HasFactory;

    protected $table = 'sticker';
    protected $primaryKey = 'idSti';
    public $timestamps = false;

    protected $fillable = ['idSti','idPack','img'];

    public function etiquetaSticker() {
        return $this->belongsToMany('App\Models\Etiqueta', 'sticker_etiqueta', 'idEti', 'idSti')->get();
    }

    public function packSticker(){
        return $this->belongsTo('App\Models\Pack', 'idPack', 'idPack')->get();
    }
}
