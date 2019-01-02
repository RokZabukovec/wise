@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-header">Dashboard</div>
                        <div class="card-body flex">
                            <div class="avatar-wrapper">
                                <img class="avatar-img" src="{{$user->avatar}}" alt="avatar">
                                <p class="avatar-img--change">Change avatar</p>
                            </div>

                            <div class="user-info">
                                <p>{{ $user->name }}</p>
                                <p>{{ $user->birthday }}</p>
                                <p>{{ $user->email }}</p>
                            </div>
                            <div class="user-accounts">
                                <div class="flex flex-title">
                                    <h2>Accounts</h2>
                                    <a href="{{ route('allAccounts') }}"><i class="material-icons large">
                                            add_circle_outline
                                        </i></a>
                                </div>
                                @if(count($user->accounts) > 0 )
                                    <ul>
                                        @foreach($user->accounts as $acc)
                                            <a href="/home/accounts/{{$acc->account_id}}">
                                                <li>{{$acc->type}} <span>{{$acc->balance}} €</span></li>
                                            </a>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No accounts registered</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="avatar-modal">
            <h3>Change avatar</h3>
            <form action="{{ route('avatarUpdate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" name="avatar" accept="image/*">
                    <input class="btn btn-block btn-success margin-top-25" type="submit" value="Change avatar">
                </div>
            </form>
            <p class="close">x</p>
        </div>
    </div>

@endsection
