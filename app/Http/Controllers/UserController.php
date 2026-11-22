<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            ['name' => 'Avery Morgan', 'username' => 'amorgan', 'role' => 'Administrator'],
            ['name' => 'Jordan Lee', 'username' => 'jlee', 'role' => 'Manager'],
            ['name' => 'Casey Patel', 'username' => 'cpatel', 'role' => 'Cashier'],
            ['name' => 'Riley Chen', 'username' => 'rchen', 'role' => 'Cashier'],
            ['name' => 'Taylor Brooks', 'username' => 'tbrooks', 'role' => 'Inventory Clerk'],
        ];

        return view('users.index', compact('users'));
    }
}
