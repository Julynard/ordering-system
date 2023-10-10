@extends('layouts.app')

@section('content')
<div class="container">
    <product-form :product="{}"></product-form>

    <product-list :products="{{ $products }}"></product-list>

</div>
@endsection
