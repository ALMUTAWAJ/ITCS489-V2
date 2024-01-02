<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
    public function index()
{
    $user = Auth::user();

    $orders = $user->orders;
    return view('pages.customer.orders', ['orders' => $orders]);


}
}
