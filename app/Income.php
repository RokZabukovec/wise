<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $primaryKey = 'income_id';


    public function addIncomeToBalance($id, $income){
        $total = Account::find($id);
        $balance = $total->balance;
        $balanceAfter = $balance + $income;
        Account::find($id)->update(['balance' => $balanceAfter]);
    }
}
