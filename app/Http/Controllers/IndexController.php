<?php
//Application development in popular integrated development environments. © 2023 by Myrsini Stasinou is licensed under CC BY-SA 4.0
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        return view('index');
    }
}
