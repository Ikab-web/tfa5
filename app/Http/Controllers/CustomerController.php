<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = [
            ['name' => 'Maya Santos', 'email' => 'maya.santos@example.com', 'phone' => '(02) 8123-4501'],
            ['name' => 'Liam Reyes', 'email' => 'liam.reyes@example.com', 'phone' => '(02) 8123-4502'],
            ['name' => 'Sofia Cruz', 'email' => 'sofia.cruz@example.com', 'phone' => '(02) 8123-4503'],
            ['name' => 'Noah Garcia', 'email' => 'noah.garcia@example.com', 'phone' => '(02) 8123-4504'],
            ['name' => 'Isabella Flores', 'email' => 'isabella.flores@example.com', 'phone' => '(02) 8123-4505'],
        ];

        return view('customers.index', compact('customers'));
    }
}
