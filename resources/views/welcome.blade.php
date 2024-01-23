
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iPhone</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href={{asset('css/styling.css')}} rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="{{asset('img/applelogo.svg')}}" class="headlogo" height="50px" width="50px">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center blockquote" id="navbarNavDropdown" style="height: 50px">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" >Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" >Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" >Pricing</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3  justify-content-end collapse navbar-collapse" id="navbarNavDropdown">
            <button type="button" class="btn btn-info btn-dark me-2 " id="LogIn">Login</button>
            <button type="button" class="btn btn-info me-2 btn-dark " id="SignIn" >Sign Up</button>
            <button type="button" class="btn btn-info me-2 btn-dark"><a href="/checkout">Purchase </a></button>
          </div>
        </div>
    </nav>

    <!--Video-->
    <video src="{{asset('img/vid.mp4')}}" autoplay muted loop class="video"></video>

    <!-- Product -->
    <div class="position-relative overflow-hidden p-3 m-0  text-center" id="product">
        <div class="col-md-5 p-lg-2 mx-auto my-5">
                <h1 class="display-4 fw-normal text-white fw-bolder">iPhone 16 Pro</h1>
                <p class="lead fw-normal text-white fw-bolder">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                <a class="btn btn-outline-secondary ">Coming soon</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <!--Carsousel -->

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner ">
          <div class="carousel-item active ">
            <img src="{{asset('img/carasoual.png')}}" class="slidesize">

            <div class="container">
              <div class="carousel-caption text-end" >
                <h1 class="fw-bolder text-dark">Iphone14</h1>
                <p class="fw-bolder text-dark">Book your phone</p>
                <p><a class="btn btn-lg btn-primary">Sign up today</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="{{asset('img/mac.jpg')}}" class="slidesize">

            <div class="container">
              <div class="carousel-caption">
                <h1 class="fw-bolder text-white">Another example headline.</h1>
                <p class="fw-bolder text-white">Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" class="btn">Learn more</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="{{asset('img/whiteiphone.jpg')}}" class="slidesize">

            <div class="container">
              <div class="carousel-caption text-end">
                <h1 class="fw-bolder text-dark"> good measure.</h1>
                <p class="fw-bolder text-dark">Somelder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary">Browse gallery</a></p>
              </div>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>

    <!-- Card Group -->

    <div class="d-flex justify-content-around row row-cols-sm-1  row-cols-md-2">

        <div class="card bg-transparent mb-3 border-dark" style="max-width: 25rem;">
            <div class="card-header bg-transparent font-weight-bold display-4" style="height: 225px" >Iphone 15 Pro & Iphone 15 Pro Max</div>
            <div class="card-body ">
                <img src="{{asset('img/iphone15pro.png')}}" class="cardphoto">
            </div>
            <div class="card-footer bg-transparent fw-bolder h5">From ₹21483.00/mo.Per Month with instant savings and No Cost EMI</div>
        </div>

        <div class="card bg-transparent mb-3 border-dark" style="max-width: 25rem;">
            <div class="card-header bg-transparent font-weight-bold display-4" style="height: 225px" >Iphone 15  & Iphone 15 Plus</div>
            <div class="card-body ">
                <img src="{{asset('img/iphone15.png')}}" class="cardphoto">
            </div>
            <div class="card-footer bg-transparent fw-bolder h5">From ₹124830.00/mo.Per Month with instant savings and No Cost EM</div>
        </div>

        <div class="card bg-transparent mb-3 border-dark" style="max-width: 25rem;">
            <div class="card-header bg-transparent font-weight-bold display-4" style="height: 225px" >Iphone 14  & Iphone 14 Plus</div>
            <div class="card-body">
                <img src="{{asset('img/iphone14plus.png')}}" class="cardphoto">
            </div>
            <div class="card-footer bg-transparent fw-bolder h5">From ₹10983.00/mo.Per Month with instant savings and No Cost EMI</div>
        </div>

    </div>

    <hr>
    <br>
    <hr>

    <!-- Specification -->

    <div class="card-group row row-cols-1 row-cols-md-2 row-cols-lg-3  g-4" >
        <div class="col">
            <div class="card p-2 " style="height:450px">
                <img src={{asset('img/camera.png')}} class="card-img-top rounded " style="height: 235.95px;" >
                    <div class="card-body">
                        <h5 class="card-title">Telephoto Camera</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-2" style="height:450px">
                <img src={{asset('img/display.webp')}} class="card-img-top rounded" alt="..." style="height: 235.95px;">
                <div class="card-body">
                    <h5 class="card-title">Tasto Azione</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-2" style="height:450px">
                <img src={{asset('img/len.jpeg')}} class="card-img-top rounded" alt="..." style="height: 235.95px;" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-2" style="height:450px">
                <img src={{asset('img/camera.png')}} class="card-img-top rounded " style="height: 235.95px;">
                <div class="card-body">
                    <h5 class="card-title">Telephoto Camera</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-2" style="height:450px">
                <img src={{asset('img/display.webp')}} class="card-img-top rounded" style="height: 235.95px;">
                <div class="card-body">
                    <h5 class="card-title">Tasto Azione</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-2" style="height:450px">
                <img src={{asset('img/len.jpeg')}} class="card-img-top rounded"  style="height: 235.95px;" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="container">
        <footer class="py-5">
          <div class="row">
            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
              </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
              </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
              </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
              <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>

          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2023 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-body-emphasis" href="#"><img src="{{asset('img/facebook.svg')}}" class="headlogo"></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><img src="{{asset('img/instagram-fill.svg')}}" class="headlogo"></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><img src="{{asset('img/twitch.svg')}}" class="headlogo"><a></li>
            </ul>
          </div>
        </footer>
    </div>

    <!-- Modal -->

    <div class="modal modal-sheet bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
              <form class="">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign up</button>
                <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                <hr class="my-4">
                <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                  <img src="{{asset('img/twitter-square.svg')}}" class="bi me-1" width="18" height="18">
                  Sign up with Twitter
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                    <img src="{{asset('img/facebook.svg')}}" class="bi me-1" width="18" height="18">
                  Sign up with Facebook
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                  <img src="{{asset('img/github-square.svg')}}" class="bi me-1" width="18" height="18">
                  Sign up with GitHub
                </button>
              </form>
            </div>
          </div>
        </div>
    </div>

    <!-- Modal -->

    <div class="modal modal-sheet bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalLogin">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-2">Log In</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
              <form class="">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Log In</button>

                <hr class="my-4">
                <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                  <img src="{{asset('img/twitter-square.svg')}}" class="bi me-1" width="18" height="18">
                  Continue with Twitter
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                    <img src="{{asset('img/facebook.svg')}}" class="bi me-1" width="18" height="18">
                  Continue with Facebook
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                  <img src="{{asset('img/github-square.svg')}}" class="bi me-1" width="18" height="18">
                  Continue with GitHub
                </button>
              </form>
            </div>
          </div>
        </div>
    </div>

    <!-- Javscript-->

    <script>
        $(document).ready(function(){
            $('#SignIn').click(function(){
                $('#modalSignin').modal('show');
            });


            $('#LogIn').click(function(){
                $('#modalLogin').modal('show');
            });

        });
    </script>





</body>
</html>
