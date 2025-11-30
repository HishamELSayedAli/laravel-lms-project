       
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
    <!--font-awesome-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--style -->
    <link rel="stylesheet" href="{{ asset('css/style_index.css') }}">
  </head>
  <body>
    <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg z-index  fixed bg-light"data-bs-theme="light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">LMS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#courses">Courses</a>
                </li>
                
                </ul>
                <ul class="navbar-nav me-end mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a href="https://web.facebook.com/?_rdc=1&_rdr" class="nav-link" target="_blank" rel="noopener noreferrer">
                      <i class="fa-brands fa-facebook facebook "></i>
                    </a>

                  </li>
                  <li class="nav-item">
                    <a href="https://twitter.com/" target="_blank" class="nav-link" rel="noopener noreferrer">
                      <i class="fa-brands fa-x-twitter"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.instagram.com/?hl=en" target="_blank" class="nav-link" rel="noopener noreferrer">
                      <i class="fa-brands fa-instagram instagram"></i>
                    </a>
                  </li>

                </ul>


            </div>
        </div>
    </div>
          </nav>

    
        


          <header>
            <div class="header">
                <div class="bg-img">
                  <div class="row">
                    <div class="col-6 w-50 pe-30 mt ">
                      <h2> Learn From Anywhere</h2>
                      <p>Technology is bringing a massive wave of evolution on learning things 
                        on different ways.                      
                      </p>
                      <button class="btn m-3 bg-red">Get Started</button>
                      <button class="btn bg-black1">View Courses</button>
                    </div>
                    <div class="col-6 ">
                      <img src="{{ asset('img/4.png') }}" class="w-100 h-100 pt mx-auto"  alt="">
                    </div>
                  </div>
                </div>
        </header>
        
        <section class="">
          <div class="countUp">
            <div class="countUpCo">
              <div class="numb counter" id="number">100</div>
              <p>Students learning

              </p>
            </div>
            <div class="countUpCo">
              <div class="numb counter" id="number1">100</div>
              <p>Graduates
              </p>
            </div>

            <div class="countUpCo">
              <div class="numb counter" id="number2">100</div>
              <p>Free courses
              </p>
            </div>

            <div class="countUpCo">
              <div class="numb counter" data-target="300000" id="">100</div>
              <p>Active courses
              </p>
            </div>
          </div>
        </section>
        <section class="container">
          <div class="events">
            <h1>Events:</h1>
          <div class="row">
            <div class="col-6">
              <div class="num">
                <h5 class="p-3">1</h5>
                <span class="p-3">Lorem ipsum dolor sit amet consectetur.</span>
              </div>

            </div>
            <div class="col-6">
              <div class="num">
                <h5 class="p-3 bg-warning">2</h5>
                <span class="p-3">Lorem ipsum dolor sit amet consectetur.</span>
              </div>

            </div>
            <div class="col-6">
              <div class="num ">
                <h5 class="p-3 bg-primary">3</h5>
                <span class="p-3">Lorem ipsum dolor sit amet consectetur.</span>
              </div>

            </div>
            <div class="col-6 ">
              <div class="num">
                <h5 class="p-3 bg-success ">4</h5>
                <span class="p-3">Lorem ipsum dolor sit amet consectetur.</span>
              </div>

            </div>
          </div>
          </div>

        </section>


        
        <h1 class="p-4">Courses:</h1>
        <section class="container my-4 d-flex flex-row course-flex  " id="courses">
                
                  
                    @foreach ($courses as $course)
                    <div class="course col-6 w-25 m-3  shadow text-center position-relative">
                      <div class="course-bg rounded w-100   ">
                        <div class="divSide position-absolute  top-0 start-0  "></div>
                        <div class="icon">
                         <img src="{{ voyager::image($course -> feature_image ) }}" width="100" height="" alt="IMG no uploaded"/>
                        </div>
                <div class="course-info p-4">
                  
                  <h3 class="course-name">{{$course -> titel}} </h3>
                  <p class="course-description">{{$course -> description}}</p>
                  <hr>
                  <h5 class="p-2">Prise:<span>{{$course -> price}}</span></h5>
                </div>
              </div>
            </div>
            @endforeach
          
                
            
            
             
           
            
             
        </section>

        <section class="container" id="about">
          <h1>About us:</h1>
          <section id="about-us" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ">
                        <p class="lead">Welcome to Your LMS, your one-stop destination for online learning! At Your LMS, we are passionate about providing high-quality education in a convenient and accessible format.</p>
                        <p>Our team of experienced educators and developers work tirelessly to create engaging and interactive courses that cater to a wide range of learners. Whether you're a student looking to enhance your skills or an organization seeking professional development opportunities for your employees, we have something for everyone.</p>
                        <p>With our user-friendly platform, you can access courses anytime, anywhere, and learn at your own pace. Our cutting-edge technology ensures a seamless learning experience, complete with interactive quizzes, multimedia content, and real-time progress tracking.</p>
                        <p>Join the thousands of learners who have already benefitted from our platform and take the first step towards achieving your learning goals today!</p>
                    </div>
                </div>
            </div>
        </section>
    
    
    <section class="container pe-3 my-4">
      <h1 class="my-4">Top Rating Instructors</h1>
      <div class="row">

        <div class="rate card col-3">
          <div class="img">
            <img src="{{ asset('img/f3 (1).jpg') }}"   alt="">
          </div>
          <div class="icons">
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star "></i>
          <i class="fa-solid fa-star "></i>
        </div>
        <h3>ANDREW WILLIAMS</h3>

      </div>
      <div class="rate card col-3">
        <div class="img">
          <img src="{{ asset('img/f3.jpg') }}"   alt="">
        </div>
        <div class="icons">
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star star "></i>
          <i class="fa-solid fa-star star"></i>
        </div>
        <h3>ANNA RICHARD</h3>
        
      </div>
      <div class="rate card col-3">
        <div class="img">
          <img src="{{ asset('img/f3 (3).jpg') }}"   alt="">
        </div>
        <div class="icons">
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star "></i>
          <i class="fa-solid fa-star "></i>
        </div>
        <h3>KRISTEN PALA</h3>

      </div>
      <div class="rate card col-3">
        <div class="img">
          <img src="{{ asset('img/f3 (2).jpg') }}"   alt="">
        </div>
        <div class="icons">
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-star "></i>
        </div>
        <h3>KRISZTINA SZER</h3>
        
      </div>
    </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
            <p class="m-0 text-center text-white">© 2024 Your LMS. All rights reserved.</p>
        </div>
    </footer>


    
















































    <script src="{{ asset('js/script_index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/countupjs/1.8.5/countUp.min.js'></script>
    <script src='https://cdn.rawgit.com/toddmotto/foreach/e82a4fed997593820ae65a09a35068b696bf10a0/dist/foreach.min.js'></script>
    <script src='https://cdn.rawgit.com/imakewebthings/waypoints/d21e1690bb5f407de4bf0bd9f08d967cf2027424/lib/noframework.waypoints.js'></script>
    <script src='https://cdn.rawgit.com/cferdinandi/smooth-scroll/aad0d74d4d97d9ca8e1323356abded9d5770a714/dist/js/smooth-scroll.min.js'></script>
    
  
  
  
  </body>
</html>