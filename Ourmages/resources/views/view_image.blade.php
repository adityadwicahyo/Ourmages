@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
	<div class="row">
        <div class="col-md-12 feature-list ">
            <div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="300">
                <img style="width: 500px" src="{{$data->photo}}">
                <h4 class="title">{{$data->_id}}</h4>
                <p><b>Created at : </b> {{$data->created_at}}</p>
                <p><b>Updated at : </b> {{$data->updated_at}}</p>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection