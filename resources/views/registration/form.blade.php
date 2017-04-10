
 <div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
    {!! Form::label('name') !!}
    {!! Form::text('name', null, ['class' => 'form-control  c-square c-theme input-lg', 'placeholder' => 'Name']) !!}

    @if($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
    @endif
</div>
    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
    {!! Form::label('email') !!}
    {!! Form::text('email', null, ['class' => 'form-control c-square c-theme input-lg' , 'placeholder' => 'Email']) !!}

    @if($errors->has('email'))
        <span class="help-block">{{ $errors->first('email') }}</span>
    @endif
</div>
 <div class="form-group {{ $errors->has('answer1') ? 'has-error': '' }}">
    {!! Form::label('Ich werde zum Sommerfest am 18. Juni kommen:') !!}                       
    {!! Form::select('answer1', ['' => 'Choose Options'] + App\Answer::pluck('answer', 'answer')->all(), null, ['class' => 'form-control c-square c-theme input-lg']) !!}

    @if($errors->has('answer1'))
        <span class="help-block">{{ $errors->first('answer1') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('answer2') ? 'has-error': '' }}">
    {!! Form::label('Ich beteilige mich bei der Vorbereitung:') !!}                       
    {!! Form::select('answer2', ['' => 'Choose Options'] + App\Answer::pluck('answer', 'answer')->all(), null, ['class' => 'form-control c-square c-theme input-lg']) !!}

    @if($errors->has('answer2'))
        <span class="help-block">{{ $errors->first('answer2') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('answer3') ? 'has-error': '' }}">
    {!! Form::label('Ich helfe beim Fest:') !!}                       
    {!! Form::select('answer3', ['' => 'Choose Options'] + App\Answer::pluck('answer', 'answer')->all(), null, ['class' => 'form-control c-square c-theme input-lg']) !!}

    @if($errors->has('answer3'))
        <span class="help-block">{{ $errors->first('answer3') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('answer4') ? 'has-error': '' }}">
    {!! Form::label('Ich nehme am Golfturnier am 19. Juni teil:') !!}                       
    {!! Form::select('answer4', ['' => 'Choose Options'] + App\Answer::pluck('answer', 'answer')->all(), null, ['class' => 'form-control c-square c-theme input-lg']) !!}

    @if($errors->has('answer4'))
        <span class="help-block">{{ $errors->first('answer4') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('answer5') ? 'has-error': '' }}">
    {!! Form::label('Ich spende einen tollen Preis für den Wettbewerb:') !!}                       
    {!! Form::select('answer5', ['' => 'Choose Options'] + App\Answer::pluck('answer', 'answer')->all(), null, ['class' => 'form-control c-square c-theme input-lg']) !!}

    @if($errors->has('answer5'))
        <span class="help-block">{{ $errors->first('answer5') }}</span>
    @endif
</div>
    <div class="form-group message {{ $errors->has('message') ? 'has-error': '' }}">
    {!! Form::label('Weitere Anregungen und Hinweise') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control c-theme c-square input-lg']) !!}

    @if($errors->has('message'))
        <span class="help-block">{{ $errors->first('message') }}</span>
    @endif
</div>
   
{!! Form::submit('Abschicken', ['class' => 'btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square']) !!}




       
    