<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Section</title>

    <!-- Website Icon -->  
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
      background: #0f172a;
      color: white;
    }

    /* ===== Footer Section ===== */
    .footer_section {
      background: linear-gradient(180deg, #0f172a 0%, #1e293b 100%);
      color: white;
      padding: 60px 20px;
      position: relative;
      text-align: center;
    }

    /* Gradient line on top */
    .footer_section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, #4f46e5, #00ffffff, #4f46e5);
    }

    .input_btn_main {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 30px;
      flex-wrap: wrap;
      gap: 10px;
    }

    .mail_text {
      padding: 14px 20px;
      border-radius: 30px;
      border: none;
      width: 280px;
      font-size: 16px;
      outline: none;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .subscribe_bt a {
      display: inline-block;
      padding: 14px 28px;
      background: white;
      color: #4f46e5;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .subscribe_bt a:hover {
      background: #06b6d4;
      color: white;
    }

    .location_main {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
      margin: 20px 0;
    }

    .call_text {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 15px;
    }

    .call_text a {
      color: white;
      text-decoration: none;
      transition: 0.3s;
    }

    .call_text a:hover {
      color: #06b6d4;
    }

    .social_icon ul {
      list-style: none;
      padding: 0;
      margin: 30px 0 0;
      display: flex;
      justify-content: center;
      gap: 15px;
    }

    .social_icon ul li {
      display: inline-block;
    }

    .social_icon ul li a img {
      width: 32px;
      height: 32px;
      transition: transform 0.3s ease, filter 0.3s ease;
      filter: brightness(0) invert(1);
    }

    .social_icon ul li a img:hover {
      transform: scale(1.2);
      filter: brightness(0) invert(1) drop-shadow(0 0 6px #06b6d4);
    }

    /* ===== Copyright Section ===== */
    .copyright_section {
      background: #0a0f1e;
      color: #aaa;
      padding: 15px 10px;
      font-size: 14px;
      text-align: center;
    }

    .copyright_text a {
      color: #06b6d4;
      text-decoration: none;
      transition: 0.3s;
    }

    .copyright_text a:hover {
      text-decoration: underline;
      color: #4f46e5;
    }
  </style>
</head>
<body>
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="input_btn_main">
        <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
      </div>

      <div class="location_main">
        <div class="call_text"><img src="images/call-icon.png" alt="call"><a href="#">+01 1234567890</a></div>
        <div class="call_text"><img src="images/mail-icon.png" alt="mail"><a href="#">demo@gmail.com</a></div>
      </div>

      <div class="social_icon">
        <ul>
          <li><a href="#"><img src="images/fb-icon.png" alt="Facebook"></a></li>
          <li><a href="#"><img src="images/twitter-icon.png" alt="Twitter"></a></li>
          <li><a href="#"><img src="images/linkedin-icon.png" alt="LinkedIn"></a></li>
          <li><a href="#"><img src="images/instagram-icon.png" alt="Instagram"></a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- copyright section -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">
        2025 © All Rights Reserved. Design by <a href="https://html.design">Free HTML Templates</a>
      </p>
    </div>
  </div>
</body>
</html>
