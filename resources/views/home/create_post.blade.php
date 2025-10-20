<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>


  @include('site_icon.myicon')
    
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f9fafc;
            color: #333;
            padding: 40px 20px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #4f46e5 0%, #06b6d4 100%);
            color: white;
            padding: 25px 30px;
            text-align: center;
            position: relative;
        }

        .header h1 {
            font-size: 26px;
            font-weight: 600;
        }

        .back-btn {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
            color: white;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: rgba(255, 255, 255, 0.35);
        }

        .form-container {
            padding: 35px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            color: #444;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #ddd;
            border-radius: 12px;
            font-size: 16px;
            transition: border 0.3s, box-shadow 0.3s;
        }

        .form-group input[type="text"]:focus,
        .form-group textarea:focus {
            border-color: #4f46e5;
            outline: none;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .form-group textarea {
            min-height: 140px;
            resize: vertical;
        }

        .file-upload {
            position: relative;
            margin-bottom: 25px;
        }

        .file-upload-label {
            display: block;
            padding: 18px;
            border: 2px dashed #cbd5e1;
            border-radius: 12px;
            background: #f8fafc;
            text-align: center;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .file-upload-label:hover {
            background: #f1f5f9;
            border-color: #4f46e5;
        }

        .file-upload-label i {
            margin-right: 8px;
            color: #4f46e5;
        }

        .file-upload input[type="file"] {
            display: none;
        }

        .file-name {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
            text-align: center;
        }

        .file-name.has-file {
            color: #4f46e5;
            font-weight: 500;
        }

        .submit-btn {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            color: white;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(79, 70, 229, 0.25);
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }
            .header h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    @include('sweetalert::alert')
    <div class="container">
        <div class="header">
            <a href="/" class="back-btn">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1>Add New Post</h1>
        </div>

        <div class="form-container">
            <form id="postForm" action="/user_post" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter post title" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Write your post here..." required></textarea>
                </div>

                <div class="file-upload">
                    <label class="file-upload-label" for="image">
                        <i class="fas fa-cloud-upload-alt"></i> Choose Image
                    </label>
                    <input type="file" id="image" name="image" accept="image/*">
                    <div class="file-name" id="fileName">No file chosen</div>
                </div>

                <button type="submit" class="submit-btn">Publish Post</button>
            </form>
        </div>
    </div>

    <script>
        const fileInput = document.getElementById('image');
        const fileNameDisplay = document.getElementById('fileName');

        fileInput.addEventListener('change', function() {
            
            if (this.files && this.files.length > 0) {
                fileNameDisplay.textContent = this.files[0].name;
                fileNameDisplay.classList.add('has-file');
            } else {
                fileNameDisplay.textContent = 'No file chosen';
                fileNameDisplay.classList.remove('has-file');
            }
        });
    </script>
</body>
</html>
