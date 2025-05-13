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
                        <div>
                            <table class="table">
                            <tr>
                                <th>Room id</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Arrival Date</th>
                                <th>Leaving Date</th>
                                <th>Status</th>
                                <th>Room Title</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th>Change Status</th>
                            </tr>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->room_id }}</td>
                                    <td>{{ $data->name}}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->start_date }}</td>
                                    <td>{{ $data->end_date }}</td>
                                    <td>
                                        @if ($data->status == 'approve')
                                            <span style="color: skyblue;">Approved</span>
                                        @endif
                                        @if ($data->status == 'rejected')
                                            <span style="color: red;">Rejected</span>
                                        @endif
                                        @if ($data->status == 'waiting')
                                            <span style="color: yellow;">Waiting</span>
                                        @endif
                                    </td>
                                    <td>{{ $data->room->room_title}}</td>
                                    <td>{{ $data->room->price}}$</td>
                                    <td><img src="room/{{ $data->room->image}}" alt=""></td>
                                    <td><a onclick="return confirm('Are You sure to Delete This?');" href="{{ url('delete_booking',$data->id)}}" class="btn btn-outline-danger">Delete</a></td>
                                    <td><a href="{{ url('approve_book',$data->id)}}" class="btn btn-outline-success">Approve</a><a href="{{ url('reject_book',$data->id)}}" class="btn btn-outline-warning">Rejected</a></td>
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
