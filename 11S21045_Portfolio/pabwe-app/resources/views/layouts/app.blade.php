<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport"/>
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"><!-- ini merupakan tautan yang menuju ke file css, yang mengimport gaya dari "AOS" yang merupakan perpustakaan javascript untuk membuat animasi saat pengguna menggulir halaman web. -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
      />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="{{ asset('assets/vendor/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <title>Cindy Feronica Simangunsong</title>
  </head>
  <body>


    <!-- Navbar Section -->
    <nav class="navbar navbar-expand">
      <div class="container">
        <a class="navbar-brand" data-aos="fade-right" data-aos-duration="80" href="#home">CindyF.</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#resume">Resume</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/karyasaya">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- End Navbar -->


    <!-- bagian home yang terdapat bagian background  -->
    <section id="home">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4" data-aos="fade-up"data-aos-duration="80">Hi it's Me <span style="font: weight 900; color: orange;">Cindy Feronica Simangunsong!</span></h1>
            <a class="tombolprt btn btn-warning" href="#aboutme" >See Next</a>
          </div>
        </div>
    </section>
    <!-- end jumbo -->
    <!-- container -->
   <!-- panel -->
    <div class="container">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="80">
        <div class="col-10 info-panel text-center"><h1>Welcome! lets ride</h1></div>
      </div>
      <!-- end panel -->


      <!-- SECTION PERKENALAN -->
        <div class="row contain">
          <div class="col-6">
            <section id="aboutme">
            <img src="{{asset('images/cindys.jpg')}}" alt="me" class="img-fluid me" data-aos="fade-right" data-aos-duration="80"  >
          </div>
          <div class="col-6 txtme">
            <h3 class="fade-left" data-aos-duration="80">About<span style="color: orange"><br>Cindy Feronica.</span></h3>
            <p  data-aos="fade-left" data-aos-duration="80">Hi! My Name Is <span style="color: orange;">Cindy Feronica Simangunsong</span> . <br> I Live In Porsea, Sumatera Utara, Indonesia! <br> May 12, 2023 I was born. Now i am . <br> 20 <span style="color:orange;"> Years Old. </span> I am a 5th semester Informatics undergraduate student at the <span style="color: orange;"> Del Technology Institute </span><br> I Like <span style="color: orange;">Web Design!</span> <br> My hope is that i will become a succesful web designer and receive work accordig to my criteria. <br> greeting from me 👩‍💻 <a href="https://www.instagram.com/cndysmg/?hl=en"><span style=color:orange;>@cndysmg</span></a></span></p>
          </div>
      </div>
    </div>
  </section>
      <!-- end PERKENALAN -->


        <!-- waves -->
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FEA500" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,250.7C384,277,480,267,576,261.3C672,256,768,256,864,250.7C960,245,1056,235,1152,245.3C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <!-- end waves -->


