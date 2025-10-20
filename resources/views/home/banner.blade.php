<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Banner</title>



  @include('site_icon.myicon')
    
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

   @include('home.GradiantCSS')
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #0f172a;
      color: #fff;
    }

    /* ===================== Banner ===================== */
/* Shared gradient animation for header + banner */

.banner {
  position: relative;
  width: 100%;
  height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  /* ❌ removed background + animation */
}


  

    /* Dark overlay for readability */
    .banner::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.45);
      z-index: 1;
    }

    .banner-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      padding: 0 20px;
    }

    .banner h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 20px;
      color: #fff;
      text-shadow: 0 0 10px rgba(0,0,0,0.5);
    }

    .banner p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      color: #f0f0f0;
      line-height: 1.6;
    }

    .banner a.cta-btn {
      display: inline-block;
      padding: 12px 30px;
      font-weight: 600;
      border-radius: 30px;
      text-decoration: none;
      color: #fff;
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255,255,255,0.3);
      backdrop-filter: blur(10px);
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .banner a.cta-btn::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 0%;
      height: 100%;
      background: rgba(28, 40, 171, 0.9);
      border-radius: 30px;
      z-index: -1;
      transition: width 0.3s ease;
    }

    .banner a.cta-btn:hover::after {
      width: 100%;
    }

    .banner a.cta-btn:hover {
      color: #ffe600;
      text-shadow: 0 0 8px #fff;
    }

    /* ===================== Responsive ===================== */
    @media (max-width: 768px) {
      .banner h1 { font-size: 2rem; }
      .banner p { font-size: 1rem; }
    }

  </style>
</head>
<body>

  <!-- Banner Section -->
  <section class="banner gradient-animated">
    <div class="banner-content">
      <h1>Welcome to My Blog</h1>
      <p>Discover stories, insights, and tips on technology, lifestyle, and creativity. Join our community and explore amazing content every day.</p>
      <a href="#" class="cta-btn">Read Latest Posts</a>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>










<!--


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Section</title>
</head>
<body>
    

         <div class="banner_section layout_padding">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              



               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       
        

</body>
</html>  banner section end -->