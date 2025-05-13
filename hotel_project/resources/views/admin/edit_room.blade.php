<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
   @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h1>Update Room</h1>
                    <div>
                        <form action="{{ url('update_room',$data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="">Room Title</label>
                                <input type="text" name="title" value="{{ $data->room_title}}">
                            </div>
                            <div>
                                <label for="">Description</label>
                                <textarea name="description">{{$data->description}}</textarea>
                            </div>
                            <div>
                                <label for="">Price</label>
                                <input type="number" name="price" value="{{ $data->price}}">
                            </div>
                            <div>
                                <label for="">Room Type</label>
                                <select name="type">
                                    <option selected value="{{ $data->room_type}}">{{ $data->room_type}}</option>
                                    <option value="regular">Regular</option>
                                    <option value="premium">Premium</option>
                                    <option value="deluxe">Deluxe</option>
                                </select>
                            </div>
                            <div>
                                <label for="">Free Wifi</label>
                                <select name="wifi">

                                    <option selected value="{{ $data->wifi}}">{{ $data->wifi}}</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div>
                                <label for="">Current Image</label>
                                <img src="room/{{ $data->image}}" width="80px" height="80px" alt="">
                            </div>
                            <div>
                                <label for="">Upload Image</label>
                                <input type="file" name="image">
                            </div>
                            <div>
                                <input type="submit" value="Update Room" class="btn btn-outline-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       @include('admin.footer')
  </body>
</html>
