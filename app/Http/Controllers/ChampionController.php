<?php

namespace App\Http\Controllers;

use App\Champion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChampionController extends Controller
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
        $data = $request->all();

        $validate = Validator::make($data, [
           'name' => 'required|string',
           'title' => 'required|string',
           'description' => 'required|string',
            'image' => 'required|image'
        ], [
            'name.required' => 'É necessário preencher o nome',
            'title.required' => 'É necessário preencher o título',
            'description.required' => 'É necessário preencher a descrição',
            'image.required' => 'É necessário adicionar uma imagem',
        ]);

        if($validate->fails()){
            return $validate->errors()->all();
        }

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
     * @param  \App\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function show(Champion $champion)
    {
        return $champion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function edit(Champion $champion)
    {
        //
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
     * @param  \App\Champion  $champion
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
