@extends('customers.layouts.master')
@section('content')
    <div id="content">
        <div class="content-page">
            <div class="container">
                <h2 class="title-shop-page">Item Category</h2>
                <div class="list-super-deal">
                    <h3>Name : {{ $user->name }} </h3>
                    <h3>Email : {{ $user->email }}</h3> 
                </div>
                <hr>
                <div class="list-super-deal">
                    <h2>Order Lists</h3>
                </div>
                <ul>
                   @foreach (range(1,10) as $element)
                       <li> Order {{ $element }} #</li>
                   @endforeach
                </ul>
                <!-- End Super Deal -->
            </div>
        </div>
        <!-- End Main Content Home -->
    </div>
@endsection