@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>CREATE NEW ACCOUNT</h1>
        <div class="new-account-form">
            <form action="{{route('create')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="type">Account type</label>
                    <select class="form-control" id=type" name="type">
                        <option>Normal</option>
                        <option>Savings</option>
                    </select>
                    <small class="form-text text-muted">You can choose between normal and savings account.</small>
                </div>
                <div class="form-group">
                    <label for="balance">Balance</label>
                    <input type="number" class="form-control" name="balance" id="balance" placeholder="Enter starting balance.">
                    <small class="form-text text-muted">Enter balance with which you want to open account.</small>
                </div>
                <div class="form-group">
                    <input class="btn btn-outline-primary" type="submit" value="Create">
                </div>
            </form>
        </div>


        @if(count($user->accounts) > 0 )
            <ul>
                @foreach($accounts as $acc)
                    <a href="/home/accounts/{{$acc->account_id}}"> <li>{{$acc->type}} <span>{{$acc->balance}} €</span></li></a>
                @endforeach
            </ul>
        @else
            <p>No accounts registered</p>
        @endif
    </div>


@endsection