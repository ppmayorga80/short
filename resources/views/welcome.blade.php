@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if(!empty($msg))
                <div class="alert alert-success">
                    <ul>
                        <li>{{ $msg }}</li>
                    </ul>
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">List of Urls</div>

                <div class="panel-body">
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<th>#</th>
                                <th>Short</th>
                                <th>Original</th>
                                <th>Tag</th>
                                <th>Clicks</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                            @foreach($urls as $url)
                            <tr>
                                <td>{{ $url->id }}</td>
                                <td><a href="{{url($url->short_url)}}" target="_blank">{{ url($url->short_url) }}</a></td>
                                <td>{{ $url->original_url }}</td>
                                <td>{{ $url->tag }}</td>
                                <td>{{ $url->clicks }}</td>
                            </tr>
                            @endforeach
                    	</tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
