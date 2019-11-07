<?php

namespace App\Http\Controllers;

use App\ChampionRole;
use App\Http\Requests\ChampionRoleStoreRequest;
use App\Http\Requests\ChampionRoleUpdateRequest;
use Illuminate\Http\Request;

class ChampionRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions = ChampionRole::all();

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
    public function store(ChampionRoleStoreRequest $request)
    {
        $data = $request->all();

        $post = ChampionRole::create($data);

        $response = [
            'data' => $post,
            'message' => 'Role Adicionado',
            'result' => 'SUCCESS',
        ];

        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChampionRole  $championRole
     * @return \Illuminate\Http\Response
     */
    public function show(ChampionRole $championRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChampionRole  $championRole
     * @return \Illuminate\Http\Response
     */
    public function edit(ChampionRole $championRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChampionRole  $championRole
     * @return \Illuminate\Http\Response
     */
    public function update(ChampionRoleUpdateRequest $request, ChampionRole $championRole)
    {
        $data = $request->all();

        $championRole->update($data);

        $response = [
            'data' => $championRole,
            'message' => 'Champion Role atualizado',
            'result' => 'SUCCESS',
        ];

        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChampionRole  $championRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChampionRole $championRole)
    {
        $championRole->delete();

        $response = [
            'data' => $championRole,
            'message' => 'Champion role apagado',
            'result' => 'SUCCESS',
        ];

        return response($response);
    }

    public function roleform(Request $request)
    {
        $champion = ChampionRole::all();

        return view('addrole')
            ->with('champions', $champion);
    }
}
