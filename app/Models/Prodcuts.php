<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodcuts extends Model
{
    use HasFactory;
    protected $rtable = [
                         'pname',
                         'picktime',
                         'pickzip',
                         'pickplace',
                         'quantity',
                         'description',
                         'filename',
                         'userid'
                    ];
    public function p_users(){
                                return $this->hasMany('App\Models\User','name','email');
                              }                   
                    
}
