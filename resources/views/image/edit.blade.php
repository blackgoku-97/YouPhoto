@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Editar mi imagen</div>

                    <div class="card-body">
                        <form action="{{ route('image.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="image_id" value="{{ $image->id }}" />

                            <div class="row mb-3">
                                <label for="image_path"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Imagen') }}</label>

                                <div class="col-md-6">

                                    @if ($image->user->image)
                                        <div class="container-avatar">
                                            <img src="{{ route('image.file', ['filename' => $image->image_path]) }}" class="avatar" />
                                        </div>
                                    @endif

                                    <input id="image_path" type="file"
                                        class="form-control @error('image_path') is-invalid @enderror" name="image_path"
                                        autocomplete="image_path" autofocus>

                                    @error('image_path')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                                        name="description" required autocomplete="description" autofocus>{{ $image->description }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Actualizar imagen') }}
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
