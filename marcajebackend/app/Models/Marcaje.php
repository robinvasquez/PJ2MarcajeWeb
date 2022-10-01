<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcaje extends Model
{
    use HasFactory;
    protected $table = 'tt_marcaje_detail';
    protected $primarykey = 'id';

<<<<<<< HEAD
    
    protected $fillable = [
        'usuario_id','tipo_marcaje_id','fecha','hora'
    ];

=======

    protected $fillable = [
        'usuario_id','tipo_marcaje_id','fecha','hora'
    ];
>>>>>>> 9a0d6049aad7570f68d1138cf70eae62f453951f
}
