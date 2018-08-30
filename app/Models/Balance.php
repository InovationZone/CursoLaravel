<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    //serve para não gravar hora e data na hora do insert
    //as colunas ja foram excluidas da migration
    public $timestamps = false;
}
