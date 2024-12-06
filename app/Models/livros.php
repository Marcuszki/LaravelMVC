<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\autores;

class Livros extends Model
{
    public $timestamps = false;




    public function autor()
    {
        return $this->hasOne(autores::class,'id','id_autor');
    }

}

