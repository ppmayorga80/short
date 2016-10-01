@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Url</div>

                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form action="{{ action("UrlTransformController@postNuevo") }}" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Url:</label>
                            <input value="{{old('original_url')}}" type="text" class="form-control" name="original_url" id="" placeholder="Original Url">
                        </div>
                        <div class="form-group">
                            <label for="">Short Url:</label>
                            <input type="text" class="form-control" name="short_url" id="" placeholder="Leave it blank to auto generate Key">
                        </div>

                    	
                    
                    	<button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
