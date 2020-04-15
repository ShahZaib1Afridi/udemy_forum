@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Create new discussion</h3>
              </div>
              <div class="panel-body">
                <form method="PUT" action="{{ route('discussions.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="title">Title:</label>
                      <input type="text" class="form-control" name="title">

                    </div>

                    <div class="form-group">
                        <label for="">Select a Channel:</label>
                     <select class='form-control' name="channel_id" id="channel_id">
                           @foreach ($channels as $channel)
                             <option value="{{ $channel->id }}">{{ $channel->title }}</option>
                           @endforeach
                     </select>
                    </div>
                    <div class="form-group">
                        <label for="">Ask Question:</label>
                      <textarea class='form-control' name="content" id="content">

                      </textarea>

                        <div class="text-center"><br>
                          <div class="form-group">
                            <button type='submit' class='btn btn-md btn-success'>Submit</button>
                          </div>
                      </div>
                    </div>
                </form>
              </div>

            </div>
@endsection
