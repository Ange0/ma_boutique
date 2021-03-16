@extends('layouts.master')

@section('content')
 <div class="container">
        @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        @endif
   </div>
    <div class="main-content-wrapper">
        Felicitation
    </div>
@endsection


