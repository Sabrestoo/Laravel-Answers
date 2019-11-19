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
        {{-- <h2>Recent</h2>
        @foreach ($questions as $question)
        <div class="card card-body bg-light mt-5">
        <h3 class="text-dark">{{ $question->title }}</h3>
        <p class="text-dark">
            {{ $question->description }}
        </p>
        <div class="button">
    <a href="{{ route('questions.show', $question->id) }}" class="btn btn-sm btn-primary" >View Details</a>
        </div>

</div>
    @endforeach --}}
    </div>
@endsection
