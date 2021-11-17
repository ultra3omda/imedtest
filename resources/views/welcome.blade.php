@extends('base')

@section('title')
{{ env('APP_NAME')}}
@endsection

@section('content')

       <h1>Hello From Tunisia</h1>


       <p>it's currently {{ date('h:i A') }} .</p>


    @endsection
