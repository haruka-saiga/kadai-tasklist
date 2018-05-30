@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

{!! Form::label('title', '状況:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
    
@endsection