<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
<base href="/public">
   @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">

@include('admin.navbar')
<form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Chef Name</label>
        <input style="color:rgb(245, 245, 251);" type="text" class="form-control" name="name" placeholder="name" value={{$data->name}}>
    </div>

    <div>
        <label>Speciality</label>
        <input style="color:rgb(245, 245, 251);" type="text" class="form-control" name="speciality" placeholder="speciality" value={{$data->speciality}}>
    </div>
    <div>
        <label>old image</label>
        <img height="200" width="200" src="/uploads/{{ $data->image }}" alt="">    </div>
    <div>
        <label>New image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div>
        <input style="color:rgb(245, 245, 251);" type="submit" value="Update chef">
    </div>
</form>

</div>

        <!-- main-panel ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')

  </body>
</html>
