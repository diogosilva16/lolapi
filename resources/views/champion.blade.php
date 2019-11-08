@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                @foreach( $champion as $key=>$champion)
                    <div class="card mb-3">
                        <div class="card-header"><b>{{$champion -> name}}</b></div>
                        <div class="card-body" style="background-color:rgba(0,0,0,0.5)">
                            <div class="row">
                                <div class="col-md-8" style="color: white">
                                    <p>{{$champion -> title}}</p>
                                    <p>{{$champion ->description}}</p>
                                    <div style="text-align: center">
                                        <button type="button" class="btn btn-warning" data-toggle="collapse"
                                                data-target="#skills{{$key}}">Skills
                                        </button>
                                        <button type="button" class="btn btn-warning" data-toggle="collapse"
                                                data-target="#skins{{$key}}">Skins
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="/uploads/{{$champion->image}}">
                                </div>
                            </div>
                            <div class="collapse mt-4" style="color: white" id="skills{{$key}}">
                                <p style="text-align: center; background-color:rgba(0,0,0,0.1)"><b>Abilities</b></p>
                                @foreach($champion->championSkills as $skill)
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <img class="m-auto" src="/uploads/{{$skill->image}}">
                                            <p class="mt-1">{{$skill->name}}</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{$skill->description}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="collapse mt-5" style="color: white" id="skins{{$key}}">
                                <p style="text-align: center; background-color:rgba(0,0,0,0.1)"><b>Skins</b></p>
                                @foreach($champion->championSkins as $skin)
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <img class="img-fluid" height="50" width="50"
                                                 src="/uploads/{{$skin->image}}">
                                        </div>
                                        <div class="col-md-4 m-auto">
                                            <p>{{$skin->name}}</p>
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