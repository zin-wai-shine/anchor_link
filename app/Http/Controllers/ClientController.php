<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use App\Models\Clientemail;
use Illuminate\Database\Eloquent\Model;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        /* search() mean we are using (local scope) you can see in the model "scopeSearch function" */
    {
        $clients = Client::search()->latest('id')->paginate('6')->withQueryString();
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){   return view('client.create');   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $clients = new Client();
        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->save();

        return redirect()->back()->with('status', 'add client email and name is completely.');
    }


    public function show(Client $client){}


    public function edit(Client $client){   return view('client.edit',compact('client'));   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->name = $request->name;
        $client->email = $request->email;
        $client->update();

        return redirect()->route("client.index")->with('status', 'updated client email and name is completely.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->back()->with('status','deleted client is completely.');
    }
}
