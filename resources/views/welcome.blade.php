@extends('layouts.app')

@section('content')

        <div class="hero">
            <h1> {{env('APP_NAME')}} </h1>
            <p>Take your finance in your own hands.</p>
        </div>
    <section class="wise-description flex flex-column" style="justify-content: center; align-items: center; padding">
        <div class="wise-text" style="width: 50%;">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores consequuntur deserunt nihil,
                numquam ullam veniam? Adipisci architecto deleniti dicta dolore ea eaque earum ex iste maiores molestias
                mollitia nihil nobis officia perspiciatis provident quibusdam, saepe, totam ut? Aspernatur assumenda id in
                incidunt mollitia nam perspiciatis. Blanditiis dolor ipsum labore.</p>
            <button class="btn btn-warning">REGISTER</button>
        </div>
    </section>
@endsection
