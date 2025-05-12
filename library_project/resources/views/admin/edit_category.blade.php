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
                    <h1>Update Category</h1>

                    <form class="mt-4" action="{{ url('update_category',$data->id)}}" method="POST">
                        @csrf
                        <label for="">Category Name</label>
                        <input class="form-control w-25 mt-4" type="text" name="category" value="{{ $data->cat_title}}" required>
                        <input class="btn btn-outline-info mt-4" type="submit" value="Update Category">
                    </form>


                </div>
            </div>
        </div>
    </div>


    @include('admin.footer')
  </body>
</html>
