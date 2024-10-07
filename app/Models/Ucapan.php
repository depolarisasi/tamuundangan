<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucapan extends Model
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
   protected $fillable = ['ucapan_tamu',
   'ucapan_isiucapan',
   'ucapan_date',
   'created_at',
   'updated_at'];
}
