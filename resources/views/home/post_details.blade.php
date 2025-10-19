<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details - Laravel Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
      <!-- Website Icon -->  
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header-section {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 25px 30px;
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .back-btn {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: white;
        }
        
        .back-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-50%) translateX(-5px);
        }
        
        .header-section h1 {
            text-align: center;
            flex: 1;
            font-size: 24px;
            font-weight: 600;
        }
        
        .post-content {
            padding: 30px;
        }
        
        .post-image {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .post-title {
            font-size: 28px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .post-description {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 25px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 10px;
        }
        
        .post-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .author {
            font-weight: 600;
            color: #6a11cb;
        }
        
        .action-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(106, 17, 203, 0.3);
        }
        
        .btn-outline {
            border: 2px solid #6a11cb;
            color: #6a11cb;
            background: transparent;
        }
        
        .btn-outline:hover {
            background: #6a11cb;
            color: white;
        }
        
        @media (max-width: 768px) {
            .container {
                margin: 20px 10px;
            }
            
            .header-section {
                padding: 20px;
            }
            
            .header-section h1 {
                font-size: 20px;
            }
            
            .post-content {
                padding: 20px;
            }
            
            .post-title {
                font-size: 24px;
            }
            
            .post-meta {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .action-buttons {
                width: 100%;
                justify-content: space-between;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-section">
            <a href="{{ url('/') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1>Post Details</h1>
        </div>
        
        <div class="post-content">
            <img src="/postimage/{{$post->image}}" class="post-image" alt="Post Image">
            
            <h2 class="post-title">{{$post->title}}</h2>
            
            <div class="post-description">
                {{$post->description}}
            </div>
            
            <div class="post-meta">
                <p class="author">Post By <b>{{$post->name}}</b></p>
                
                <div class="action-buttons">
                    <a href="{{url('/')}}" class="btn btn-primary">
                        <i class="fas fa-home"></i> Back to Home
                    </a>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-share-alt"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>