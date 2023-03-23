<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    function store(Request $request){
        $transactions = new Transaction;

        $food_id = $request->data;

        foreach($food_id as $food){
            $transactions->insert([
                'id_customer' => 1,
                'id_food' => $food,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        return response()->json([
            'Message'=>'Data Berhasil Ditambahkan',
        ], 201);
    }
}
