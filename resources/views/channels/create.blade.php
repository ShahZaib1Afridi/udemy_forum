@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    Create Channel:
  </div>

  <div class="panel-body">

        <form method="post" action="{{ route('channels.store') }}">
                {{ csrf_field() }}

        <div class="form-group">
          <label for="">Channel:</label>
          <input type="text" name="channel" class="form-control">
        </div>
        <div class="text-center">
            <div class="form-group">
              <button type='submit' class='btn btn-md btn-success'>Submit</button>
            </div>
        </div>

            </form>
  </div>

</div>
@endsection
