<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    <style>
        .title
        {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')
  </head>
  <body>
      @include('admin.sidebar')

        <!-- partial -->


        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">
    
            <h1 class="title">Add Product</h1>
    
            @if(session()->has('message'))
    
            <div class="alert alert-success">
    
            <button type="button" class="close" data-dismiss='alert'>x</button>
    
            {{session()->get('message')}}
    
            </div>
    
    
            @endif
    
            <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
    
             @csrf
    
            <div style="padding: 15px">
                <label>Product Title</label>
                <input style="color: black" type="text" name="title" value="{{$data->title}}" >
            </div>
    
            <div style="padding: 15px">
                <label>Price </label>
                <input style="color: black" type="number" name="price" value="{{$data->price}}" >
            <div style="padding: 15px">
                <label>Description</label>
                <input style="color: black" type="text" name="des" value="{{$data->description}}" >
            </div>
    
            <div style="padding: 15px">
                <label>Quantity</label>
                <input style="color: black" type="text" name="quantity"  value="{{$data->quantity}}">
            </div>

            <div style="padding: 15px">
                <label>Old Image</label>
                <img height="100" width="100" src="/productimage/{{$data->image}}">
            </div>
    
            <div style="padding: 15px">
                <label>Change The Image</label>
                <input style="color: wheat" type="file" name="file" placeholder="Insert a roduct photo" >
            </div>
    
    
    
            <div style="padding: 15px">
            <label>Product Title</label>
            <input class="btn btn-success" type="submit">
            </div>
        </form>
    
            </div>
    
    
            </div>



        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>