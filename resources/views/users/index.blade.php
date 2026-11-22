@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<div class="eyebrow">Team directory</div>
<h1 class="heading">User Accounts</h1>
<p class="lede">The people who keep the store running, with a sample role for each account.</p>
<div class="table-wrap"><table>
    <thead><tr><th>Name</th><th>Username</th><th>Role</th><th>Status</th></tr></thead>
    <tbody>
    @foreach ($users as $user)
        <tr><td class="person">{{ $user['name'] }}</td><td>{{ $user['username'] }}</td><td>{{ $user['role'] }}</td><td><span class="badge">Active</span></td></tr>
    @endforeach
    </tbody>
</table></div>
<p class="note">Sample data for this exercise · {{ count($users) }} user accounts</p>
@endsection