<!-- bagian resume Skills section -->
    <section id="resume">
      <div class="row align-middle">
        <div class="col-5 skill text-center align-middle">
        <br><br><br><br><br><br><h2 style="font-size: 100px; color: white; font-family: montserrat; font-weight: 900">Resume</h2>
          <a class="tombolprt btn btn-warning" href="https://drive.google.com/drive/folders/1V2VSqXaPwU917uNZCgEbph3WbT5rlEj8" >Download CV</a>
        </div>

        <div class="col-6 skills">
          <div class="">
          <ul id="skillbar">
            <li><span class="thebars progressdefault" style="width:100%;"data-aos="fade-left" data-aos-duration="80"></span>
              <h3>HTML5 90%</h3>
            </li>
            <li><span class="thebar progressblue"data-aos="fade-left" data-aos-duration="80" style="width:90%;"></span>
              <h3>Bootstrap 60%</h3>
            </li>
            <li><span class="thebar progressorange"data-aos="fade-left" data-aos-duration="80" style="width:80%;"></span>
              <h3>PHP 40%</h3>
            </li>
            <li><span class="thebar progressgreen" data-aos="fade-left" data-aos-duration="80"style="width:70%;"></span>
              <h3>JAVA 40%</h3>
            </li>
               <li><span class="thebar progressdefault" style="width: 100%" data-aos="fade-left" data-aos-duration="80"style="width:60%;"></span>
              <h3>CSS 90%</h3>
            </li>
          </ul>
          </div>
        </div>
      </div>
      </section>
        <!-- End of Resume Subpage -->




        <!--bagian about-->
    <section id="portofolio"><!-- about pertama -->
      <div class="row justify-content-center ">
        <div class="text-center">
        <br><br><br><br><br><h2 style="font-size: 100px; color: orange; font-family: montserrat; font-weight: 900">Portofolio</h2>
        <section class="portofolio" id="portofolio">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Add Portfolio
            </button>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Portfolio Saya</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body (form content) -->
                    <div class="modal-body">
                        <form id="myForm" action="/portfolio" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                                @error('judul')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                                <label for="judul">Isi</label>
                                <input type="text" class="form-control" id="link" name="link">
                                @error('link')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                                @error('gambar')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


          <h1 class="heading"><span>My </span>Portofolio</h1>
          <div class="box-container">

          @forelse ($portfolio as $item)
            <div class="box">
              <img src="{{asset('portfolioImage/'. $item->gambar)}}" alt="">
              <h3>{{$item->judul}}</h3>
              <div class="icons">
                <a href="{{$item->link}}" target="_blank" class="fas fa-link"></a>
                </div>
              </div>


              {{-- EDIT DAN DELETE --}}
              <form action="/portfolio/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
              </form>

          @empty
            <h1>Data Portfolio belum ada</h1>
          @endforelse

          </div>
        </section>
            <div class="row contain">
              <div class="col-6">
                <img src="{{asset('images/harapan.jpg')}}" alt="me" class="img-fluid mee img-responsive" data-aos="fade-right" data-aos-duration="80"  >
              </div>
              <div class="col-6 txtmee">
                <h4 class="xd text-left " data-aos="fade-left" data-aos-duration="80" >1️⃣.Del <span style="color: orange"> Product Design Competition </span></h4>
                <p  class="xd text-left justify-text" data-aos="fade-left" data-aos-duration="80" >
               <div class="justify-text">
                During my senior year of high school, my friends and I participated in the Del Product Design Competition. Our team consisted of Cindy Simanggunsong, Vinsensia Situmorang, and Ivan Manurung, and we represented SMA Negeri 1 Siantar Narumonda. In this competition, we were tasked with creating a product that had multiple practical functions for users while incorporating elements of Batak culture.The competition challenged us to demonstrate our creativity in repurposing used materials and transforming them into highly useful items. For our project, we designed a 2-in-1 bag. This bag could be folded into the shape of a pencil case, allowing users to store small items conveniently and making it easy to carry around.
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- about pertama end -->
      <div class="row justify-content-center ">
        <div class="text-center">
            <div class="row contain">
              <div class="col-6 txtmee">
              <h4 class="xd text-left" data-aos="fade-left" data-aos-duration="80">2️⃣.Batak <span style="color: orange"> video editing competition by DEL FM</span></h4>
              <p  class="xd text-left justify-text " data-aos="fade-left" data-aos-duration="80" >
                <div class="justify-text">
              The Batak video editing competition held by DEL FM is a competition that is participated in by various groups. <a class="nav-link " href="https://drive.google.com/drive/folders/1-0HwHfOLL2AI66oNQTvqMdPvUxizGyU6"> </a><span style="color:black"> </span></p>
            </div>
            </div>
              <div class="col-6 txtmee">
              <iframe src="https://drive.google.com/file/d/1vu4aQV7bl-6YU1rjakam4aYBLO9CNaQT/preview" width="640" height="480" allow="autoplay"></iframe>
              </div>
            </div>
        </div>
        </div>
      </div>
      <!--about ke 2 end-->
      <div class="row contain">
        <div class="col-6">
        <img src="{{asset('images/proyekkalku.jpg')}}" alt="me" class="img-fluid mee img-responsive" data-aos="fade-right" data-aos-duration="80"  >
        </div>
        <div class="col-6 txtmee">
        <h4 class="xd text-left " data-aos="fade-left" data-aos-duration="80" >3️⃣.Create <span style="color: orange"> Calculator Programs and Designs </span></h4>
        <p  class="xd text-left justify-text" data-aos="fade-left" data-aos-duration="80" >
          <div class="justify-text">
          Making a digital calculator is an object-based programming course. This calculator is used using NetBeans
        </div>
        </div>
      </div>
