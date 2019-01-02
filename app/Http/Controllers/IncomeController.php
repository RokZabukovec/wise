<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use App\Account;
class IncomeController extends Controller
{

    public function addIncomeToBalance($id, $income){
        $total = Account::find($id);
        $balance = $total->balance;
        $balanceAfter = $balance + $income;
        Account::find($id)->update(['balance' => $balanceAfter]);
    }


    public function addIncome($account_id, Request $request)
    {
        $income = new Income();
        $income->from = $request->from;
        $income->amount = $request->amount;
        $income->account_id = $account_id;
        $income->save();
        $this->addIncomeToBalance($account_id, $income->amount);
        return redirect()->route('account', ['account_id' => $account_id]);
    }
}
