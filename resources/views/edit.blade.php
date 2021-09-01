<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    body {
  font-size: 170%;
}
   
    .navbar {
      margin-bottom: 1px;
      border-radius: 1px;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #blue;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #pink;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
.h1{
  text-align: center
}
.h2{
  text-decoration-color: antiquewhite;
}
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

<div class="collapse navbar-collapse" id="myNavbar">
    
  <ul class="nav navbar-nav">
    <li class="active"><a href="/home">Home</a></li>
    <li><a href="/showmessage">messages</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-centre">
    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
  </ul>
    
</div>
</div>
</nav>






<center><h2> Room Create </h2>
    @foreach ($room as $room)
        
    <form method="post" action="/updateroom" enctype="multipart/form-data">
        @csrf
        <!-- @csrf ko kam chai  yo form ko authenticated token laravel lai dine taki unverified user le yo form submit garna napaoos --> 
        Roomname:
        <input type="text" name="roomname" placeholder="{{$room->roomname}}"><br>
        Capacity
        <input type="number" name="capacity" placeholder="{{$room->capacity}}"><br>
        Price
        <input type="number" name="price" placeholder="{{$room->price}}"> 
        <input type="hidden" name="room_id" value="{{$room->id}}"> 

        <br>
        Image of room
        <input type="file" name="image">
        
        <button type="submit">submit</button>
    </form></center>
    @endforeach  
   <br> 
    <br>