@extends('app')

@section('content')
    <h2>Create Catagories</h2>

    {!! Form::model(new App\TaskC, ['route' => ['tasksCatagories.store']]) !!}
    @include('tasksCatagories/partials/_form', ['submit_text' => 'Create catagories'])
    {!! Form::close() !!}
@endsection