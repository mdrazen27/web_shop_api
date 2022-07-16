<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Instrument;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\Http\Exceptions\NotFound;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        if(Auth::user()->admin){
            $orders = Order::with('hasManyBaskets')->whereHas('hasManyBaskets')->get();
        }
        else{
            $orders = Order::with('hasManyBaskets')->whereHas('hasManyBaskets')->where('users_id','=',Auth::id())->get();
        }
//        dd($orders);
        return response()->json([
            'success' => true,
            'message' => 'Orders received',
            'data' => $orders,
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request): JsonResponse
    {
        $order = new Order();
        $order->users_id = Auth::id();
        $items = collect($request->items)->map(function ($quantity,$item){
            $basketItem = new Basket();
            try{
            $instrument = Instrument::findOrFail($item);
            $basketItem->instruments_id = $instrument->id;
            $basketItem->total_price = $quantity * $instrument->price;
            $basketItem->quantity = $quantity;
//            dd($instrument->id);
            if($quantity > $instrument->quantity){
                throw new \Exception('Instrument quantity is not valid');
            }
            }
            catch(\Exception){
                echo json_encode([
                   'message' => 'Instrument quantity is invalid',
                    'status' => 200,
                    'success' => false
                ]);
//                throw new \Error('Instrument id is not valid');
            }
            return [$basketItem,$instrument];
        });
        $price_summed = $items->reduce(function ($carry,$item){
           return $carry + $item[0]->total_price;
        },0);

        if($price_summed > Auth::user()->funds){
            return response()->json([
                'success' => false,
                'message' => 'Insufficient FUNds',
                'data' => "Funds needed $price_summed"
            ],402);
        }
        $order->save();
        foreach ($items as $item){
            $item[0]->orders_id = $order->id;
            $item[0]->save();
            $item[1]->quantity -= $item[0]->quantity;
            $item[1]->save();
        }
        Auth::user()->funds -= $price_summed;
        Auth::user()->save();

        return response()->json([
            'success' => true,
            'message' => 'Let it rock!',
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

}
