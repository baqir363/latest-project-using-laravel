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

            <div>
                <h1>Add Books</h1>
                <form action="{{ url('store_book')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        <label for="">Book Title</label>
                        <input class="form-control w-25" type="text" name="book_title">
                    </div>
                    <div class="mt-4">
                        <label for="">Auther Name</label>
                        <input class="form-control w-25" type="text" name="auther_name">
                    </div>
                    <div class="mt-4">
                        <label for="">Price</label>
                        <input class="form-control w-25" type="text" name="price">
                    </div>
                    <div class="mt-4">
                        <label for="">Quantity</label>
                        <input class="form-control w-25" type="number" name="quantity">
                    </div>
                    <div class="mt-4">
                        <label for="">Description</label>
                        <input class="form-control w-25" type="text" name="description">
                    </div>
                    <div class="mt-4">
                        <label for="">Category</label>
                        <select name="category" required>
                            <option>Select Category</option>
                            @foreach ($data as $data)
                                <option value="{{ $data->id}}">{{ $data->cat_title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-4">
                        <label for="">Book Image</label>
                        <input class="form-control w-25" type="file" name="book_img">
                    </div>
                    <div class="mt-4">
                        <label for="">Auther Image</label>
                        <input class="form-control w-25" type="file" name="auther_img">
                    </div>
                    <div class="mt-4">
                        <input class="form-control w-25 btn btn-outline-primary" type="submit" value="Add Book">
                    </div>
                </form>
            </div>

          </div>
        </div>
        </div>

    @include('admin.footer')
  </body>
</html>
