<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientPic;
class ClientPicController extends Controller
{
    public function edit($id)
    {
        $pic = ClientPic::find($id);
        // dd($pic);
        return view('client-pic.edit',[
            'title' => 'companies',
            'pic' => $pic
        ]);
    }

    public function update(ClientPic $clientPic, Request $request)
    {
        // dd($clientPic);
        $clientPic->role = $clientPic->client->id;
        $clientPic->name = $request->name;
        $clientPic->role = $request->role;
        $clientPic->phone = $request->phone;
        $clientPic->email = $request->email;
        $clientPic->save();
        return redirect()->route('clients.show', $clientPic->client->id);
    }

    public function store(Request $request)
    {
        // dd($request);
        $clientPic = new ClientPic;
        $clientPic->client_id = $request->client_id;
        $clientPic->name = $request->name;
        $clientPic->role = $request->role;
        $clientPic->gender = $request->gender;
        $clientPic->phone = $request->phone;
        $clientPic->email = $request->email;
        $clientPic->is_deleted = false;
        $clientPic->save();
        return redirect()->route('clients.show', $request->client_id);
    }

    public function destroy($id)
    {
        $clientPic = ClientPic::find($id);
        $clientPic->is_deleted = true;
        $clientPic->save();
        return redirect()->route('clients.show', $clientPic->client->id);
    }
}
 