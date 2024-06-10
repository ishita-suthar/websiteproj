<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    <div class="container-fluid">
    
        <div class="col-md-12 ">
        
            <div style="background-image:url('pic/p1.jpg');height:700px;background-size:cover">
            <nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-5" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li>
      </ul>
      <a class="navbar-brand " href="#"><img src="pic/p2.svg" style="margin-left:300%"></a>
    </div>
    <form action="ritu" method="get">
      <input type="search" name="sea" placeholder="search">
      <button>go</button>
    </form>
   
    <i class="fa fa-user" aria-hidden="true" style="color:white;font-size:30px"></i>
    <i class="fa fa-shopping-bag ms-5" aria-hidden="true" style="color:white;font-size:30px"></i>
  </div>
 
</nav>
<br>
<div class="border-top"></div>

<br><br><br>
<h5 class="text-light m-5">
<br><br><br>
WELCOME TO FLAWLESS STORE</h5>
<br><br>
<h1 style="color:white;font-size:60px" class="ms-5">The Best Skin <br>Cleanser for You</h1>
<br><br><br><br>
<button class="btn btn-outline-light ms-5">SHOP NOW</button>
        
        </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class=" col-md-12 py-5">
            <div class="row">
                <div class=" col-md-6">
                    <h1 class="ms-5">New Arrivals</h1>
                </div>
                <div class=" col-md-6">
                    <button class=" btn btn-outline-danger" style="margin-left:60%">SHOP NOW</button>
                </div>
            </div>
        </div>
    </div>
<!-- sql -->
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="container">
                <div class="col-md-12 py-5">
                    <div class="row">
                    @if($sql->isnotempty())
                    @foreach($sql4 as $row)
                        <div class="col-md-3 border">
                          <a href="shop/{{ $row->id}}">
<img src="img/{{ $row->image }}"height="400px">
<p>{{$row->name}}</p>
<p>{{$row->category}}</p>
<h6>Hybrid Cleansing Balm</h6>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<p>{{ $row->price }}</p>
</a>
                        </div>
                        
                        @endforeach

                        @else 
            <h1>no product found</h1>
@endif
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- sqlend -->

<div class="container-fluid">
  <div class="col-md-12 py-5 bg-light">
    <div class="row">
      <div class="col-md-6">
        <img src="pic/skin-cleanser-template-face-lotion-img.jpg"height="600px"width="90%" class="ms-5">
      </div>
      <div class="col-md-6">
<br><br><br><br>
      <div class="border-top col-md-2"></div>
      <br>
      <h1>Beauty Flawless Skin</h1>
      <br>
      <p>Enim lectus mauris faucibus turpis convallis ipsum odio lorem dignissim id odio sed enim nullam venenatis erat in cursus tortor tristique aliquam nulla quis.</p>
      <br>
      <p>Aliquam scelerisque scelerisque ac laoreet laoreet faucibus vestibulum fringilla ut aliquet dictumst dignissim id eget cras nulla venenatis dictum tristique faucibus lectus egestas aenean placerat dolor dolor phaselluseros vestibulum velit turpis ornare facilisis ante ornare.</p>
<br><br><br>
<button class="btn btn-outline-danger">READ MORE</button>

      </div>
    </div>
    <hr>
  </div>
  
  <div class="container-fluid">
    <div class="col-md-12 bg-light ">
      <div class="row">
        <div class="col-md-4">
        <center><div class="col-md-3 mt-5" style="height:70px;border-radius:100%;background:white"><i class="fa fa-hand-paper-o text-danger mt-4" aria-hidden="true" style="font-size:30px"></i></div>
        <h2>All Skin Types</h2>
        <p>Morbi nullam odio lectus vitae lorem in non tortor aliquet eget faucibus dui dolor.</p>

        </center>
        </div>
        <div class="col-md-4">
        <center><div class="col-md-3 mt-5" style="height:70px;border-radius:100%;background:white"><i class="fa fa-pied-piper mt-4 text-danger" aria-hidden="true" style="font-size:30px"></i></div>
        <h2>Pure Organic</h2>
        <p>Morbi nullam odio lectus vitae lorem in non tortor aliquet eget faucibus dui dolor.</p>

        </center>
        </div>
        <div class="col-md-4">
        <center><div class="col-md-3 mt-5" style="height:70px;border-radius:100%;background:white"><i class="fa fa-heart mt-4 text-danger" aria-hidden="true" style="font-size:30px"></i></div>
        <h2>Natural Care</h2>
        <p>Morbi nullam odio lectus vitae lorem in non tortor aliquet eget faucibus dui dolor.</p>

        </center>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=" container-fluid">
  <div class=" col-md-12 bg-light py-5">
    <div style="background-image:url('pic/skin-cleanser-template-video-img-thumb.jpg');background-position:center;height:700px;background-size:cover">
  <center><h1 style=" color:white ;padding-top:270px">Flawless Skincare Regimen</h1>
  <br><br>
<button class="btn btn-outline-light">
WATCH THE VIDEOS<i class="fa fa-youtube-play ms-2" aria-hidden="true"></i>
</button>
</center></div>
  </div>
</div>

<div class=" container-fluid">
  <div class=" col-md-12 bg-light py-5">
    <center><h1>Most Loved by the Customers</h1>
  
  <p>Mauris lacus nunc pellentesque eget bibendum vitae scelerisque</p></center>
  </div>
