<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')

  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Borrow Book Request</h1>
                <div>
                    <table class="table">
                        <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Book title</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Book Image</th>
                            <th>Change Status</th>
                        </tr>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->user->email }}</td>
                                <td>{{ $data->user->phone }}</td>
                                <td>{{ $data->book->title }}</td>
                                <td>{{ $data->book->quantity }}</td>
                                <td>
                                    @if ($data->status == 'approved')
                                        <span style="color: skyblue;">{{ $data->status}}</span>
                                    @endif
                                    @if ($data->status == 'rejected')
                                        <span style="color: red;">{{ $data->status}}</span>
                                    @endif
                                    @if ($data->status == 'returned')
                                        <span style="color: yellow;">{{ $data->status}}</span>
                                    @endif
                                    @if ($data->status == 'Applied')
                                        <span style="color: white;">{{ $data->status}}</span>
                                    @endif
                                </td>
                                <td><img style="width: 80px; border-radius: 50%;" src="book/{{ $data->book->book_img }}" alt=""></td>
                                <td><a href="{{ url('approve_book',$data->id)}}" class="btn btn-outline-warning">Approved</a><a class="btn btn-outline-danger" href="{{ url('reject_book',$data->id)}}">Rejected</a><a class="btn btn-outline-info" href="{{ url('return_book',$data->id)}}">Returned</a></td>
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
