<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\Account;
class ExpenseController extends Controller
{

    public function addExpenseToBalance($id, $expense){
        $total = Account::find($id);
        $balance = $total->balance;
        $balanceAfter = $balance - $expense;
        Account::find($id)->update(['balance' => $balanceAfter]);
    }
    public function addExpense($account_id, Request $request){
        $expense = new Expense;
        $expense->for = $request->for;
        $expense->amount = $request->amount;
        $expense->account_id = $account_id;
        $expense->save();
        $this->addExpenseToBalance($account_id, $expense->amount);
        return redirect()->route('account', ['account_id' => $account_id]);
    }
}
