<?php

namespace App\Http\Controllers;

use App\ChampionSkin;
use App\Http\Requests\ChampionSkinUpdateRequest;
use Illuminate\Http\Request;

class EditSkinsController extends Controller
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
     * @param  \App\ChampionSkin  $championSkin
     * @return \Illuminate\Http\Response
     */
    public function show(ChampionSkin $championSkin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChampionSkin  $championSkin
     * @return \Illuminate\Http\Response
     */
    public function edit(ChampionSkin $championSkin)
    {
        return view('editskins')->with('skin', $championSkin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChampionSkin  $championSkin
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, ChampionSkin $championSkin)
//    {
//        //
//    }
    public function update(ChampionSkinUpdateRequest $request, ChampionSkin $championSkin)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champSkin');

            $data['image'] = $file;
        }

        $championSkin->update($data);

        $response = [
            'data' => $championSkin,
            'message' => 'Champion Skin atualizada',
            'result' => 'SUCCESS',
        ];

        return response($response);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChampionSkin  $championSkin
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChampionSkin $championSkin)
    {
        //
    }
}
