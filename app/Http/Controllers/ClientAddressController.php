<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientAddress;

class ClientAddressController extends Controller
{
    public function edit($id)
    {
        $address = ClientAddress::find($id);
        // dd($pic);
        return view('client-address.edit',[
            'title' => 'clients',
            'address' => $address
        ]);
    }

    public function update(ClientAddress $clientAddress, Request $request)
    {
        $clientAddress->name = $request->name;
        $clientAddress->detail = $request->detail;
        $clientAddress->village = $request->village;
        $clientAddress->urban_village = $request->urban_village;
        $clientAddress->distric = $request->distric;
        $clientAddress->province = $request->province;
        $clientAddress->postal_code = $request->postal_code;
        $clientAddress->map_url = $request->map_url;
        $clientAddress->is_deleted = false;
        $clientAddress->save();
        return redirect()->route('clients.show', $clientAddress->client->id);
    }

    public function store(Request $request)
    {
        // dd($request);
        $clientAddress = new ClientAddress;
        $clientAddress->client_id = $request->client_id;
        $clientAddress->name = $request->name;
        $clientAddress->detail = $request->detail;
        $clientAddress->village = $request->village;
        $clientAddress->urban_village = $request->urban_village;
        $clientAddress->distric = $request->distric;
        $clientAddress->province = $request->province;
        $clientAddress->postal_code = $request->postal_code;
        $clientAddress->map_url = $request->map_url;
        $clientAddress->is_deleted = false;
        $clientAddress->save();
        return redirect()->route('clients.show', $request->client_id);
    }

    public function destroy($id)
    {
        // dd($id);
        $clientAddress = ClientAddress::find($id);
        $clientAddress->is_deleted = true;
        $clientAddress->save();
        return redirect()->route('clients.show', $clientAddress->client->id);
    }
}
