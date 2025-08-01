<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
   <style>
.div_dg {
  margin-bottom: 1.5rem;
}

.div_dg label {
  color: #adb5bd;
  font-weight: 500;
  margin-bottom: 0.5rem;
  display: block;
}

.div_dg input[type="text"],
.div_dg input[type="file"],
.div_dg textarea {
  width: 100%;
  background-color: #2c2f33;
  border: 1px solid #3e444a;
  border-radius: 8px;
  color: #fff;
  padding: 12px 16px;
  font-size: 15px;
  transition: 0.3s all ease-in-out;
}

.div_dg input[type="text"]:focus,
.div_dg input[type="file"]:focus,
.div_dg textarea:focus {
  border-color: #5c7cfa;
  outline: none;
  box-shadow: 0 0 0 0.15rem rgba(92, 124, 250, 0.25);
}

.div_dg textarea {
  resize: vertical;
}

.div_dg input[type="submit"] {
  background: linear-gradient(135deg, #5c7cfa, #4dabf7);
  color: white;
  border: none;
  padding: 12px 20px;
  border-radius: 8px;
  font-weight: 600;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s ease-in-out;
}

.div_dg input[type="submit"]:hover {
  background: linear-gradient(135deg, #4c6ef5, #339af0);
  transform: translateY(-1px);
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
  <a id="languages" rel="nofollow" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle">
    <i class="fas fa-globe"></i>
    <span class="d-none d-sm-inline-block">English</span>
  </a>
  <div aria-labelledby="languages" class="dropdown-menu">
    <a rel="nofollow" href="#" class="dropdown-item">
      <i class="fas fa-flag mr-2"></i><span>German</span>
    </a>
    <a rel="nofollow" href="#" class="dropdown-item">
      <i class="fas fa-flag mr-2"></i><span>French</span>
    </a>
  </div>
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
            <h1 class="h5">{{Auth()->user()->name}}</h1>
            <p>{{Auth()->user()->usertype}}</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li ><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Food </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_food')}}">Add Food</a></li>
                    <li><a href="{{url('view_food')}}">View Food</a></li>
                    
                  </ul>
                </li>
               <li><a href="{{ url('orders') }}"> <i class="icon-logout"></i>Orders </a></li>
    <li><a href="{{ url('reservations') }}"> <i class="icon-logout"></i>Reservations </a></li>
          
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Update Food</h1>
            <form action="{{url('edit_food',$food->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=div_dg>
                    <label for="">Food Title</label>
                    <input type="text" name="title" value="{{$food->title}}" class="form-control">
                </div>
                 <div class=div_dg>
                    <label for="">Food Details</label>
                    
                    <textarea name="details"  cols="30" rows="10">{{$food->detail}}</textarea>
                </div>
                 <div class=div_dg>
                    <label for="">Food Price</label>
                    <input type="text" name="price" value="{{$food->price}}" class="form-control">
                </div>

                <div class="div_dg">
                    <label for="Image">Current Image</label>
                    <img width="150" src="food_img/{{$food->image}}" alt="Can't load">
                </div>

                  <div class="div_dg">
                    <label for="Image">Change Image</label>
                    <input type="file" name="image">
                </div>


                <div class="div_dg">
                    <input class="btn btn_warning" type="submit" value="Update Food">
                </div>

            </form>
       
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