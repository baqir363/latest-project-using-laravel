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
                <h1>Update Books</h1>
                <form action="{{ url('update_book',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        <label for="">Book Title</label>
                        <input class="form-control w-25" type="text" name="book_title" value="{{ $data->title}}">
                    </div>
                    <div class="mt-4">
                        <label for="">Auther Name</label>
                        <input class="form-control w-25" type="text" name="auther_name" value="{{ $data->auther_name}}">
                    </div>
                    <div class="mt-4">
                        <label for="">Price</label>
                        <input class="form-control w-25" type="text" name="price" value="{{ $data->price}}">
                    </div>
                    <div class="mt-4">
                        <label for="">Quantity</label>
                        <input class="form-control w-25" type="number" name="quantity" value="{{ $data->quantity}}">
                    </div>
                    <div class="mt-4">
                        <label for="">Description</label>
                        <textarea name="description">{{ $data->description}}</textarea>
                    </div>
                    <div class="mt-4">
                        <label for="">Category</label>
                        <select name="category" required>
                            <option value="{{ $data->category_id}}">{{ $data->category->cat_title}}</option>
                            @foreach ($category as $category)
                                <option value="{{ $category->id}}">{{ $category->cat_title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-4">
                        <label for="">Current Book Image</label>
                        <img style="width: 80px; border-radius: 50%" src="/book/{{ $data->book_img}}" alt="">
                    </div>
                    <div class="mt-4">
                        <label for="">Change Book Image</label>
                        <input type="file" name="book_img" id="">
                    </div>
                    <div class="mt-4">
                        <label for="">Current Auther Image</label>
                        <img style="width: 80px; border-radius: 50%" src="/auther/{{ $data->auther_img}}" alt="">
                    </div>

                    <div class="mt-4">
                        <label for="">Change Auther Image</label>
                        <input type="file" name="auther_img" id="">
                    </div>
                    <div class="mt-4">
                        <input class="form-control w-25 btn btn-outline-info" type="submit" value="Update Book">
                    </div>
                </form>
            </div>

          </div>
        </div>
        </div>

    @include('admin.footer')
  </body>
</html>
