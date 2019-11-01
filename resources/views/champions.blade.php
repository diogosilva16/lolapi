@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <button  onclick="location.href='{{route('insert-champion')}}'">Adicionar novo champion</button>
            <button>Adicionar nova skin</button>
            <button>Adicionar nova habilidade</button>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach( $champions as $champion)
                    <div class="card mb-3">
                        <div class="card-header">{{$champion -> name}}</div>
                        <div class="card-body" style="background-color:rgba(0,0,0,0.5)">
                            <div class="row">
                                <div class="col-md-6" style="color: white">
                                    <p>{{$champion -> title}}</p>
                                    <p>{{$champion ->description}}</p>
                                    <button type="button" class="btn btn-warning">Skills</button>
                                    <button type="button" class="btn btn-warning">Skins</button>
                                    <button type="button" class="btn btn-warning"
                                            onclick="location.href='{{url('champion/'.$champion->id.'/edit')}}'">Editar
                                    </button>
                                    @foreach($champion->championSkills as $skill)
                                        <p>{{$skill->name}}</p>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <img class="img-fluid" src="uploads/{{$champion->image}}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection