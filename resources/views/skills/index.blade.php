@extends('layouts.app')

@section('content')

  <h4>Show The Skills</h4>
  <table class='table table-striped'>
    <tbody>
      @foreach($skills as $skill)
        <tr>
          <td> {{ $skill->name }} </td>
          <td> {!! link_to_route('skills.show', 'Show', [$skill->id], ['type'=>'button', 'class'=>'btn btn-default btn-xs']) !!} </td>
          <td> {!! link_to_route('skills.edit', 'Edit', [$skill->id], ['type'=>'button', 'class'=>'btn btn-default btn-xs']) !!} </td>
          <td> 
            {!! Form::open(['method' => 'DELETE', 'route' => ['skills.destroy', $skill->id] ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-default btn-xs']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! link_to_route('skills.create', 'Create New Skill!', [], ['type'=>'button', 'class'=>'btn btn-primary btn-sm']) !!}

@endsection