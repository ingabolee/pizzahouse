@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
  <h1>{{$pizza -> name}}'s Order:</h1>
  <p class="type">Type - {{$pizza -> type}}</p>
  <p class="base">Base - {{$pizza -> base}}</p>
  <p class="toppings">Extra toppings</p>
  <ul>
    @foreach ($pizza->toppings as $topping)
      <li>{{$topping}}</li>
    @endforeach
  </ul>
  <form action="/pizzas/{{$pizza->id}}" method="post">
    @csrf
    @method('DELETE')
    <button>Confirm Order</button>

  </form>
</div>
<a href="/pizzas" class="back"> Back </a>
@endsection
