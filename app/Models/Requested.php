<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    //hasmany
    //protected $tabl = 'requests';
    protected $rtable = [
                        'rid',
                        'pid',
                        'amount',
                        'uid',
                        'status'
                       ];
    public function r_products(){
                                return $this->hasMany('App\Models\Prodcuts','pname','picktime','pickzip');
                              }                   
                       
}
