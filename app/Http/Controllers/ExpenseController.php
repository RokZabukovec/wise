<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
class ExpenseController extends Controller
{

public function exspenseToJson(){
    return Expense::all();
}
    public function addExpense($account_id, Request $request){
        $expense = new Expense;
        $expense->for = $request->for;
        $expense->amount = $request->amount;
        $expense->account_id = $account_id;
        $expense->save();
        $expense->addExpenseToBalance($account_id, $expense->amount);
        return redirect()->route('account', ['account_id' => $account_id]);
    }
}
