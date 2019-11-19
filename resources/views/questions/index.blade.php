@extends('template')

@section('content')
    <div class="container">
        <h1>Recent Questions:</h1>
        <hr>


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
        @endforeach

        {{ $questions->links() }}
    </div>
    @endsection