<!--about ke 3 end-->

<div class="row justify-content-center ">
        <div class="text-center">
            <div class="row contain">
              <div class="col-6 txtmee">
              <h4 class="xd text-left" data-aos="fade-left" data-aos-duration="80">4️⃣. Redesign <span style="color: orange"> the appearance of the IT Del library website</span></h4>
              <p  class="xd text-left justify-text " data-aos="fade-left" data-aos-duration="80" >
                <div class="justify-text">
                  Redesigned the initial appearance of the Del Institute of Technology library website. I think redesigning the appearance of the web is interesting, redesigning can improve the skills of every human being.
                  In my opinion, the following display is a more interesting display than the previous display.
                </div>
            </div>
              <div class="col-6 txtmee">
                <img src="{{asset('images/proyekperpus.jpg')}}" alt="me" class="img-fluid mee img-responsive" data-aos="fade-right" data-aos-duration="80" >
              </div>
            </div>
        </div>
        </div>
      </div>
      <!--about ke 4 end -->
      <div class="row contain">
        <div class="col-6">
        <img src="{{asset('images/proyekdel.jpg')}}" alt="me" class="img-fluid mee img-responsive" data-aos="fade-right" data-aos-duration="80"  >
        </div>
        <div class="col-6 txtmee">
        <h4 class="xd text-left " data-aos="fade-left" data-aos-duration="80" >5️⃣.Redesign <span style="color: orange"> the del website </span></h4>
        <p  class="xd text-left justify-text" data-aos="fade-left" data-aos-duration="80" >
          <div class="justify-text">
          Make the appearance of the del website more attractive. In my opinion, this display is a more attractive display, which makes website visitors more interested in exploring the following website.
        </div>
        </div>
      </div>
    </section>
    <!--end about-->


    <!--bagian sertifikat-->
<!-- MY TEAM SECTION -->
    <section id="team" class="team content-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12" data-aos="fade-down" data-aos-duration="80">
          <h2 style="font-size: 100px; color: orange; font-family: montserrat; font-weight: 900">Sertificate</h2>
          </div>
          <div class="row">
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="80">
              <div class="team-member">
                <figure>
                <img src="{{asset('images/ser1.jpg')}}" alt="" class="img-fluid">
                </figure>
              </div><!-- /.team-member-->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4" data-aos="fade-down" data-aos-duration="80">
              <div class="team-member">
                <figure>
                <img src="{{asset('images/ser2.png')}}" class="img-fluid">
                </figure>
              </div><!-- /.team-member-->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4" data-aos="fade-left" data-aos-duration="80">
              <div class="team-member">
                <figure>
                <img src="{{asset('images/ser3.png')}}" alt="" class="img-fluid">
                </figure>
              </div><!-- /.team-member-->
            </div><!-- /.col-md-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="80">
              <div class="team-member">
                <figure>
                <img src="{{asset('images/ser4.png')}}" alt="" class="img-fluid">
                </figure>
              </div><!-- /.team-member-->
            </div><!-- /.col-md-4 -->
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="80">
              <div class="team-member">
                <figure>
                <img src="{{asset('images/ser5.png')}}" alt="" class="img-fluid">
                </figure>
              </div><!-- /.team-member-->
            </div><!-- /.col-md-4 -->
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="80">
              <div class="team-member">
            <figure>
              <center><img src="{{asset('images/ser6.png')}}" alt="" class="img-fluid"></center>
              </figure>
          </div>
        </div>
      </div>
    </section>
<!--bagian sertifikat selesai-->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
  </body>
    <footer>
    <center><h5> Copyright &copy; ifs21045-itdel </h5></center>
    </footer>
    <a href="{{route("logout")}}" class="btn btn-primary">Logout</a>
</html>
