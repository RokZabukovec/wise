@extends('layouts.app')

@section('content')

    <div class="hero">
        <h1> {{env('APP_NAME')}} </h1>
        <p>Take your finance in your own hands.</p>
    </div>
    <section class="wise-description flex flex-column" style="justify-content: center; align-items: center; padding">
        <div class="wise-text" style="width: 50%;">
            <div class="wise-property">
                <i class="material-icons">
                    done
                </i>
                <h3>Easy</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, distinctio dolore ea eligendi in
                    nihil nulla odit quas saepe sequi? Animi, aspernatur assumenda eligendi illum iure laborum mollitia
                    officiis quis!</p>
            </div>
            <div class="wise-property">
                <i class="material-icons">
                    money_off
                </i>
                <h3>Free</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, distinctio dolore ea eligendi in
                    nihil nulla odit quas saepe sequi? Animi, aspernatur assumenda eligendi illum iure laborum mollitia
                    officiis quis!</p>
            </div>
            <div class="wise-property">
                <i class="material-icons">
                    vpn_lock
                </i>
                <h3>Secure</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, distinctio dolore ea eligendi in
                    nihil nulla odit quas saepe sequi? Animi, aspernatur assumenda eligendi illum iure laborum mollitia
                    officiis quis!</p>
            </div>
        </div>
    </section>
@endsection
