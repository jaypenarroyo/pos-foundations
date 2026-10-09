<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username'  => 'admin',
                'full_name' => 'Andrea Lim',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Paolo Cruz',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Ella Ramos',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Miguel Torres',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'inventory01',
                'full_name' => 'Sofia Navarro',
                'role'      => 'Inventory Staff',
            ],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
