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


             <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Send Email</th>
                            </tr>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->message }}</td>
                                    <td><a href="{{ url('send_mail',$data->id)}}" class="btn btn-outline-success">send mail</a></td>
                                </tr>
                            @endforeach
                        </table>
          </div>
        </div>
      </div>
       @include('admin.footer')
  </body>
</html>
