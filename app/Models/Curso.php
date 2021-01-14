<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

   /* protected $fillable = ['name', 'description', 'categoria'];  se especifica los campos en add masiva */

   protected $guarded = []; /* especifica los campos protegidos y ignoramos los campos permitidos*/

   public function getRouteKeyName(){   //url amigables
       return 'slug';
   }
      
 
}
