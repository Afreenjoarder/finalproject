



    <form>
       <label>Voter Entry</label>


    <div class="form-group">
        {!! Form::label('voterName', 'voterName:') !!}
        {!! Form::text('voterName') !!}
    </div>
    <div class="form-group">
        {!! Form::label('voter_id', 'voter_id:') !!}
        {!! Form::text('voter_id') !!}
    </div>

        <div class="form-group">

            {!! Form::button('Save') !!}
        </div>

    </form>
