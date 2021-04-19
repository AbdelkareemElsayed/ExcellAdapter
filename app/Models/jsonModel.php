<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jsonModel extends Model
{
    use HasFactory;

 protected $table = "json_models";

 protected $fillable = [
   'FirstName',
   'LastName',
   'gender',
   'age',
   'streetAddress',
   'city',
   'state',
   'type',
   'number',
 ];


}
