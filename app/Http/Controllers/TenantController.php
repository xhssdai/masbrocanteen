<?php

namespace App\Http\Controllers;

use App\Http\Resources\TenantFoodsResource;
use App\Http\Resources\TenantResource;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    function getTenant(){
        $tenants = Tenant::all();
        return TenantResource::collection($tenants);
    }

    function getFood($id){
        $foods = Tenant::with('foods')->findOrFail($id);
        return new TenantFoodsResource($foods);
    }
}
