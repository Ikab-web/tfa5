@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
<div class="eyebrow">Account directory</div>
<h1 class="heading">Customer Accounts</h1>
<p class="lede">A quick look at the people who shop with your store.</p>
<div class="table-wrap"><table>
    <thead><tr><th>Name</th><th>Email address</th><th>Phone</th><th>Status</th></tr></thead>
    <tbody>
    @foreach ($customers as $customer)
        <tr><td class="person">{{ $customer['name'] }}</td><td>{{ $customer['email'] }}</td><td>{{ $customer['phone'] }}</td><td><span class="badge">Active</span></td></tr>
    @endforeach
    </tbody>
</table></div>
<p class="note">Sample data for this exercise · {{ count($customers) }} customer accounts</p>
@endsection
