<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>

   @include('admin.admincss')
<base href="/public">
  </head>
 <body>
    <div class="container-scroller">
@include('admin.navbar')


<div style="position:relative;top:60px;right:-150px">
    <table bgcolor="grey" border="3px">
        <tr>
            <th style="padding: 30px">name</th>
            <th style="padding: 30px">Email</th>
             <th style="padding: 30px">Action</th>

        </tr>
        @foreach ($data as $d)


        <tr align="center">
            <td >{{$d->name}}</td>
            <td>{{$d->email}}</td>

            @if ($d->usertype=="0")

            <td><a href="{{route('deleteuser',$d->id)}}">Delete</a></td>
            @else
            <td><a>Not Allowed</a></td>

            @endif

        </tr>
@endforeach
    </table>
</div>
</div>
<!-- main-panel ends -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')
  </body>
</html>

