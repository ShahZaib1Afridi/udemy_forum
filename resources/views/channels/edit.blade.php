@extends('layouts.app')
@section('content')
    <div class='container'>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2">
<div class="panel panel-default">
  <div class="panel-heading">
    Update Channel:
  </div>
  <div class="panel-body">

<form method="post" action="{{ route('channels.update',$channel->id) }}">
    {{ csrf_field() }}
     @method('PUT')

    <div class="form-group">
      <label for="">Channel:</label>
      <input type="text" name="channel" class="form-control" value="{{ $channel->title }}">
    </div>
    <div class="text-center">
        <div class="form-group">
          <button type='submit' class='btn btn-md btn-success '>Update</button>
        </div>
    </div>


</form>
  </div>

</div>
      </div>
    </div>
    </div>

@endsection
