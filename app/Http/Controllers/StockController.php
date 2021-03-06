<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Inventory;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']="Stocks";
        $data['stocks']=Stock::with('Inventory')->paginate(20);
        $data['serial']=managePaginationSerial($data['stocks']);
        return view('admin.business_settings.stock.index',$data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'stock'=>'required|gt:1',
            'purchased_price'=>'gt:1',
        ]);
        $stock = new Stock();
        $inventory=Inventory::with('Stock')->findOrFail($request->inventory_id);
        $stock->stock= $request->stock;
        $stock->inventory_id=$request->inventory_id;
        if ($request->purchased_price==""){
            $stock->purchased_price=$inventory->Stock->purchased_price;
            $stock->total_purchased_price =$request->stock*$stock->purchased_price;
        }else{
            $stock->purchased_price=$request->purchased_price;
            $stock->total_purchased_price =$request->stock*$request->purchased_price;
        }
        $stock->save();
        $inventory=Inventory::findOrFail($request->inventory_id);
        $inventory->quantity=$inventory->quantity+=$request->stock;
        $inventory->update();
        session()->flash('message','Stock added successfully');
        return redirect()->route('inventory.index');
//        return view('admin.inventory.index',$data);

//        $request->validate([
//            'add_stock'=>'required' ,
//        ]);
//
//        $stock = new Stock();
//        $stock->stock= $request->stock;
//        $stock->inventory_id=$request->inventory_id;
//        $stock->save();
//
//        $inventory=Inventory::findOrFail($request->inventory_id);
//        $inventory->quantity=$inventory->quantity+=$request->stock;
//        $inventory->update();
//        session()->flash('message','Stock added successfully');
//        return redirect()-> route('inventory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['title'] = 'Add Stock';
        $data['inventory']=Inventory::where('id',$id)->first();
        return view('admin.business_settings.stock.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
