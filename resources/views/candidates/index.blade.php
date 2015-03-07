



<form>
    <label>Candidate Entry</label>


    <div class="form-group">
        {!! Form::label('candidateName', 'candidateName:') !!}
        {!! Form::text('candidateName') !!}
    </div>
    <div class="form-group">
        {!! Form::label('symbol', 'symbol:') !!}
        {!! Form::text('symbol') !!}
    </div>

    <div class="form-group">

        {!! Form::button('Save') !!}
    </div>

</form>
