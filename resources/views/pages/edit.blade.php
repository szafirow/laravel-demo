@extends('layout')

@section('content')

    {!! Form::model($page, ['route' => ['pages.update', $page], 'method' => 'PUT']) !!}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('title',"Title:") !!}
        {!! Form::text('title',$page->title,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content',"Treść:") !!}
        {!! Form::textarea('content',$page->content,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Zapisz',['class'=> 'btn btn-primary']) !!}
        {!! link_to(URL::previous(),'Powrót',['class'=> 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}

@endsection