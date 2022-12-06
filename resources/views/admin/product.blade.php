<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
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
  </head>
  <body>
      @include('admin.sidebar')

    


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

        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

         @csrf

        <div style="padding: 15px">
            <label>Product Title</label>
            <input style="color: black" type="text" name="title" placeholder="Give a product title" required="">
        </div>

        <div style="padding: 15px">
            <label>Price </label>
            <input style="color: black" type="number" name="price" placeholder="Give a product price" required="">
        </div>

        <div style="padding: 15px">
            <label>Description</label>
            <input style="color: black" type="text" name="des" placeholder="Give a product description" required="">
        </div>

        <div style="padding: 15px">
            <label>Quantity</label>
            <input style="color: black" type="text" name="quantity" placeholder="Give a product quantity" required="">
        </div>

        <div style="padding: 15px">
            
            <input style="color: black" type="file" name="file" placeholder="Insert a roduct photo" required="">
        </div>



        <div style="padding: 15px">
        <label>Product Title</label>
        <input class="btn btn-success" type="submit">
        </div>
    </form>

        </div>


        </div>
          
          <!-- partial -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>