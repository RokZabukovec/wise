@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Details</h1>
        <h3>Total expenses: {{$total}}€</h3>
        <h1>Current balance: {{ $details->balance }}€</h1>
        <p>Account type: {{ $details->type }}</p>

        <div class="add-expense">
            <h3>Expenses</h3>
            <form action="/home/accounts/expense/add/{{ $details->account_id }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="for">For: </label>
                    <input class="form-control" id="for" type="text" name="for" required>
                </div>
                <div class="form-group">
                    <label for="amount">Amount: </label>
                    <input id="expense-amount" class="form-control" type="number" name="amount" value="0">
                </div>
                <div class="form-group">
                    <input class="btn btn-outline-danger" type="submit" value="Expense">
                </div>
            </form>
        </div>
        <br>
        <br>
        <div class="add-income">
            <h3>Incomes</h3>
            <form action="/home/accounts/income/add/{{ $details->account_id }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="from">From: </label>
                    <input class="form-control" id="from" type="text" name="from" required>
                </div>
                <div class="form-group">
                    <label for="amount">Amount: </label>
                    <input id="income-amount" class="form-control" type="number" name="amount">
                </div>
                <div class="form-group">
                    <input class="btn btn-outline-success" type="submit" value="Income">
                </div>
            </form>
        </div>
    </div>
@endsection