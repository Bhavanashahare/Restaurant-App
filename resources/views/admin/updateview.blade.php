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

        <div style="position: relative; top:60px;  right:-150px">
            <form action="{{ url('/update',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Title</label>
                    <input style="color:blue;" type="text" class="form-control" name="title"
                        value="{{ $data->title }}">
                </div>
                <div>
                    <label>Price</label>
                    <input style="color:blue;" type="number" name="price" value="{{ $data->price }}"
                        class="form-control">
                </div>


                <div>
                    <label>description</label>
                    <input style="color:blue;" type="text" name="description" value="{{ $data->description }}"
                        class="form-control">
                </div>
                <div>
                    <label> old Image</label>
                    <img height="200" width="200" src="/uploads/{{ $data->image }}" alt="">
                </div>
                <div>
                    <label>New Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div>
                    <input type="submit" value="save">
                </div>
            </form>
            <div>


            </div>

            <!-- main-panel ends -->

            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.adminscript')
</body>

</html>
