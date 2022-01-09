@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="wrapper create-pizza">
      <h1>ORDER A PIZZA.</h1>
      <form action="/pizzas" method="post">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name">
        <label for="type">Chose type:</label>
        <select name="type" id="type">
          <option value="Kenyan">Kenyan</option>
          <option value="Rwandan">Rwandan</option>
          <option value="Ugandan">Ugandan</option>
          <option value="Kenyan Special">Kenyan Special</option>
          <option value="Pizza ya mtaa">Pizza ya mtaa</option>
          <option value="Italian">Italian</option>
        </select>
          <label for="base">Chose base:</label>
          <select name="base" id="base">
            <option value="Mushroom">Mushroom</option>
            <option value="Plain">Plain</option>
            <option value="Beef">Beef</option>
            <option value="Mutton">Mutton</option>
            <option value="cheese">Cheese</option>
            <option value="crusty">Dry crust</option>
        </select>
        <fieldset>
          <label>Extra toppings:</label>
          <input type="checkbox" name="toppings[]" value="tomato">Tomatoes<br>
          <input type="checkbox" name="toppings[]" value="crumbs">Bread Crumbs<br>
          <input type="checkbox" name="toppings[]" value="smokies">Smokies zenye zimekatwakatwa<br>
          <input type="checkbox" name="toppings[]" value="fillet">Fillet<br>
          <input type="checkbox" name="toppings[]" value="bacon">Bacon<br>
          <input type="checkbox" name="toppings[]" value="pork">Pork fulani<br>
          <input type="checkbox" name="toppings[]" value="pilipili">Pilipili<br>
        </fieldset>
        <input type="submit" value="Order Pizza">
      </form>
    </div>
</div>

@endsection
