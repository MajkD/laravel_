<div class='row'>
  <div class='col-sm-4'>
    {!! Form::open(['route' => 'skills.store']) !!}

    <div class="form-group">
        {!! Form::text('id', $skill->id, ['hidden' => true]) !!}
        {!! Form::label('name', 'Your Name') !!}
        {!! Form::text('name', $skill->name, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
  </div>
</div>