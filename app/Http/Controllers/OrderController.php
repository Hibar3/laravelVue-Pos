<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Generator;

class OrderController extends Controller
{
    // public function index()
    // {
    //     return response(Order::all()->jsonSerialize(), Response::HTTP_OK);
    // }

    public function all()
    {
        return Order::all();
    }

    // mengambil data by id
    public function show($id)
    {
        return Order::find($id);
    }

    // menambah data
    public function store(Request $request)
    {
        return Order::create($request->all());
    }

    // mengubah data
    public function update($id, Request $request)
    {
        $order = Order::find($id);
        $order->update($request->all());
        return $order;
    }

    // menghapus data
    public function delete($id)
    {
        $person = Order::find($id);
        $person->delete();
        return 204;
    }

}
