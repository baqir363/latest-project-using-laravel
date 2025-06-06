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

            <center>
                <h1 style="font-size: 30px; font-weight: bold;">Mail Send to {{ $data->name }}</h1>

                <form action="{{ url('mail',$data->id)}}" method="POST">
                            @csrf
                            <div class="mt-4">
                                <label for="">Greeting</label>
                                <input type="text" name="greeting">
                            </div>
                            <div class="mt-4">
                                <label for="">Mail Body</label>
                                <textarea name="body"></textarea>
                            </div>
                            <div class="mt-4">
                                <label for="">Action Text</label>
                                <input type="text" name="action_text">
                            </div>
                            <div class="mt-4">
                                <label for="">Action Url</label>
                                <input type="text" name="action_url">
                            </div>
                            <div class="mt-4">
                                <label for="">End Line</label>
                                <input type="text" name="endline">
                            </div>

                            <div class="mt-4">
                                <input type="submit" value="Send Mail" class="btn btn-outline-primary">
                            </div>
                        </form>
            </center>
          </div>
        </div>
      </div>
       @include('admin.footer')
  </body>
</html>
