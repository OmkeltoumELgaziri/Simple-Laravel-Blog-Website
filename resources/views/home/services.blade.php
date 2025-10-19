<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Posts Section</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Website Icon -->  
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: #0f172a;
      color: #fff;
    }

    /* Blog Section */
    .blog_section {
      background: #0f172a;
      padding: 80px 0;
    }

    .blog_title {
      font-size: 40px;
      font-weight: 700;
      text-align: center;
      background: linear-gradient(135deg, #4f46e5, #06b6d4, #f43f5e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 15px;
    }

    .blog_text {
      font-size: 16px;
      max-width: 700px;
      margin: 0 auto 50px;
      text-align: center;
      color: #cbd5e1;
    }

    .blog_section .col-md-4 {
      margin-bottom: 40px;
      display: flex;
      justify-content: center;
    }

    /* Blog Card */
    .blog_card {
      background: #1e293b;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0,0,0,0.5);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      max-width: 350px;
      width: 100%;
      text-align: left;
    }

    .blog_card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.6);
    }

    .blog_card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-bottom: 3px solid #4f46e5;
    }

    .blog_card_content {
      padding: 20px;
    }

    .blog_card_content h4 {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #fff;
    }

    .blog_card_content p {
      font-size: 14px;
      color: #cbd5e1;
      margin-bottom: 15px;
    }

    /* Read More Button */
    .btn_blog a {
      display: inline-block;
      padding: 8px 18px;
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      background: linear-gradient(135deg, #4f46e5, #06b6d4);
      border-radius: 30px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .btn_blog a:hover {
      background: linear-gradient(135deg, #f43f5e, #06b6d4);
      box-shadow: 0 0 12px rgba(255,255,255,0.3);
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

  <div class="blog_section">
    <div class="container">
      <h1 class="blog_title">Blog Posts</h1>
      <p class="blog_text">
        Stay updated with our latest articles, tips, and insights crafted just for you.
      </p>
      <div class="row">

        @foreach($post as $post)
        <div class="col-md-4">
          <div class="blog_card">
            <img src="/postimage/{{$post->image}}" alt="Post Image">
            <div class="blog_card_content">
              <h4>{{$post->title}}</h4>
              <p>Post By <b>{{$post->name}}</b></p>
              <div class="btn_blog">
                <a href="{{url('post_details',$post->id)}}">Read More</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>

</body>
</html>
