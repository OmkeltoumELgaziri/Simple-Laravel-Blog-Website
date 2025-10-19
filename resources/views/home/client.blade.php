<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client Section</title>
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

    /* Testimonial Section */
    .client_section {
      padding: 80px 0;
      background: #0f172a;
      text-align: center;
    }

    .client_taital {
      font-size: 40px;
      font-weight: 700;
      background: linear-gradient(135deg, #4f46e5, #06b6d4, #f43f5e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 40px;
    }

    /* Testimonial Card */
    .client_main {
      background: #1e293b;
      border-radius: 18px;
      padding: 30px;
      margin: 0 auto;
      max-width: 900px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      box-shadow: 0 8px 25px rgba(0,0,0,0.5);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .client_main:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.6);
    }

    .box_left {
      flex: 1;
      min-width: 280px;
      padding-right: 20px;
    }

    .lorem_text {
      font-size: 16px;
      color: #cbd5e1;
      line-height: 1.7;
      text-align: left;
    }

    .box_right {
      display: flex;
      align-items: center;
      gap: 15px;
      min-width: 220px;
      margin-top: 20px;
    }

    .client_taital_left {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .client_img img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      border: 3px solid #4f46e5;
      object-fit: cover;
      box-shadow: 0 4px 12px rgba(0,0,0,0.4);
    }

    .quick_icon img {
      width: 30px;
      height: 30px;
      opacity: 0.8;
    }

    .client_taital_right {
      text-align: left;
    }

    .client_name {
      font-size: 18px;
      font-weight: 600;
      color: #fff;
      margin: 0;
    }

    .customer_text {
      font-size: 14px;
      color: #cbd5e1;
    }

    /* Carousel Indicators */
    .carousel-indicators li {
      background-color: #4f46e5;
      border-radius: 50%;
      width: 12px;
      height: 12px;
    }
    .carousel-indicators .active {
      background-color: #f43f5e;
    }
  </style>
</head>
<body>

  <div class="client_section layout_padding">
    <div class="container">
      <h1 class="client_taital">Testimonial</h1>
      <div class="client_section_2">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="client_main">
                <div class="box_left">
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="box_right">
                  <div class="client_taital_left">
                    <div class="client_img"><img src="images/client-img.png" alt="Client"></div>
                    <div class="quick_icon"><img src="images/quick-icon.png" alt="Quote"></div>
                  </div>
                  <div class="client_taital_right">
                    <h4 class="client_name">Dame</h4>
                    <p class="customer_text">Customer</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="client_main">
                <div class="box_left">
                  <p class="lorem_text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="box_right">
                  <div class="client_taital_left">
                    <div class="client_img"><img src="images/client-img.png" alt="Client"></div>
                    <div class="quick_icon"><img src="images/quick-icon.png" alt="Quote"></div>
                  </div>
                  <div class="client_taital_right">
                    <h4 class="client_name">Alex</h4>
                    <p class="customer_text">Customer</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="client_main">
                <div class="box_left">
                  <p class="lorem_text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="box_right">
                  <div class="client_taital_left">
                    <div class="client_img"><img src="images/client-img.png" alt="Client"></div>
                    <div class="quick_icon"><img src="images/quick-icon.png" alt="Quote"></div>
                  </div>
                  <div class="client_taital_right">
                    <h4 class="client_name">Sophia</h4>
                    <p class="customer_text">Customer</p>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- end carousel-inner -->
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
