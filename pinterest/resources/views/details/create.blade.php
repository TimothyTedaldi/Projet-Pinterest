@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Créer un partage</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('details.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="caption">Caption</label>
  
                            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                            @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
 
                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="3" cols="50" placeholder="description de l'image" autofocus>
                            </textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="url">Site de l'image</label>
  
                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" autocomplete="url" autofocus>

                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-group">

                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" required>
                                <label class="custom-file-label" for="image">Choisir une image...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        
                        <button type="submit" class="btn btn-primary">
                            Créer partage
                        </button>
                                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
