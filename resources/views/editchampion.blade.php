@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Champion </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('web.champion.update', $champion->id) }}"
                              enctype="multipart/form-data">
                        @csrf

                        <!-- <input type="hidden" name="_method" value="put"> -->
                            @method('put')

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Titulo</label>

                                <div class="col-md-6">
                                    <input id="title" type="text"
                                           class="form-control @error('title') is-invalid @enderror" name="title"
                                           value="{{ $champion->title }}" required autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ $champion->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <input id="description" type="text"
                                           class="form-control @error('description') is-invalid @enderror"
                                           name="description" value="{{ $champion->description }}" required
                                           autocomplete="description">

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Imagem</label>

                                <div class="col-md-6">
                                    <img src={{"../..//uploads/$champion->image"}}>
                                    <br/>
                                    <br/>
                                    <input id="image" type="file"
                                           class="form-control @error('image') is-invalid @enderror" name="image"
                                    >

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{--<div class="form-group row">--}}
                            {{--<label for="user_id" class="col-md-4 col-form-label text-md-right">User ID</label>--}}

                            {{--<div class="col-md-6">--}}

                            {{--<select name="user_id">--}}
                            {{--@foreach($users as $user)--}}
                            {{--<option value="{{$user->id}}">{{$user->name}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {{--@error('user_id')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $message }}</strong>--}}
                            {{--</span>--}}
                            {{--@enderror--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                        {{--@if($post->response)--}}
                        {{--<p>Post Atualizado</p>--}}
                        {{--@endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
