@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                    <form action="{{}}" method="POST" role="form">
                    	<legend>Form Title</legend>
                    
                    	<div class="form-group">
                    		<label for=""></label>
                    		<input type="text" class="form-control" name="" id="" placeholder="Input...">
                    	</div>
                    
                    	
                    
                    	<button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
