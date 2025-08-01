<!DOCTYPE html>
<html>
  <head> 
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
         
              </div>
           
            <!-- Megamenu end     -->
            <!-- Languages dropdown    -->
           <div class="list-inline-item dropdown">
  <a id="languages" rel="nofollow" href="#"  >
  
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
    <li>
      <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Food </a>
      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
        <li><a href="{{ url('add_food') }}">Add Food</a></li>
        <li ><a href="{{ url('view_food') }}">View Food</a></li>
      </ul>
    </li>
    <li class="active"><a href="{{ url('orders') }}"> <i class="icon-logout"></i>Orders </a></li>
    <li><a href="{{ url('reservations') }}"> <i class="icon-logout"></i>Reservations </a></li>
  </ul>
</nav>
<!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>


             <div class="container-fluid">
            <div class="table-responsive">
              <table class="table table-bordered table-striped align-middle text-center">
                <thead class="thead-dark">
                  <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Food Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>ChangeStatus</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $data)
                  <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->price}}</td>
                    <td><img src="food_img/{{$data->image}}" alt="Can't load" class="img-fluid" style="max-width: 70px;"></td>
                    <td><span class="badge badge-success">{{$data->delivery_status}}</span></td>
                    <td>
                      <a class="btn btn-info" href="{{url('on_the_way',$data->id)}}">On the way</a> <br>
                      <a class="btn btn-warning" href="{{url('Delivered',$data->id)}}">Delivered</a><br>
                      <a class="btn btn-danger" href="{{url('cancel',$data->id)}}">Cancel</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        
      </div>
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