@extends('app')

@section('content')
    <h2>TasksCatagories</h2>



    <ul>
        @foreach( $tasksCatagories as $tasksCatagory )
            <li>
                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('tasksCatagories.destroy', $tasksCatagory->id))) !!}
                <a href="{{ route('tasksCatagories.show', $tasksCatagory->id) }}">{{ $tasksCatagory->cTitle }}</a>
                (
                {!! link_to_route('tasksCatagories.edit', 'Edit', array($tasksCatagory->id), array('class' => 'btn btn-info')) !!},
                {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                )
                {!! Form::close() !!}
            </li>
        @endforeach
    </ul>
    @endif

    <p>
        {!! link_to_route('tasksCatagories.create', 'Create catagories') !!}
    </p>
@endsection



