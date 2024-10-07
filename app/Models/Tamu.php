<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
              /**
    * The database table used by the model.
    *
    * @var string
    */
   protected $table = 'ucapan';

   /**
    * The database primary key value.
    *
    * @var string
    */
   protected $primaryKey = 'ucapan_id';

   /**
    * Attributes that should be mass-assignable.
    * @var array
    */
   protected $fillable = ['ucapan_nama',
   'ucapan_organisasi',
   'ucapan_keluarga',
   'ucapan_nohp',
   'ucapan_uniquecode',
   'ucapan_qr',
   'created_at',
   'updated_at'];
}
