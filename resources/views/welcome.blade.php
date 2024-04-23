<!-- resources/views/welcome.blade.php -->

@extends('layouts.app_admin')

<html>
@section('content')
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;600;700&display=swap">
    </head>
    <style>
        .non-clickable-button-1{
            display: inline-block;
            padding: 10px 20px;
            background-color: #0D0C22;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif; /* Ganti dengan nama font yang Anda inginkan */
            cursor: default; /* Optional: Change cursor style to indicate non-clickable */
            pointer-events: none; /* Make the element non-clickable */
            border-radius: 30px;
        }
        .non-clickable-button-3{
            display: inline-block;
            padding: 10px 20px;
            background-color: #0D0C22;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif; /* Ganti dengan nama font yang Anda inginkan */
            cursor: default; /* Optional: Change cursor style to indicate non-clickable */
            pointer-events: none; /* Make the element non-clickable */
            border-radius: 30px;
        }

        .non-clickable-button-2 {
    display: inline-block;
    padding: 10px 20px;
    background-color: #05CCC0;
    color: #333;
    text-decoration: none;
    font-family: 'Source Sans Pro', sans-serif;
    cursor: default;
    pointer-events: none;
    border-radius: 30px;
    font-size: 8px; /* Sesuaikan ukuran font sesuai kebutuhan */
    font-weight: bold; /* Membuat teks menjadi bold */
    text-align: left; /* Rata kiri */
}

.non-clickable-button-card{
            display: inline-block;
            padding: 8px;
            width:390px;
            margin-top:15px;
            font-weight: bold;
            background-color: #05CCC0;
            color: #333;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif; /* Ganti dengan nama font yang Anda inginkan */
            cursor: default; /* Optional: Change cursor style to indicate non-clickable */
            pointer-events: none; /* Make the element non-clickable */
            border-radius: 20px;
        }

        .non-clickable-button{
            display: inline-block;
            padding: 10px 20px;
            background-color: #05CCC0;
            color: #333;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif; /* Ganti dengan nama font yang Anda inginkan */
            cursor: default; /* Optional: Change cursor style to indicate non-clickable */
            pointer-events: none; /* Make the element non-clickable */
            border-radius: 30px;
        }

        @media (min-width: 768px) {
            .h-md-100 { height: 90vh; }
        }
        .btn-round { border-radius: 30px; }
        .text-cyan { color: #35bdff; }



        .card {
    border: none; /* Menghapus border card */
    background-color: #F8F7F4; /* Mengubah warna latar belakang card */
    border-radius: 30px;

}

        /*quote*/
        * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin-left:105px;
  margin-right:105px;

}

/* Slides */
.mySlides {
  display: none;
  padding: 50px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  color:#05CCC0;
  width: auto;
  margin-top: -30px;
  padding: 8px;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  color: #333;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    margin-left:105px;
  margin-right:105px;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 10px;
  width: 10px;
  margin: 0 2px;
  background-color:#05ccbf27;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #05CCC0;
}

