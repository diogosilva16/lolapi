<?php

namespace App\Http\Controllers;

use App\ChampionSkill;
use App\Http\Requests\ChampionSkillUpdateRequest;
use Illuminate\Http\Request;

class EditSkillController extends Controller
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
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     */
    public function show(ChampionSkill $championSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(ChampionSkill $championSkill)
    {
        return view('editskills')->with('skill', $championSkill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, ChampionSkill $championSkill)
//    {
//        //
//    }

    public function update(ChampionSkillUpdateRequest $request, ChampionSkill $championSkill)
    {
        $data = $request->all();


        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champSkills');

            $data['image'] = $file;
        }

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
        //
    }
}