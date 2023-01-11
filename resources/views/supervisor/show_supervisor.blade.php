

<html>


    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/font-awesome.min.css') }}" />
    <script src=”.public_path(“js\jquery-3.3.1.slim.min.js”).”></script>
    <script src=”.public_path(“js\bootstrap.bundle.min.js”).”></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>


    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
        </script>

<head>


<style>
body {

  background: #dd5e89;
  background: -webkit-linear-gradient(to left, #5e7cdd, #6a90bb);
  background: linear-gradient(to left, #88afd4, #304874);
  min-height: 100vh;
}

.content {
  margin: auto;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  font-size: 150%;
  width: 90%;

}

td, th {
  border: 1px solid #021827;
  text-align: left;

  padding: 8px;

}
td{
  color: Azure;
}
th{
  color: rgb(29, 26, 26);
}
tr:nth-child(even) {
  background-color: #5071a1;
}
h2 {

  color: rgb(145, 142, 142);
}
.login-form input[type="button"] {
  height:450px;
  width:150px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;


@media screen and (max-width: 992px) {
  table {
    width:90%;
  }
}
.button_example {
  position:absolute;
  top: 10px;
  right:0;
}

</style>


</head>
<body>
    <script>
        function myFunction() {
          alert("Your request has been sent!");
        }
        </script>

    @csrf
    {{ csrf_field() }}
    <nav class="navbar navbar-light bg-light" style=" background: -webkit-linear-gradient(to left, #5e7cdd,#F8F8FF);
    background: linear-gradient(to left, #F8F8FF, LightBlue);">

            <h2>Supervisor Home</h2>

        <button class="btn btn-sm btn-outline-secondary"style="font-size: 150%" type="button">Log Out</button>
      </nav>

<table style="margin-top:80px;" class="content">

  <tr>
    <th> </th>
    <th>Bus number</th>
    <th>Bus line</th>
    <th>Driver name</th>
    <th>seats number</th>
    <th>filled seats</th>
  </tr>
   @foreach ( $data as $BB)
   <tr>
    <td> <a   class="btn btn-primary" onclick="myFunction()" role="button"> Request </a>
        <td>{{$BB->bus_num}}</td>
    <td>{{$BB->line_name}}</td>
    <td>{{$BB->driver_name}}</td>
    <td>{{$BB->seats_num}}</td>

 <td>{{$BB->filled_seats}} </td>
</tr>
     @endforeach


</table>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>


</body>
</html>
