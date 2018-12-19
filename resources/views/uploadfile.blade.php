@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Upload Your File Here!</div>
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">

                            <div class="form-group row">
                                <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Choose a file') }}</label>
                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="file" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Upload Now') }}
                                    </button>
                                </div>
                            </div>


                        </div>

                        <div class="card-footer">
                            <div class="float-right">
                            </div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
















