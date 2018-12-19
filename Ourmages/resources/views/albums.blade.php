@extends('layouts.app')

@section('content')
<div class=" p-b-60">
    <div class="section grey p-t-20  p-b-20 m-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Your Albums</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            <strong>Success! </strong>
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
        	@foreach($data as $dt)
        	<div class="col-md-12">
        		<a href="/album/{{$dt->album}}"><h3><i class="fa fa-folder"> </i> {{$dt->album}}</h3></a>
        	</div>
        	@endforeach
        </div>
    </div>
</div>
@endsection