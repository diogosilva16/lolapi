<?php

namespace App\Http\Controllers;

use App\Champion;
use App\Http\Requests\ChampionStoreRequest;
use App\Http\Requests\ChampionUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
* @group Champion management
*/

class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions = Champion::with('championSkills', 'championSkins')->get();

        return $champions;
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChampionStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('champImage');

        $data['image'] = $file;

        $post = Champion::create($data);

        $response = [
            'data' => $post,
            'message' => 'Champion Inserido',
            'result' => 'SUCCESS',
        ];

        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Champion $champion
     * @return \Illuminate\Http\Response
     */
    public function show(Champion $champion)
    {
        return $champion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Champion $champion
     * @return \Illuminate\Http\Response
     */
    public function edit(Champion $champion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Champion $champion
     * @return \Illuminate\Http\Response
     */
    public function update(ChampionUpdateRequest $request, Champion $champion)
    {
        $data = $request->all();
//        $validate = Validator::make($data, [
//            'name' => 'string',
//            'title' => 'string',
//            'description' => 'string',
//            'image' => 'image'
//        ]);
//
//        if ($validate->fails()) {
//            return $validate->errors()->all();
//        }
        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champImage');

            $data['image'] = $file;
        }

        $champion->update($data);

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
     * @param  \App\Champion $champion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Champion $champion)
    {
        $champion->delete();

        $response = [
            'data' => $champion,
            'message' => 'Champion apagado',
            'result' => 'OK',
        ];

        return response($response);
    }
}
