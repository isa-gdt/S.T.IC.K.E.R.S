<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;

    protected $table = 'etiqueta';
    protected $primaryKey = 'idEti';
    public $timestamps = false;
    protected $fillable = ['idEti','tag'];


    public function stickerEtiqueta() {
        return $this->belongsToMany('App\Models\Sticker', 'sticker_etiqueta', 'idSti', 'idEti')->get();
    }

}
