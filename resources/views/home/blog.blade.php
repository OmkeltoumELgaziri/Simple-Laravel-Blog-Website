<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Section</title>




  @include('site_icon.myicon')
    
  

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

    /* Video Section */
    .blog_section {
      padding: 80px 0;
      background: #0f172a;
      text-align: center;
    }

    .blog_taital {
      font-size: 40px;
      font-weight: 700;
      background: linear-gradient(135deg, #4f46e5, #06b6d4, #f43f5e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 15px;
    }

    .blog_text {
      font-size: 16px;
      max-width: 700px;
      margin: 0 auto 40px;
      color: #cbd5e1;
      line-height: 1.7;
    }

    .play_icon_main {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .play_icon {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background: linear-gradient(135deg, #4f46e5, #06b6d4);
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .play_icon:hover {
      transform: scale(1.1);
      background: linear-gradient(135deg, #f43f5e, #06b6d4);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6);
    }

    .play_icon img {
      width: 50px;
      height: 50px;
      filter: invert(1); /* makes the play icon white */
    }
  </style>
</head>
<body>

  <div class="blog_section layout_padding">
    <div class="container">
      <h1 class="blog_taital">See Our Video</h1>
      <p class="blog_text">
        Many variations of passages of Lorem Ipsum are available, but the majority have suffered alteration in some form, by injected humour, or randomised words.
      </p>
      <div class="play_icon_main">
        <div class="play_icon">
          <a href="#">
            <img src="images/play-icon.png" alt="Play Video">
          </a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
