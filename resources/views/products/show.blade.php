@extends('layouts.master')
@section('content')
    @livewire('products.show', ['product' => $product, 'isStock' => $isStock])           
@endsection 