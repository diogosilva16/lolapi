<?php

namespace App\Http\Controllers;

use App\Champion;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class EditChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function show(Champion $champion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function edit(Champion $champion)
    {
        return view('editchampion')->with('champion', $champion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Champion $champion)
    {
        $data = $request->all();
//        $champion->update($data);

        $validate = Validator::make($data, [
            'name' => 'string',
            'title' => 'string',
            'description' => 'string',
            'image' => 'image'
        ]);

        if ($validate->fails()) {
            return $validate->errors()->all();
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champImage');

            $data['image'] = $file;
        }

        $champion->update($data);

        $resposta = 'FUNCIONOU';
        $response = [
            'data' => $champion,
            'message' => 'Champion atualizado',
            'result' => 'SUCCESS',
        ];

        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Champion $champion)
    {
        //
    }
}
