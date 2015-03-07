


@extends('app')

@section('content')
    <h2>Voter List</h2>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif


    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Voter Id</td>
            <td>voter Name</td>

            <td>Action</td>

        </tr>
        </thead>
        <tbody>
        @foreach($voters as $key => $value)
            <tr>
                <td>{{ $value->voter_id }}</td>
                <td>{{ $value->voterName }}</td>




                <!-- we will also add show, edit, and delete buttons -->
                <td>


                    <a class="btn btn-small btn-info" href="{{ URL::to('voters/' . $value->voter_id . '/edit') }}">Edit this voter</a><br>

                    {!! Form::open(array('method'=> 'DELETE', 'route' => array('voters.destroy', $value->voter_id))) !!}
                    {!! Form::submit('Delete', array('class'=> 'btn btn-danger')) !!}
                    {!! Form::close() !!}




                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p>
        {!! link_to_route('voters.create', 'Create voter') !!}
    </p>
@endsection



