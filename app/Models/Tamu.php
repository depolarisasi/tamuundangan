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
   protected $table = 'tamu';

   /**
    * The database primary key value.
    *
    * @var string
    */
   protected $primaryKey = 'tamu_id';

   /**
    * Attributes that should be mass-assignable.
    * @var array
    */
   protected $fillable = ['tamu_nama',
   'tamu_organisasi',
   'tamu_keluarga',
   'tamu_nohp',
   'tamu_uniquecode',
   'tamu_qr',
   'tamu_kehadiran',
   'created_at',
   'updated_at'];
}
