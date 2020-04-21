<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InventoryController extends Controller
{
    public function getAllInventories()
    {

        $inventorys = Inventory::all();

        return response()->json(['inventories' => $inventorys], 200);
    }

    public function getInventory($inventoryID)
    {
        $inventory = Inventory::find($inventoryID);

        if (!$inventory) return response()->json(['error' => 'Inventory not Found'], 404);

        return response()->json(['inventory' => $inventory]);
    }

    public function postInventory(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:inventorys',
            'quantity' => 'required',
            'request_on' => 'required',
            'requested_by' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 300);
        }

        $inventory = new Inventory();

        $inventory->name = $request->input('name');
        $inventory->quantity = $request->input('quantity');
        $inventory->request_on = $request->input('request_on');
        $inventory->requested_by = $request->input('requested_by');

        $inventory->save();

        return response()->json(['inventory' => $inventory], 201);
    }

    public function putInventory(Request $request, $inventoryID)
    {
        $inventory = Inventory::find($inventoryID);

        if (!$inventory) return response()->json(['error' => 'Inventory Not Found', 404]);

        $inventory->update([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'request_on' => $request->input('request_on'),
            'requested_by' => $request->input('requested_by')
        ]);

        return response()->json(['inventory' => $inventory], 201);
    }

    public function deleteInventory($inventoryID)
    {
        $inventory = Inventory::find($inventoryID);

        if (!$inventory) return response()->json(['error' => 'Inventory Not Found', 404]);
        $inventory->delete();
        return response()->json(['inventory' => 'Inventory deleted successfully'], 201);
    }
}
