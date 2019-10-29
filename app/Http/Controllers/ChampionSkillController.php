<?php

namespace App\Http\Controllers;

use App\ChampionSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChampionSkillController extends Controller
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
            'small_name' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string|',
            'champ_id' => 'required|exists:champions,id',
            'image' => 'required|image'
        ], [
            'small_name.required' => 'É necessário preencher o small name',
            'name.required' => 'É necessário preencher o título',
            'description.required' => 'É necessário preencher a descrição',
            'champ_id.required' => 'É necessário preencher o id do champion',
            'image.required' => 'É necessário adicionar uma imagem da skill',
        ]);

        if($validate->fails()){
            return $validate->errors()->all();
        }

        $file = $request->file('image')->store('champSkills');

        $data['image'] = $file;

        $post = ChampionSkill::create($data);

        $response = [
            'data' => $post,
            'message' => 'Skill Adicionada',
            'result' => 'SUCCESS',
        ];

        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     */
    public function show(ChampionSkill $championSkill)
    {
        return $championSkill;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(ChampionSkill $championSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChampionSkill $championSkill)
    {
        $data = $request->all();
        $championSkill->update($data);

        $response = [
            'data' => $championSkill,
            'message' => 'Champion Skill atualizada',
            'result' => 'SUCCESS',
        ];

        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChampionSkill $championSkill)
    {
        $championSkill->delete();

        $response = [
            'data' => $championSkill,
            'message' => 'Champion skill apagada',
            'result' => 'SUCCESS',
        ];

        return response($response);

        return("deleted");
    }
}
