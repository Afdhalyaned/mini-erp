<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientPic;
use Illuminate\Support\Facades\Storage;


class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::where('is_deleted', false)->get();
        return view('client.index', [
            'title' => 'companies',
            'clients' => $clients
        ]);
    }

    public function show(Client $client)
    {
        $pics = $client->pic;
        // dd($pics);
        return view('client.detail', [
            'title' => 'companies',
            'client' => $client
        ]);
    }

    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->legal_name = $request->legal_name;
        // image
        if($request->file('logo')){
            $file = $request->file('logo');
            $name = $file->hashName();
            $path = Storage::putFileAs('public/client', $file, $name);
            $client->logo = $name;
        }
        $client->is_deleted = false;
        $client->save();

        return redirect()->route('clients.index');
    }

    public function update(Client $client, Request $request)
    {
        $client->name = $request->name;
        $client->legal_name = $request->legal_name;
        // image
        if($request->file('logo')){
            $file = $request->file('logo');
            $name = $file->hashName();
            $path = Storage::putFileAs('public/client', $file, $name);
            $client->logo = $name;
        }
        $client->is_deleted = false;
        $client->save();

        return redirect()->route('clients.show', $client);
    }

    public function destroy(Client $client)
    {
        $client->is_deleted = true;
        $client->save();
        return redirect()->route('clients.index');
    }
}
