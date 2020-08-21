<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Generator;

class OrderController extends Controller
{
    public function index()
    {
        return response(Order::all()->jsonSerialize(), Response::HTTP_OK);
    }

    public function all()
    {
        return Order::all();
    }

    // Show data by id //GET
    public function show($id)
    {
        return Order::find($id);
    }

    // Add data //POST
    public function store(Request $request)
    {
        $order = Order::create($request->all());
        $returnData = $order->find($order->id)->toArray(); // retrun all data of current row
        return response()->json( $returnData, Response::HTTP_CREATED);
    }

    // Update data //PUT
    public function update($id, Request $request)
    {
        $order = Order::find($id);
        $order->update($request->all());
        return response()->json($order, Response::HTTP_OK);
    }

    // delete data //DEL
    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();
        return response()->json(null, Response::HTTP_OK);
    }

}
