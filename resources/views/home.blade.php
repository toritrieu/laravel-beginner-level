@extends('layouts.main')

@section('title', 'Beginner Level')

@section('content')
    @php
        $content = "Action";
        $bsclass = "btn btn-success";
    @endphp
    <div>
        <h4>Component example</h4>
        <x-button type="button" :content="$content" :bsclass="$bsclass" />
    </div>
@endsection
