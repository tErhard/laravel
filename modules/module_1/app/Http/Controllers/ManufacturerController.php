<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function edit($id)
    {
        $manufacturer = Manufacturer::findOrFail($id);

        return view('manufacturers.edit', compact('manufacturer'));
    }

    public function update(Request $request, $id)
    {
        $manufacturer = Manufacturer::findOrFail($id);

        $validatedData = $request->validate([
            'brand' => 'required',
            'country' => 'required',
            'contact_phone' => 'required',
            'email' => 'required|email',
        ]);

        $manufacturer->update($validatedData);

        return redirect()->route('manufacturers.edit', $manufacturer->id)
            ->with('success', 'Manufacturer updated successfully');
    }
}
