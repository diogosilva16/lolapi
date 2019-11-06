<?php

namespace App\Http\Controllers;

use App\Champion;
use App\ChampionSkins;
use App\Http\Requests\ChampionSkinStoreRequest;
use App\Http\Requests\ChampionSkinUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @group Champion Skins management
 */

class ChampionSkinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions = ChampionSkins::all();

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChampionSkinStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('champSkin');

        $data['image'] = $file;

        $post = ChampionSkins::create($data);

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
     * @param  \App\ChampionSkins  $championSkins
     * @return \Illuminate\Http\Response
     */
    public function show(ChampionSkins $championSkins)
    {
        return $championSkins;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChampionSkins  $championSkins
     * @return \Illuminate\Http\Response
     */
    public function edit(ChampionSkins $championSkins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChampionSkins  $championSkins
     * @return \Illuminate\Http\Response
     */
    public function update(ChampionSkinUpdateRequest $request, ChampionSkins $championSkins)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champSkin');

            $data['image'] = $file;
        }

        $championSkins->update($data);

        $response = [
            'data' => $championSkins,
            'message' => 'Champion Skin atualizada',
            'result' => 'SUCCESS',
        ];

        return response($response);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChampionSkins  $championSkins
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChampionSkins $championSkins)
    {
        $championSkins->delete();

        $response = [
            'data' => $championSkins,
            'message' => 'Champion apagado',
            'result' => 'OK',
        ];

        return response($response);
    }

    public function skinform(Request $request)
    {
        $champion = Champion::all();

        return view('addskin')
            ->with('champions', $champion);
    }
}
