@extends('layouts.app')

@section('content')

        <div class="panel panel-default">
          <div class="panel-heading">
            Dashboard
          </div>
          <div class="panel-body">
         <table class='table table-striped table-bordered table-hover'>
  <thead>
    <tr>
      <th>Name</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($channels as $channel)
          <tr>
              <td>{{ $channel->title }}</td>
            <td><a href="{{ route('channels.edit', $channel->id) }}" class="btn btn-xs btn-info">Edit</a></td>
            <td>

                <form action="{{ route('channels.destroy', $channel->id)}}" method="post">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                 </form>

                {{-- <a href="{{ route('channels.destroy', $channel->id) }}" class="btn btn-xs btn-danger">Delete</a></td> --}}
          </tr>
      @endforeach

  </tbody>
</table>
          </div>

        </div>

@endsection
