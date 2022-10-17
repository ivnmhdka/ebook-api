<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return [
            'NIS' => 3103120114,
            'Name' => 'Ivan Mahadika Yanuarizqi',
            'Phone' => '081238683080',
            'Class' => 'XII RPL 4'
        ];
    }
}
