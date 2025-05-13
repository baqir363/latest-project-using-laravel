<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h1>All Room</h1>
                    <div>
                        <table class="table">
                            <tr>
                                <th>Room Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Wifi</th>
                                <th>Room Type</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->room_title }}</td>
                                    <td>{!! Str::limit($data->description,150)!!}</td>
                                    <td>{{ $data->price }}$</td>
                                    <td>{{ $data->wifi }}</td>
                                    <td>{{ $data->room_type }}</td>
                                    <td><img src="room/{{ $data->image}}" width="80px" height="80px" alt=""></td>
                                    <td><a href="{{ url('edit_room',$data->id)}}" class="btn btn-outline-info">Update</a><a onclick="return confirm('Are you sure to delete this?')" href="{{ url('delete_room',$data->id)}}" class="btn btn-outline-danger">Delete</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
       @include('admin.footer')
  </body>
</html>
