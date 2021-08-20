<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos() {
        // return $this->belongsToMany('App\Produto', 'pedidos_produtos');
        return $this->belongsToMany('App\Produto', 'pedidos_produtos', 'produto_id');

        /**
         * 1 modelo relacionado NxN em relacao o Modelo que estamos
         * 2 É a tabela auxiliar que armazena os registros
         * 3 Representa o nome da FK da tabala mapeada pelo modelo na tabela relacionada
         * 4 Representa o nome da fk da tabela mepeada pelo model utilizado no relacionamento que estamos implementando
         */
    }
}
