<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Http\Requests\StorePhoneRequest;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Phone::all();
    }

    public function store(StorePhoneRequest $request)
    {
        return Phone::create($request->validated());
    }

    public function show($id)
    {
        return Phone::findOrFail($id);
    }

    public function update(StorePhoneRequest $request, $id)
    {
        $phone = Phone::findOrFail($id);
        $phone->update($request->validated());
        return $phone;
    }
    public function destroy($id)
    {
        $phone = Phone::findOrFail($id);
        $phone->delete();
        return response()->json(['message' => 'Phone deleted successfully']);
    }
}
