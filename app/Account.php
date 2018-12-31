<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $primaryKey = 'account_id';
    protected $fillable = [
        'account_id','user_id','type','balance',
    ];

    public function expenses(){
        return $this->hasMany('App\Expense', 'account_id');
    }
    public function incomes(){
        return $this->hasMany('App\Income','account_id');
    }
}
