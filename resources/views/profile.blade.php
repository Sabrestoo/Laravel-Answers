@extends('template')

@section('content')

<div class="container">
<h1>{{ $user->name }}'s Profile</h1>

<p>
    See {{ $user->name }}'s recent Q&A's.
</p>
<hr>
<div class="row">
    <div class="col-md-6">
        <h3>Questions</h3>
        @foreach ($user->questions as $question)
        <div class="card mb-3">
            <div class="card-body">
            <h4 class="text-dark">{{$question->title}}</h4>
            <p class="text-dark">
                {{$question->description}}
            </p>
            </div>
            <div class="card-footer">
            <a href="{{ route('questions.show', $question->id) }}" class="btn btn-link">View Question</a>
            </div>
        </div>

        @endforeach
    </div>
    <div class="col-md-6">
        <h3>Answers</h3>
        @foreach ($user->answers as $answer)
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="text-dark">Question: {{ $answer->question->title }} </h4>
                <p class="text-dark">
                    {{ $answer->content }}
                </p>
            </div>
        <div class="card-footer"><a href="{{ route('questions.show', $answer->question->id )}}" class="btn btn-link">View All Answers to Question</a></div>
        </div>
        @endforeach
    </div>



</div>
</div>
@endsection
