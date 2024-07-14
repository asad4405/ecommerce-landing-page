<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    function add_inventory($product_id)
    {
        $product = Product::find($product_id);
        return view('admin.product.inventory', [
            'product' => $product,
        ]);
    }

    function inventory_store(Request $request, $product_id)
    {
        $request->validate([
            '*' => 'required',
        ]);

        if (Inventory::where('product_id', $product_id)->exists()) {
            Inventory::where('product_id', $product_id)->increment('quantity', $request->quantity);
            return back()->with('inventory_success', 'Inventory Updated!');
        } else {
            Inventory::insert([
                'product_id' => $product_id,
                'quantity' => $request->quantity,
                'created_at' => Carbon::now(),
            ]);
            return back()->with('inventory_success', 'Inventory Added!');
        }
    }

    function inventory_list ()
    {
        $inventories = Inventory::all();
        return view('admin.product.inventory_list',[
            'inventories' => $inventories,
        ]);
    }

    function inventory_delete($inventory_id)
    {
        Inventory::find($inventory_id)->delete();
        return back()->with('inventory_delete','Inventory Deleted!');
    }
}
