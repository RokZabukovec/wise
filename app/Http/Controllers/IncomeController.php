<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
class IncomeController extends Controller
{

    public function addIncome($account_id, Request $request)
    {
        $income = new Income();
        $income->from = $request->from;
        $income->amount = $request->amount;
        $income->account_id = $account_id;
        $income->save();
        $income->addIncomeToBalance($account_id, $income->amount);
        return redirect()->route('account', ['account_id' => $account_id]);
    }
}
