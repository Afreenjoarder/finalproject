
@extends('app')

@section('content')

<h2>voter entry</h2>

{!! Form::model(new App\Voter, ['route' => ['voters.store']]) !!}
@include('voters/partials/_form', ['submit_text' => 'Create Catagory'])
{!! Form::close() !!}
@endsection