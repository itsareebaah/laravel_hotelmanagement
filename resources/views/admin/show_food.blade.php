<!DOCTYPE html>
<html>
  <head> 
   <style>
/* Fancy dark-themed responsive table */
table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  margin-top: 2rem;
  background-color: #2c2f33;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

table thead {
  background: linear-gradient(135deg, #5c7cfa, #4dabf7);
  color: #fff;
  text-align: left;
}

table th,
table td {
  padding: 16px 20px;
  font-size: 15px;
  color: #dee2e6;
  border-bottom: 1px solid #3e444a;
}

table tbody tr:nth-child(even) {
  background-color: #343a40;
}

table tbody tr:hover {
  background-color: #495057;
  cursor: pointer;
  transition: 0.2s ease-in-out;
}

table td img {
  max-height: 60px;
  border-radius: 8px;
}

table th:first-child,
table td:first-child {
  border-top-left-radius: 10px;
}

table th:last-child,
table td:last-child {
  border-top-right-radius: 10px;
}

/* Responsive behavior */
@media (max-width: 768px) {
  table,
  thead,
  tbody,
  th,
  td,
  tr {
    display: block;
  }

  table thead {
    display: none;
  }

  table tr {
    margin-bottom: 1rem;
    border: 1px solid #495057;
    border-radius: 10px;
    padding: 10px;
  }

  table td {
    position: relative;
    padding-left: 50%;
    text-align: left;
  }

  table td::before {
    content: attr(data-label);
    position: absolute;
    left: 16px;
    top: 16px;
    font-weight: bold;
    color: #adb5bd;
  }
}

</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="admin/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
         
            <!-- Megamenu end     -->
            <!-- Languages dropdown    -->
           <div class="list-inline-item dropdown">
  <a id="languages" rel="nofollow" href="#">
    <i class="fas fa-globe"></i>
    <span class="d-none d-sm-inline-block">English</span>
  </a>
  
</div>
            <!-- Log out               -->
            <div class="list-inline-item logout">                  
                <form method="POST" action="{{route('logout')}}">
               
            @csrf
           <input class="btn btn-danger" type="Submit" value="Logout">
            </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
     <!-- Sidebar Navigation-->
<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h5">{{ optional(Auth()->user())->name ?? 'Guest' }}</h1>
      <p>{{ optional(Auth()->user())->usertype ?? '' }}</p>
    </div>
  </div>
  <!-- Sidebar Navigation Menus-->
  <span class="heading">Main</span>
  <ul class="list-unstyled">
    <li ><a href="{{ url('home') }}"> <i class="icon-home"></i>Home </a></li>
    <li  class="active">
      <a  href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Food </a>
      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
        <li><a href="{{ url('add_food') }}">Add Food</a></li>
        <li><a href="{{ url('view_food') }}">View Food</a></li>
      </ul>
    </li>
    <li><a href="{{ url('orders') }}"> <i class="icon-logout"></i>Orders </a></li>
    <li><a href="{{ url('reservations') }}"> <i class="icon-logout"></i>Reservations </a></li>
  </ul>
</nav>
<!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1>All Foods</h1>
          <div>


          <table>
  <thead>
    <tr>
      <th>Food Title</th>
      <th>Details</th>
      <th>Price</th>
      <th>Image</th>
      <th>Delete</th>
      <th>Update</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $data )
        
   
    <tr>
      <td data-label="Food Title" >{{$data->title}}</td>
      <td data-label="Details">{{$data->detail}}</td>
      <td data-label="Price">{{$data->price}}</td>
      <td data-label="Image">
        <img  src="food_img/{{$data->image}}" alt="">
      </td>

      <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_food', $data->id)}}">Delete</a></td>
      <td><a class="btn btn-warning" href="{{url('update_food',$data->id)}}">Update</a></td>
    </tr>
   @endforeach
  </tbody>
</table>





    </div>
    <!-- JavaScript files-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin/js/charts-home.js"></script>
    <script src="admin/js/front.js"></script>
  </body>
</html>