/* Add an italic font style to all quotes */
q {font-style: italic;
    font-family: 'Source Sans Pro', sans-serif;
color: #333}

/* Add a blue color to the author */
.author {color: #000000; margin-top: 16px;}

    </style>
<body style=" font-family: 'Source Sans Pro', sans-serif; background-color: #FAFAFE;">
    @section('content')
    <div class="container mx-auto mt-8">
        <div class="text-center">
            <a href="#" style="font-size:12px; margin-top:80px; " class="non-clickable-button">We provide classic to modern designs</a>
            <h1 class="text-4xl font-source-serif-4" style="margin-top:32px;">Find the best design,</h1>
            <h1 class="text-4xl font-source-serif-4">edit it as you like</h1>
            <p class="text-gray-500 mt-4">Connect with a community of millions of top-rated designers & agencies around the world.</p>
            <a href="#" style="font-size:12px; margin-top:32px; " class="non-clickable-button-1">Start hiring today</a>
            <br>
            <img src="{{ asset('images/brand.png')}}" alt="Brand image" style="margin-top:64px; width: 1000px;">

            <h1 class=" font-source-serif-4" style="font-size:32px;  margin-top:120px;">what we provide at April'Studio</h1>

            <div class="d-md-flex h-md-100 align-items-center">

                <!-- First Half -->
                <div class="col-md-6 p-0 bg-indigo h-md-100">
                    <div class="d-md-flex flex-column h-100">
                        <img src="{{ asset('images/head_cont1.png')}}" alt="Brand image" style="margin-top:64px; margin-left:120px; width: 70px;">
                        <p class="text-4xl font-source-serif-4" style="margin-left:120px; margin-top:16px; text-align: left;">
                            UI (User Interface) design is about the appearance of a digital product and how users interact with its visual elements, such as buttons, layout, colors, and icons.
                        </p>
                        <img src="{{ asset('images/head_cont2.png')}}" alt="Brand image" style="margin-top:24px; margin-left:120px; width: 140px;">
                        <p class="text-4xl font-source-serif-4" style="margin-left:120px; margin-top:12px; text-align: left;">
                            Instagram Feed Design is how someone designs the appearance of their account with images, videos, captions, and other posts to fit their aesthetic, personal brand, or specific goals.                        </p>
                    </div>
                </div>

                <!-- Second Half -->
                <div class="col-md-6 p-0 h-md-100 loginarea" style="background-color: #FAFAFE;">
                    <div class="d-md-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/content.png')}}" alt="Brand image" style="margin-top:100px; width: 350px;">
                    </div>
                </div>
            </div>

        </div>

        <!-- BARU -->

        <div class="row  mx-auto justify-content-center" style="margin-top:24px;" >
            <div class="col-sm-5">
              <div class="card">
                <div class="card-body">
                    <a href="#" style="font-size:8px; " class="non-clickable-button-card">We provide classic to modern designs</a>
                  <h6 class="card-title" style="margin-top:24px; font-weight:bold; ">Find your UI  Design here !</h6>
                  <p class="card-text" style="font-size:14px;color:#717171">Browse new designs and edit them as you like</p>
                  <a href="#" style="font-size:12px; margin-top:18px; margin-buttom:10px;" class="non-clickable-button-3">Start hiring today</a>
                  <br>
                  <br>
                </div>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="card">
                <div class="card-body">
                    <a href="#" style="font-size:8px; " class="non-clickable-button-card">We provide classic to modern designs</a>
                    <h6 class="card-title" style="margin-top:24px; font-weight:bold;">Find your UI  Design here !</h6>
                    <p class="card-text" style="font-size:14px; color:#717171">Browse new designs and edit them as you like</p>
                  <a href="#" style="font-size:12px; margin-top:18px; margin-buttom:10px; " class="non-clickable-button-3">Start hiring today</a>
                <br>
                <br>
                </div>
              </div>
            </div>
          </div>



        <div class="slideshow-container" style="margin-top: 48px;">
            <div class="mySlides">
              <q>Design is the silent ambassador of your brand. Let your creativity speak volumes through every pixel and color palette.</q>
              <p class="author">- John Keats</p>
            </div>

            <div class="mySlides">
              <q>In the world of UI/UX, every click is a conversation. Craft a design language that engages and delights, making every interaction a memorable experience.</q>
              <p class="author">- Ernest Hemingway</p>
            </div>

            <div class="mySlides">
              <q>Like a well-curated Instagram feed, a thoughtful design is a visual story. Create a narrative that captivates and resonates with your audience.</q>
              <p class="author">- Thomas A. Edison</p>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

            </div>

            <div class="dot-container">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>
    </div>

    <img src="{{ asset('images/galery.png')}}" alt="Logo image" style="width: 100%;  margin-top:80px; object-fit: cover; object-position: center;">

</div>
</body>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
        </script>

@endsection

</html>
