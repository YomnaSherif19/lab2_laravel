<html>
    <head>
<title>{{config('app.name')}} - @yield('title')</title>
<style>
    .myoption{
        background-color:blue;
    }
</style>
    </head>
    <body>
        @section('navbar')
         @include('includes.navbar')
         <!-- <div style="dispaly:flex;">
        <h2>Laravel<h2>
            <a href="\users.index">Home</a>
            <select name="Users" id="Users">
                <option value="List"><a href="\users.create">List</a></option>
                <option value="New User"><a href="#">New User</a></option>
</select>
</div> -->
@show
<div class>
    @yield('content')
</div>


   </body>
    <html>