@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <button onclick="location.href='{{route('insert-champion')}}'">Adicionar novo champion</button>
            <button onclick="location.href='{{route('add-skin')}}'">Adicionar nova skin</button>
            <button onclick="location.href='{{route('add-skill')}}'">Adicionar nova habilidade</button>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                @foreach( $champions as $key=>$champion)
                    <div class="card mb-3">
                        <div class="card-header">{{$champion -> name}}</div>
                        <div class="card-body" style="background-color:rgba(0,0,0,0.5)">
                            <div class="row">
                                <div class="col-md-8" style="color: white">
                                    {{--                                    <p>{{$champion->}}</p>--}}
                                    <p>{{$champion -> title}}</p>
                                    <p>{{$champion ->description}}</p>
                                    <div style="text-align: center">
                                        <button type="button" class="btn btn-warning" data-toggle="collapse"
                                                data-target="#skills{{$key}}">Skills
                                        </button>
                                        <button type="button" class="btn btn-warning" data-toggle="collapse"
                                                data-target="#skins{{$key}}">Skins
                                        </button>
                                        <button type="button" class="btn btn-warning"
                                                onclick="location.href='{{url('champion/'.$champion->id.'/edit')}}'">
                                            Editar
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="uploads/{{$champion->image}}">
                                </div>
                            </div>
                            <div class="collapse mt-5" style="color: white" id="skills{{$key}}">
                                <p style="text-align: center;">Skills</p>
                                @foreach($champion->championSkills as $skill)
                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <img class="img-fluid m-auto" src="uploads/{{$skill->image}}">
                                        </div>
                                        <div class="col-md-4 m-auto">
                                            <p>{{$skill->name}}</p>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-warning"
                                                    onclick="location.href='{{url('championSkill/'.$skill->id.'/edit')}}'">
                                                Editar
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="collapse mt-5" style="color: white" id="skins{{$key}}">
                                <p>Skins</p>
                                @foreach($champion->championSkins as $skin)
                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <img class="img-fluid" height="50" width="50"
                                                 src="uploads/{{$skin->image}}">
                                        </div>
                                        <div class="col-md-9 m-auto">
                                            <p>{{$skin->name}}</p>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="location.href='{{url('championSkin/'.$skin->id.'/edit')}}'">
                                                Editar
                                            </button>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection