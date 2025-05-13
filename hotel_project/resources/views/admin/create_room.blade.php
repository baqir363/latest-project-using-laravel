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
                        <form action="{{ url('add_room')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="">Room Title</label>
                                <input type="text" name="title">
                            </div>
                            <div>
                                <label for="">Description</label>
                                <textarea name="description"></textarea>
                            </div>
                            <div>
                                <label for="">Price</label>
                                <input type="number" name="price">
                            </div>
                            <div>
                                <label for="">Room Type</label>
                                <select name="type">
                                    <option selected value="regular">Regular</option>
                                    <option value="premium">Premium</option>
                                    <option value="deluxe">Deluxe</option>
                                </select>
                            </div>
                            <div>
                                <label for="">Free Wifi</label>
                                <select name="wifi">
                                    <option selected value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div>
                                <label for="">Upload Image</label>
                                <input type="file" name="image">
                            </div>
                            <div>
                                <input type="submit" value="Add Room" class="btn btn-outline-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       @include('admin.footer')
  </body>
</html>
