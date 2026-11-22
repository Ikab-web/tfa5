@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="eyebrow">Point of sale · Built with Laravel</div>
    <h1 class="heading">A clearer view of your store.</h1>
    <p class="lede">A simple starting point for managing customer relationships and the people behind the counter. Explore the sample accounts below.</p>
    <div class="actions">
        <a class="button" href="{{ route('customers.index') }}">Browse customers →</a>
        <a class="button secondary" href="{{ route('users.index') }}">Meet the team</a>
    </div>
</section>
<div class="section-head"><div><h2>Your POS workspace</h2><p>Quick links to the core account pages.</p></div></div>
<section class="cards">
    <a class="card" href="{{ route('customers.index') }}" style="text-decoration:none"><div class="card-label">CUSTOMER ACCOUNTS</div><div class="card-value">People who shop with you ↗</div></a>
    <a class="card" href="{{ route('users.index') }}" style="text-decoration:none"><div class="card-label">USER ACCOUNTS</div><div class="card-value">Your store team ↗</div></a>
    <a class="card" href="{{ route('about') }}" style="text-decoration:none"><div class="card-label">ABOUT THIS PROJECT</div><div class="card-value">How this demo is built ↗</div></a>
</section>
@endsection
