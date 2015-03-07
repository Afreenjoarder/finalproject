

    <h2>Edit voter list</h2>

    {!! Form::model($voter, ['method' => 'PATCH', 'route' => ['voters.update', $voter->voter_id]]) !!}
    @include('voters/partials/_form', ['submit_text' => 'add new voter'])
    {!! Form::close() !!}
    <p>
        {!! link_to_route('voters.index', 'Back to voters') !!} |

    </p>




