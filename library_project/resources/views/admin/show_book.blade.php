<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')


   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

                <div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        </div>
                        @endif
                    </div>
                <h1>All Books</h1>
                <div class="mt-4">
                    <table class="table table-borderd">
                        <tr>
                            <th>Book Title</th>
                            <th>Auther Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Auther Image</th>
                            <th>Book Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($book as $data)
                        <tr>
                            <td>{{ $data->title}}</td>
                            <td>{{ $data->auther_name}}</td>
                            <td>{{ $data->price}}</td>
                            <td>{{ $data->quantity}}</td>
                            <td>{{ $data->description}}</td>
                            <td>{{ $data->category->cat_title}}</td>
                            <td><img style="width: 80px; border-radius: 50%" src="auther/{{ $data->auther_img}}" alt=""></td>
                            <td><img style="width: 80px; border-radius: 50%"style="width: 80px; border-radius: 50%" src="book/{{ $data->book_img}}" alt=""></td>
                            <td><a class="btn btn-outline-info" href="{{ url('edit_book',$data->id)}}">Update</a><a onclick="confirmation(event)" class="btn btn-outline-danger" href="{{ url('book_delete',$data->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')

     <script>
        function confirmation(event)
        {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            swal({
                title: "Are You sure to Delete this?",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })

            .then((willCancel) => {
                if(willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
  </body>
</html>
