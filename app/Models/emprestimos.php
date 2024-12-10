<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\autores;
use App\Models\livros;


class Emprestimos extends Model
{
   public $timestamps = false;

   public function autor()
    {
        return $this->hasOne(autores::class,'id','id_autor');
    }

    public function livros()
    {
        return $this->hasOne(livros::class,'id','id_livro');
    }
}

