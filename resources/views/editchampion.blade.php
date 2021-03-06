@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Champion</div>

                    <div class="card-body" style="background-color:#D9D6CF">
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
                                    <textarea rows="5" id="description" type="text"
                                           class="form-control @error('description') is-invalid @enderror"
                                           name="description"  required
                                              autocomplete="description">
{{ $champion->description }}
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                        </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Imagem</label>

                                <div class="col-md-6">
                                    <img src={{"../..//uploads/$champion->image"}}>
                                    <input id="image" type="file" style="background-color: #D9D6CF"
                                           class="form-control @error('image') is-invalid @enderror mt-2" name="image"
                                    >

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">Champion Role</label>

                                <div class="col-md-6">

                                    <select name="role_id">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}"
                                                    @if($role->id == $champion->championRole->id)
                                                    selected
                                                    @endif()
                                            >{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn text-white" style="background-color: #E8A300">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>





@endsection
