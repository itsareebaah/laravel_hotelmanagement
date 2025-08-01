<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FoodHut Cart Page">
    <meta name="author" content="Devcrud">
    <title>FoodHut | Cart</title>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/foodhut.css">

    <style>
        .brand-img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }
        .brand-txt {
            font-size: 22px;
            font-weight: 600;
            color: #fff;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
            </ul>

            <!-- Brand -->
            <a class="navbar-brand d-flex align-items-center justify-content-center mx-auto" href="#">
                <img src="assets/imgs/logo.svg" class="brand-img mr-2" alt="Logo">
                <span class="brand-txt">Food Hut</span>
            </a>

            <!-- Right links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="form-inline ml-2">
                        @csrf
                        <input class="btn btn-sm btn-primary" type="submit" value="Logout">
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Cart Table Section -->
    <br><br><br>
    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4 text-white bg-dark p-3 rounded">My Cart</h2>

        <div class="table-responsive">
            <table class="table table-dark table-bordered table-hover text-center align-middle">
                <thead class="thead-light">
                    <tr>
                        <th>Food Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total_price = 0; @endphp
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <img src="{{ asset('food_img/' . $item->image) }}" class="img-thumbnail" style="width:60px; height:60px;" alt="Image">
                        </td>
                        <td>
                            <a href="{{ url('remove_cart', $item->id) }}" onclick="return confirm('Do you want to remove the item?')" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i> Remove
                            </a>
                        </td>
                    </tr>
                    @php $total_price += $item->price; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Total Price -->
        <div class="text-right mt-3">
            <h4>Total Price: <span class="text-warning">${{ $total_price }}</span></h4>
        </div>

        <!-- Checkout Button -->
       
    </div>
<!-- Checkout Form Section -->
<div class="container my-5">
    <h3 class="text-center mb-4">Delivery Information</h3>
    <form action="{{url('confirm_order')}}" method="POST" class="p-4 bg-light rounded shadow-sm">
        @csrf <!-- Laravel CSRF token if this is a real form -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="John Doe" value="{{Auth()->user()->name}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" value="{{Auth()->user()->email}}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="03XXXXXXXXX" value="{{Auth()->user()->phone}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="address">Delivery Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Street, City, ZIP" value="{{Auth()->user()->address}}" required>
            </div>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-success px-4">
                <i class="fas fa-check-circle"></i> Order Now
            </button>
        </div>
    </form>
</div>

</div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
