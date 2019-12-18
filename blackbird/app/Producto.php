<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
class Producto extends Model
{
    public $table = "productos";

    public $timestamps = false;

    public $guarded = [];

    public function getCategoriaName(): string
    {
        if ($this->categoria_id) {
            $categoria = Categoria::find($this->categoria_id);
            return $categoria->nombre;
        }

        return 'Sin Categoria';
    }

    public function categoria()
    {
      return $this->belongsTo("App\Categoria","categoria_id");
    }
}