</div>

<div class="container-fluid">
        <div class="col-md-12 py-5">
            <div class="container">
                <div class="col-md-12 py-5">
                    <div class="row">

                    @foreach($sql as $row)
                        <div class="col-md-3 border">
                        <a href="shop/{{ $row->id}}">
<img src="img/{{ $row->image }}"height="400px">
<p>{{$row->name}}</p>
<p>{{$row->category}}</p>
<h6>Hybrid Cleansing Balm</h6>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<p>{{ $row->price }}</p>
</a>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
        <div class="col-md-12 py-5">
            <div class="container">
                <div class="col-md-12 py-5">
                    <div class="row">

                    @foreach($sql1 as $row)
                        <div class="col-md-3 border">
                        <a href="shop/{{ $row->id}}">
<img src="img/{{ $row->image }}"height="400px">
<p>{{$row->name}}</p>
<p>{{$row->category}}</p>
<h6>Hybrid Cleansing Balm</h6>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<p>{{ $row->price }}</p>
</a>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="col-md-12 py-5">
            <div class="container">
                <div class="col-md-12 py-5">
                    <div class="row">

                    @foreach($sql2 as $row)
                        <div class="col-md-3 border">
                        <a href="shop/{{ $row->id}}">
<img src="img/{{ $row->image }}"height="400px">
<p>{{$row->name}}</p>
<p>{{$row->category}}</p>
<h6>Hybrid Cleansing Balm</h6>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<p>{{ $row->price }}</p>
</a>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-12 py-5">
            <div class="container">
                <div class="col-md-12 py-5">
                    <div class="row">

                    @foreach($sql3 as $row)
                        <div class="col-md-3 border">
                        <a href="shop/{{ $row->id}}">
<img src="img/{{ $row->image }}"height="400px">
<p>{{$row->name}}</p>
<p>{{$row->category}}</p>
<h6>Hybrid Cleansing Balm</h6>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<p>{{ $row->price }}</p>
</a>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid">

<div class="col-md-12 bg-light py-5">
  <center><h1>What Our Customers Say</h1></center>
  <br><br><br>
  <div class="row">
    <div class=" col-md-4">
      <center>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <br>
      <h5>Sed odio donec curabitur auctor amet tincidunt non odio enim felis tincidunt amet morbi egestas hendrerit.</h5>
      <div><img src="pic/skin-cleanser-template-testimonials-avatar-img-2.jpg"height="60px"width="30%"
        style="border-radius:100%" alt=""></div>
      </center>
    </div>
    <div class=" col-md-4">
    <center>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <br>
      <h5>Sed odio donec curabitur auctor amet tincidunt non odio enim felis tincidunt amet morbi egestas hendrerit.</h5>
      <div><img src="pic/skin-cleanser-template-testimonial-avatar-img.jpg"height="60px"width="30%"
        style="border-radius:100%" alt=""></div>
      </center>
    </div>
    <div class=" col-md-4">
    <center>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <i class="fa fa-star" aria-hidden="true" style=" color:pink"></i>
      <br>
      <h5>Sed odio donec curabitur auctor amet tincidunt non odio enim felis tincidunt amet morbi egestas hendrerit.</h5>
      <div><img src="pic/skin-cleanser-template-testimonials-avatar-img-1.jpg"height="60px"width="30%"
        style="border-radius:100%" alt=""></div>
      </center>
    </div>
  </div>
</div>
    </div>

    <div class=" container">
      <div class="col-md-12 py-5">
            
        <center><h3>Follow Us
@flawlesscleanser</h3>
</center>
<br><br><br>
        <div class="row">
          <div class=" col-md-4">
            <img src="pic/skin-cleanser-template-gallery-img-6.jpg"height="250px"width="100%" alt="">
          </div>
          <div class=" col-md-4">
          <img src="pic/skin-cleanser-template-gallery-img-5.jpg"height="250px"width="100%" alt="">

          </div>
          <div class=" col-md-4">
          <img src="pic/skin-cleanser-template-gallery-img-4.jpg"height="250px"width="100%" alt="">

          </div>
        </div>
        <br><br>

        <div class="row">
          <div class=" col-md-4">
            <img src="pic/skin-cleanser-template-gallery-img-3.jpg"height="250px"width="100%" alt="">
          </div>
          <div class=" col-md-4">
          <img src="pic/skin-cleanser-template-gallery-img-2.jpg"height="250px"width="100%" alt="">

          </div>
          <div class=" col-md-4">
          <img src="pic/skin-cleanser-template-gallery-img-1.jpg"height="250px"width="100%" alt="">

          </div>
        </div>
      </div>
    </div>


    <div class=" container-fluid">
      <div class="col-md-12 bg-light py-5">
        <div class="row">
          <div class=" col-md-3">
<h5>FREE DELIVERY</h5>
<p>Nullam pharetra egestas mollis</p>
          </div>
          <div class=" col-md-3">
<h5>EASY PAYMENT</h5>
<p>Urna est enim pellentesque</p>
          </div>
          <div class=" col-md-3">
<h5>TRACK ORDER</h5>
<p>Mauris lacus nunc pellentesque</p>
          </div>
          <div class=" col-md-3">
<h5>HAVE QUESTIONS?</h5>
<p>Vulputate enim quis sollicitudin</p>
          </div>
          <hr>
        </div>
      </div>
    </div>
</body>
</html>