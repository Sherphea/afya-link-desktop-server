<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InventoryController extends Controller
{
    public function getAllInventories()
    {

        $inventories = Inventory::all();

        return response()->json(['inventories' => $inventories], 200);
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
            'name' => 'required',
            'type' => 'required',
            'quantity' => 'required',
            'location' => 'required',
            'x_ref' => 'required',
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
        $inventory->type = $request->input('type');
        $inventory->quantity = $request->input('quantity');
        $inventory->location = $request->input('location');
        $inventory->x_ref = $request->input('x_ref');
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
            'type' => $request->input('type'),
            'quantity' => $request->input('quantity'),
            'location' => $request->input('location'),
            'x_ref' => $request->input('x_ref'),
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
