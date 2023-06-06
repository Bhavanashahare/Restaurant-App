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

        <form action="{{url('/uplodechef')}}"  method="post"  enctype="multipart/form-data">
            @csrf

            <div style="position: relative; top:60px;  right:-150px">

                <div>
                    <label>Name</label>
                    <input style="color:rgb(245, 245, 251);" type="text" class="form-control" name="name" placeholder="name">
                </div>
                <div>
                    <label>Speciality</label>
                    <input style="color:rgb(241, 241, 243);" type="text" name="speciality" placeholder="speciality" class="form-control">
                </div>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-light">save</button>

        </form> <!-- main-panel ends -->


        <div>
            <table bgcolor="black">
             <tr>
                 <th style="padding: 30px">Chefs Name</th>
                 <th style="padding: 30px">Speciality</th>
                 <th style="padding: 30px">Image </th>
                 <th style="padding: 30px">Action </th>



             </tr >
             @foreach ($data as $d)


             <tr align="center">
                 <td>{{$d->name}}</td>
                 <td>{{$d->speciality}}</td>
                 <td><img src="{{ asset('uploads/' .$d->image) }}" width="150px" alt=""></td>
                <td> <a href="{{ url('/updatechef',$d->id) }}" class="btn btn-primary-large">Update</a>
                    <a href="{{url('deletechef',$d->id)}}" class="btn btn-primary-large">Delete</a>

                </td>


             </tr>
             @endforeach
            </table>
         </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.adminscript')
    </div>
</body>

</html>
