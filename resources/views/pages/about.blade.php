@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="eyebrow">About the project</div>
<h1 class="heading">Small pages, solid foundations.</h1>
<p class="lede">This Point of Sale sample demonstrates the building blocks of a Laravel web application: routes, controllers, Blade views, and temporary static data.</p>
<div class="about-grid">
    <section class="panel"><h2>How the pages work</h2><p>Each URL maps to a controller action. The controller prepares the response, and Blade renders the page. Customer and user examples are supplied by PHP arrays in their controllers and displayed in account tables.</p></section>
    <section class="panel"><h2>Pages in this demo</h2><ul class="steps"><li>Landing page at /</li><li>Project overview at /about</li><li>Customer Accounts at /customers</li><li>User Accounts at /users</li></ul></section>
</div>
@endsection
