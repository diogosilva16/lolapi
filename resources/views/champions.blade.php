@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Auth::check())
            @if(Auth::user()->role->name == "admin")
                <div class="row justify-content-center">
                    <button class="btn btn-warning mr-2 btn-outline-dark"
                            onclick="location.href='{{route('web.champion.create')}}'">Adicionar novo champion
                    </button>
                    <button class="btn btn-warning mr-2 btn-outline-dark"
                            onclick="location.href='{{route('web.championSkin.create')}}'">Adicionar nova skin
                    </button>
                    <button class="btn btn-warning mr-2 btn-outline-dark"
                            onclick="location.href='{{route('web.championSkill.create')}}'">Adicionar nova habilidade
                    </button>
                    <button class="btn btn-warning mr-2 btn-outline-dark"
                            onclick="location.href='{{route('web.championRole.create')}}'">Adicionar novo role
                    </button>
                </div>
            @endif
        @endif

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                @include('bo.partials.alerts')
                @foreach( $champions as $key=>$champion)
                    <div class="card mb-3">
                        <div class="card-header">
                            <b>{{$champion -> name}}</b>
                            @if(Auth::check())
                                @if(Auth::user()->role->name == "admin")
                                    <button type="button" class="btn btn-warning btn-outline-dark float-right"
                                            onclick="location.href='{{url('champion/'.$champion->id.'/edit')}}'">
                                        Editar
                                    </button>
                                @endif
                            @endif</div>
                        <div class="card-body" style="background-color:rgba(0,0,0,0.5)">
                            <div class="row">
                                <div class="col-md-8" style="color: white">
                                    {{--                                    <p>{{$champion->}}</p>--}}
                                    <p>{{$champion -> title}}</p>
                                    <p>{{$champion ->description}}</p>
                                    {{--                                    {{$champion->championRole->name}}--}}
                                    <div style="text-align: center">
                                        <button type="button" class="btn btn-warning btn-outline-dark"
                                                data-toggle="collapse"
                                                data-target="#skills{{$key}}">Skills
                                        </button>
                                        <button type="button" class="btn btn-warning btn-outline-dark"
                                                data-toggle="collapse"
                                                data-target="#skins{{$key}}">Skins
                                        </button>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-fluid" src="uploads/{{$champion->image}}">
                                </div>
                            </div>
                            <div class="collapse mt-5" style="color: white" id="skills{{$key}}">
                                <p style="text-align: center; background-color:rgba(0,0,0,0.1)"><b>Abilities</b></p>
                                @foreach($champion->championSkills as $key=>$skill)
                                    <div class="row mb-2">
                                        <div class="col-md-3" style="text-align:center">
                                            <img class="m-auto" src="uploads/{{$skill->image}}">
                                            <p class="mt-1">{{$skill->name}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$skill->description}}</p>
                                        </div>
                                        @if(Auth::check())
                                            @if(Auth::user()->role->name == "admin")
                                                <div class="col-md-3" style="text-align:center">
                                                    <button style="width: 30%" type="button"
                                                            class="btn btn-warning btn-outline-dark"
                                                            onclick="location.href='{{url('championSkill/'.$skill->id.'/edit')}}'">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </button>
                                                    {{--<button style="width: 30%" type="button"--}}
                                                    {{--class="btn btn-warning btn-outline-dark" data-catid="{{$skill->id}}" data-toggle="modal"--}}
                                                    {{--data-target="#skillDeleteModal{{$key}}">--}}
                                                    {{--<i class="fa fa-trash"></i>--}}
                                                    {{--</button>--}}
                                                    <form class="delete mt-1"
                                                          action="{{route('web.championSkill.destroy', $skill->id)}}"
                                                          method="POST">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        {{ csrf_field() }}
                                                        <button style="width: 30%" type="submit"
                                                                class="btn btn-warning btn-outline-dark">
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                    </form>
                                                    {{--<div class="modal fade" id="skillDeleteModal{{$key}}" tabindex="-1"--}}
                                                    {{--role="dialog" aria-labelledby="skillDeleteModal{{$key}}"--}}
                                                    {{--aria-hidden="true">--}}
                                                    {{--<div class="modal-dialog" role="document">--}}
                                                    {{--<div class="modal-content">--}}
                                                    {{--<div class="modal-header">--}}
                                                    {{--<span style="color:red" id="skillDeleteModalLabel{{$key}}">--}}
                                                    {{--Apagar <b>{{$skill->name}}</b>?</span>--}}
                                                    {{--<button type="button" class="close"--}}
                                                    {{--data-dismiss="modal" aria-label="Close">--}}
                                                    {{--<span aria-hidden="true">&times;</span></button>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="modal-body"> Do you want to delete this?--}}
                                                    {{--<br/>--}}
                                                    {{--<input type="hidden" name="skill_id" id="skill_id" value="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="modal-footer">--}}
                                                    {{--<button type="button" class="btn btn-secondary"--}}
                                                    {{--data-dismiss="modal">NO--}}
                                                    {{--</button>--}}
                                                    {{--<a href="#delete" id="delete"--}}
                                                    {{--class="btn btn-primary">YES</a></div>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <div class="collapse mt-5" style="color: white" id="skins{{$key}}">
                                <p style="text-align: center; background-color:rgba(0,0,0,0.1)"><b>Skins</b></p>
                                @foreach($champion->championSkins as $skin)
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <img class="img-fluid" height="50" width="50"
                                                 src="uploads/{{$skin->image}}">
                                        </div>
                                        <div class="col-md-4 m-auto">
                                            <p>{{$skin->name}}</p>
                                        </div>
                                        @if(Auth::check())
                                            @if(Auth::user()->role->name == "admin")
                                                <div class="col-md-4">
                                                    <button style="width: 20%" type="button"
                                                            class="btn btn-warning btn-outline-dark"
                                                            onclick="location.href='{{url('championSkin/'.$skin->id.'/edit')}}'">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </button>

                                                    <form class="delete mt-1"
                                                          action="{{route('web.championSkin.destroy', $skin->id)}}"
                                                          method="POST">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        {{ csrf_field() }}
                                                        <button style="width: 20%" type="submit"
                                                                class="btn btn-warning btn-outline-dark">
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            @endif
                                        @endif
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