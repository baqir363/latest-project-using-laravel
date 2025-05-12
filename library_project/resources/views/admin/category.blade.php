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
                    <div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        </div>
                        @endif
                    </div>
                    <h1>Add Category</h1>

                    <form action="{{ url('add_category')}}" method="POST">
                        @csrf
                        <label for="">Category Name</label>
                        <input class="form-control w-25 mt-4" type="text" name="category" required>
                        <input class="btn btn-outline-primary mt-4" type="submit" value="Add Category">
                    </form>

                    <div>
                        <table class="table">
                            <tr>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($category as $category)
                                <tr>
                                    <td>{{ $category->cat_title}}</td>
                                    <td>
                                        <a href="{{ url('edit_category',$category->id)}}" class="btn btn-outline-info">Update</a>
                                        <a onclick="confirmation(event)" href="{{ url('cat_delete',$category->id)}}" class="btn btn-outline-danger">Delete</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
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
