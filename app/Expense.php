<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Expense extends Model
{
    protected $primaryKey = 'expense_id';

    public function addExpenseToBalance($id, $expense){
        $total = Account::find($id);
        $balance = $total->balance;
        $balanceAfter = $balance - $expense;
        Account::find($id)->update(['balance' => $balanceAfter]);
    }
}
