@extends('app')

@section('content')
    <h2>
        {!! link_to_route('tasksCatagories.index', $tasksCatagory->cTitle, [$tasksCatagory->id]) !!}

    </h2>


@endsection