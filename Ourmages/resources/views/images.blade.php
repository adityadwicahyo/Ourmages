@extends('layouts.app')

@section('content')
<div class=" p-b-60">
    <div class="section grey p-t-20  p-b-20 m-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Your Images</h2>
                </div>
                <div class="col-md-6 p-t-20 xs-no-padding xs-p-l-20">
                    <div class="portfolio-filter">
                        <ul id="portfolio-nav">
                            <li class="current">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newImage"><i class="fa fa-plus"></i> New Image</button>
                            </li>
                        </ul>
                        <!--END PORTFOLIO-NAV-->
                    </div>
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
        <div class="portfolio-grid portfolioContainer">
            <ul id="thumbs" class="col3">
                @foreach($data as $dt)
                <li class="item web" style="border: solid grey 1px; padding: 10px 10px 10px 10px">
                    <div class="portfolio-image-wrapper">
                        <img src="{{$dt->photo}}" alt="" />
                    </div>
                    <div class="item-info">
                        <h4 class="text-dark no-margin p-t-10 title semi-bold">{{$dt->_id}}</h4>
                        <a href="/image/{{$dt->_id}}" class="btn btn-primary">View</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$dt->_id}}">Update</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$dt->_id}}">Delete</button>                    
                    <!--END ITEM-INFO-->
                    <div class="clearfix">
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<!-- Modal New Image -->
<div class="modal fade" id="newImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/image/add" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">File</label>
                    <div class="col-sm-10">
                        <input name="file" type="file" class="form-control form-control-sm" required="required">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@foreach($data as $dt)
<!-- Modal Edit Image -->
<div class="modal fade" id="edit{{$dt->_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update <b>{{$dt->_id}}</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/image/update" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">File</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" value="{{$dt->_id}}">
                        <input name="file" type="file" class="form-control form-control-sm" required="required">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endforeach

@foreach($data as $dt)
<!-- Modal Delete -->
<div class="modal fade" id="delete{{$dt->_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin ingin menghapus gambar ini <b>{{$dt->_id}}</b> ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form action="/image/delete" method="POST" style="float: right;">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$dt->_id}}">
                <input type="hidden" name="user_id" value="{{$dt->user_id}}">
                <button style="margin-left: 10px" type="submit" class="btn btn-danger">Yes delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endforeach

@endsection('content')