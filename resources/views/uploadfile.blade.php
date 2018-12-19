@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Files
                        <form class="" action="{{url('uploadfile/store')}}" enctype="multipart/form-data" method="post">
                            <input type="file" name="file" value="">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">


                        {{Form::open(['method'=> 'POST', 'route'=> ['uploadfile.create']])}}
                        <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="file"  >Upload a file
                        </button>
                        {!! Form::close() !!}
                        </form>
                        <div class="card-body">

                                    There are no file has been uploaded, you can upload your file here!

                            </div>

                        <div class="card-footer">
                            <div class="float-right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection