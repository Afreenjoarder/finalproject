@extends('app')

@section('content')
    <h2>Edit catagories</h2>

    {!! Form::model($tasksCatagory, ['method' => 'PATCH', 'route' => ['tasksCatagories.update', $tasksCatagory->id]]) !!}
    @include('tasksCatagories/partials/_form', ['submit_text' => 'Edit Catagories'])
    {!! Form::close() !!}
@endsection