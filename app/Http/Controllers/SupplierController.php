<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Controller
{
    public function index(){
        $suppliers=Supplier::orderBy('sid','ASC')->get();
        $data=['suppliers'=>$suppliers];
        return view('basic.supplier.index',$data);
    }
    public function create()
    {
        return view('basic.supplier.create');
    }
    public function edit($id)
    {
        $supplier=Supplier::find($id);
        $data=['supplier'=>$supplier];
        return view('basic.supplier.edit', $data);
    }
    public function recall()
    {
        return redirect()->route('supplier.index');
    }
    public function store(Request $request){
        Supplier::create($request->all());
        return redirect()->route('supplier.index');
    }
    public function update(Request $request,$id){
        $supplier=Supplier::find($id);
        $supplier->update($request->all());
        return redirect()->route('supplier.index');
    }
    public function destroy($id)
    {
        Supplier::destroy($id);
        return redirect()->route('supplier.index');
    }
    public function search()
    {
        $q = Input::get('query');
        $supplier = Supplier::find($q);
        return View::make('supplier.index', compact('supplier'));
    }
}
