@extends('template')

@section('content')
    <div class="container">
        <div class="jumbotron mt-5">
            <h1 class="text-dark">Ask a question!</h1>
            <p class="text-dark">
                Ask any question you want to know about and we will get answers for you!
            </p>
            <p>
                <a href="{{ route('questions.create') }}" class="btn btn-primary btn-lg" role="button">Ask Now</a>
            </p>

        </div>
        <h2>Recent</h2>
    </div>
@endsection
