<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class accountController extends Controller
{


    /*
    --------------------------------------------------------------------------
     getAll()
    --------------------------------------------------------------------------
     Gets all accounts of the user.
    The accounts are queryed with "where" method on the account model.
    */

    public function getAll()
    {
        $accounts = Account::where('user_id', Auth::id())->get();
        return view('accounts.accounts')->with(['user' => Auth::user(), 'accounts' => $accounts]);
    }


    /*
    --------------------------------------------------------------------------
     getAccount()
    --------------------------------------------------------------------------
     Account id is passed with url to a method which is then use to query DB

    */
    public function getAccount($id)
    {
        $details = DB::table('accounts')->where('account_id', $id)->where('user_id', Auth::id())->first();
        $account = Account::find($id);
        $expenses = $account->expenses;
        $total = 0;
        foreach ($expenses as $expense) {
            $total += $expense->amount;
        }
        return view('accounts.details')->with(['user' => Auth::user(), 'details' => $details, 'total' => $total]);
    }

    /*
    --------------------------------------------------------------------------
     create()
    --------------------------------------------------------------------------
     create() function creates new account from request info which is passed in
     a Request object and contains data from a "create new account" form.
    */

    public function create(Request $request)
    {
        $new = new Account;
        $new->user_id = Auth::id();
        $new->type = $request->type;
        $new->balance = $request->balance;
        $new->save();
        return redirect('/home/accounts');
    }


}
