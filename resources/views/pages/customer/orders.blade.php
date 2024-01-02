@extends('layouts.customer-layout')

@section('customer-content')
<div class="container mx-auto mt-2">
    {{-- <h1>Customer Orders</h1>
    <h2>Orders:</h2>
    <ul>
        @foreach ($orders as $order)
            <li>Order ID: {{ $order->id }}, Order Date: {{ $order->created_at }}</li>
            <li>Order ID: {{ $order->total_price }}, Order Date: {{ $order->created_at }}</li>
        @endforeach
    </ul> --}}
<x-title>My Orders</x-title>
@foreach ($orders as $order)
<div class="p-5 mb-4 border border-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
    <time class="text-lg font-semibold text-gray-900 dark:text-white">{{ $order->created_at }}</time>
    <div class="category mt-3">
        <span class="bg-gray-200 text-gray-800 text-base font-semibold mr-2 px-3 py-1 rounded dark:bg-purple-200 dark:text-purple-800 ml-3">{{ $order->status}}</span>
      </div>

      @foreach ($order->orderDetails as $orderDetail)
<div class="relative border border-green-400 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-12 h-12 mb-3 me-3 rounded-full sm:mb-0" src="/docs/images/people/profile-picture-1.jpg" alt="Jese Leos image"/>
                </th>
                <td class="px-6 py-4">
                    {{ $orderDetail->product_name }}
                </td>
                <td class="px-6 py-4">
                    {{ $orderDetail->price }}
                </td>
                <td class="px-6 py-4">
                    
                </td>
                <td class="px-6 py-4">
                    {{ $orderDetail->quantity }}
                </td>
            </tr>
        </tbody>
    </table>

</div>
@endforeach
<div class="category mt-3 flex justify-end">
    <span class="bg-gray-200 text-gray-800 text-base font-semibold mr-0 px-3 py-1 rounded dark:bg-purple-200 dark:text-purple-800 ml-3">Total BD {{$order->total_price}}</span>
</div>
</div>
@endforeach







</section>
@endsection