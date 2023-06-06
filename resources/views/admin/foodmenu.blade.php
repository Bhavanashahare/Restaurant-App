<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">

@include('admin.navbar')

<div style="position: relative; top:60px;  right:-150px">
<form action="{{url('/uplodefood')}}"  method="post"  enctype="multipart/form-data">
    @csrf
    <div >
        <label>Title</label>
        <input style="color:blue;" type="text" class="form-control" name="title" placeholder="title">
    </div>
    <div>
        <label>Price</label>
        <input style="color:blue;" type="number" name="price" placeholder="price" class="form-control">
    </div>
    <div>
        <label>Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div>
        <label>description</label>
        <input style="color:blue;"   type="text" name="description" placeholder="description" class="form-control">
    </div>
    <div>
        <input type="submit" value="save">
    </div>
</form><br><br>
<div>
   <table bgcolor="black">
    <tr>
        <th style="padding: 30px">Food Name</th>
        <th style="padding: 30px">Price</th>
        <th style="padding: 30px"> Description</th>
        <th style="padding: 30px">Image </th>
        <th style="padding: 30px">Action </th>



    </tr >
    @foreach ($data as $d)


    <tr align="center">
        <td>{{$d->title}}</td>
        <td>{{$d->price}}</td>
        <td>{{$d->description}}</td>
        <td><img src="{{ asset('uploads/' .$d->image) }}" width="150px" alt=""></td>
        <td><a href="{{url('deletemenu',$d->id)}}" class="btn btn-primary-large">Delete</a>
        <a href="{{url('updateview',$d->id)}}" class="btn btn-primary-large">Update</a></td>


    </tr>
    @endforeach
   </table>
</div>

</div>
    </div>


    @include('admin.adminscript')
  </body>
</html>
