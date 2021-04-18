<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class sheettwo extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $table = "sheettwo";
    protected $fillable = [
            'product_num'         ,
            'choice'              ,
            'price'               ,
            'feature'             ,
            'display'             ,
    
    ];

   
}
