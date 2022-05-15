<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientAddressController extends Controller
{
    public function edit($id)
    {
        $address = ClientAddress::find($id);
        // dd($pic);
        return view('client-address.edit',[
            'title' => 'companies',
            'address' => $address
        ]);
    }

    public function update(ClientAddress $clientAddress, Request $request)
    {
        // dd($clientAddress);
        return redirect()->route('clients.show', $clientAddress->client->id);
    }

    public function store(Request $request)
    {
        // dd($request);
        return redirect()->route('clients.show', $request->client_id);
    }

    public function destroy($id)
    {
        return redirect()->route('clients.show', $clientAddress->client->id);
    }
}
