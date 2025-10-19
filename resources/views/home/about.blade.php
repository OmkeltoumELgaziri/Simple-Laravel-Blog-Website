<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Section</title>

  <!-- Website Icon -->  
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">


  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: #0f172a;
      color: #fff;
    }

    /* About Section */
    .about_section {
      padding: 80px 0;
      background: #0f172a;
    }

    .about_taital {
      font-size: 40px;
      font-weight: 700;
      background: linear-gradient(135deg, #4f46e5, #06b6d4, #f43f5e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 20px;
    }

    .about_text {
      font-size: 16px;
      color: #cbd5e1;
      margin-bottom: 25px;
      line-height: 1.7;
    }

    .readmore_bt a {
      display: inline-block;
      padding: 10px 20px;
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      background: linear-gradient(135deg, #4f46e5, #06b6d4);
      border-radius: 30px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .readmore_bt a:hover {
      background: linear-gradient(135deg, #f43f5e, #06b6d4);
      box-shadow: 0 0 12px rgba(255,255,255,0.3);
      transform: translateY(-2px);
    }

    .about_img {
      width: 100%;
      border-radius: 16px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.5);
      transition: transform 0.3s ease;
    }

    .about_img:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>



  <div class="about_section">
    <div class="container">
      
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="about_taital_main">
            
            <h1 class="about_taital">About Us</h1>
            <p class="about_text">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, 
              by injected humour, or randomised words which don't look even slightly believable. 
              If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
            </p>
            <div class="readmore_bt"><a href="#">Read More</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <div>
            <img src="images/about-img.png" alt="About Us" class="about_img">
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

