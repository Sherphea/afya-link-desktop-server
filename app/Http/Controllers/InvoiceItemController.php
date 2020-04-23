<?php

namespace App\Http\Controllers;

use App\InvoiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvoiceItemController extends Controller
{
    public function getInvoiceItems()
    {

        $invoiceItems = InvoiceItem::all();

        return response()->json(['inventories' => $invoiceItems], 200);
    }

    public function getInvoiceItem($invoiceItemID)
    {
        $invoiceItem = InvoiceItem::find($invoiceItemID);

        if (!$invoiceItem) return response()->json(['error' => 'InvoiceItem not Found'], 404);

        return response()->json(['invoiceItem' => $invoiceItem]);
    }

    public function postInvoiceItem(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'purchase_cost' => 'required',
            'vendor_item_number' => 'required',
            'quantity' => 'required',
            'serial_lot_number' => 'required',
            'expiration_date' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 300);
        }

        $invoiceItem = new InvoiceItem();

        $invoiceItem->purchase_cost = $request->input('purchase_cost');
        $invoiceItem->vendor_item_number = $request->input('vendor_item_number');
        $invoiceItem->quantity = $request->input('quantity');
        $invoiceItem->serial_lot_number = $request->input('serial_lot_number');
        $invoiceItem->expiration_date = $request->input('expiration_date');

        $invoiceItem->save();

        return response()->json(['invoiceItem' => $invoiceItem], 201);
    }

    public function putInvoiceItem(Request $request, $invoiceItemID)
    {
        $invoiceItem = InvoiceItem::find($invoiceItemID);

        if (!$invoiceItem) return response()->json(['error' => 'InvoiceItem Not Found', 404]);

        $invoiceItem->update([
            'purchase_cost' => $request->input('purchase_cost'),
            'vendor_item_number' => $request->input('vendor_item_number'),
            'quantity' => $request->input('quantity'),
            'serial_lot_number' => $request->input('serial_lot_number'),
            'expiration_date' => $request->input('expiration_date'),
        ]);

        return response()->json(['invoiceItem' => $invoiceItem], 201);
    }

    public function deleteInvoiceItem($invoiceItemID)
    {
        $invoiceItem = InvoiceItem::find($invoiceItemID);

        if (!$invoiceItem) return response()->json(['error' => 'InvoiceItem Not Found', 404]);
        $invoiceItem->delete();
        return response()->json(['invoiceItem' => 'InvoiceItem deleted successfully'], 201);
    }
}
