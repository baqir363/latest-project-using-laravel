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
            <h1>Gallery</h1>
            <div class="row">
                @foreach ($gallery as $gallery)
                <div class="col-md-4">
                    <img src="/gallery/{{ $gallery->image}}" style="width: 300px; height: 200px; margin: 15px;" alt="">
                    <a onclick="return confirm('Are you sure to delete this?')" href="{{ url('delete_gallery',$gallery->id)}}" class="btn btn-outline-danger">Delete Image</a>
                </div>
                @endforeach
            </div>

            <form action="{{ url('upload_gallery')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">Upload Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <input type="submit" value="Add Image" class="btn btn-outline-primary">
                </div>
            </form>
          </div>
        </div>
      </div>
       @include('admin.footer')
  </body>
</html>
