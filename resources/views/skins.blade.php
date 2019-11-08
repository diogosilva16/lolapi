@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                @foreach( $champions as $key=>$champion)
                    <div class="row">
                        <a style="color: black" href="champion/{{$champion->id}}"><b>{{$champion->name}}</b></a>
                    </div>
                    <div class="row mb-5" style="text-align:center">
                        @foreach($champion->championSkins as $skin)
                            <div class="col-md-2 p-2" >
                                <img class="img-fluid" width="150"
                                     src="uploads/{{$skin->image}}">
                                <p class="m-2">{{$skin->name}}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection