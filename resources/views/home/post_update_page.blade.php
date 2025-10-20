<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update a Post - Laravel Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    

  @include('site_icon.myicon')
    
  

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
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            width: 100%;
            max-width: 600px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
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
        
        .header h1 {
            text-align: center;
            flex: 1;
            font-size: 24px;
            font-weight: 600;
        }
        
        .form-container {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        
        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .form-group input[type="text"]:focus,
        .form-group textarea:focus {
            border-color: #6a11cb;
            outline: none;
            box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
            background: white;
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
            line-height: 1.5;
        }
        
        .file-upload {
            margin-bottom: 25px;
        }
        
        .file-upload-label {
            display: block;
            padding: 15px;
            background: #f8f9fa;
            border: 2px dashed #ddd;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            color: #555;
        }
        
        .file-upload-label:hover {
            background: #e9ecef;
            border-color: #6a11cb;
            color: #6a11cb;
        }
        
        .file-upload-label i {
            margin-right: 8px;
            color: #6a11cb;
        }
        
        .file-upload input[type="file"] {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }
        
        .current-image {
            margin-top: 20px;
            text-align: center;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
            border: 1px solid #e9ecef;
        }
        
        .current-image img {
            max-width: 100%;
            max-height: 200px;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .current-image-text {
            display: block;
            font-size: 14px;
            color: #666;
            font-weight: 500;
        }
        
        .file-name {
            margin-top: 10px;
            padding: 10px;
            background: #e9ecef;
            border-radius: 6px;
            font-size: 14px;
            color: #666;
            text-align: center;
            font-weight: 500;
        }
        
        .submit-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(106, 17, 203, 0.3);
        }
        
        .submit-btn:active {
            transform: translateY(0);
        }
        
        @media (max-width: 600px) {
            body {
                padding: 10px;
                align-items: flex-start;
            }
            
            .container {
                border-radius: 12px;
                margin: 10px 0;
            }
            
            .header {
                padding: 20px;
            }
            
            .header h1 {
                font-size: 20px;
            }
            
            .form-container {
                padding: 20px;
            }
            
            .form-group {
                margin-bottom: 20px;
            }
            
            .form-group input[type="text"],
            .form-group textarea {
                padding: 12px;
            }
            
            .current-image img {
                max-height: 150px;
            }
        }

        /* Add smooth transition for all interactive elements */
        .form-group input[type="text"],
        .form-group textarea,
        .file-upload-label,
        .submit-btn {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>
<body>
    @include('sweetalert::alert')

    <div class="container">
        <div class="header">
            <a href="{{ url('/') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1>Update Post</h1>
        </div>
        

       
        <div class="form-container">
            <form id="postForm" action="{{ url('update_post_data',$data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter post title" value="{{ $data->title }}" required>
                </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Write your post content here..." required>{{ $data->description }}</textarea>
                </div>
                
                <div class="file-upload">
                    <label class="file-upload-label" for="image">
                        <i class="fas fa-cloud-upload-alt"></i> Choose New Image
                    </label>
                    <input type="file" id="image" name="image" accept="image/*">
                    
                    <div class="current-image">
                        <img src="/postimage/{{ $data->image }}" alt="Current post image">
                        <span class="current-image-text">Current Image</span>
                    </div>
                    
                    <div class="file-name" id="fileName">No new file chosen</div>
                </div>
                
                <button type="submit" class="submit-btn">Update Post</button>
            </form>
        </div>
    </div>

    <script>
        // Update file name display when a file is selected
        document.getElementById('image').addEventListener('change', function() {
            const fileName = this.files.length > 0 ? this.files[0].name : 'No file chosen';
            document.getElementById('fileName').textContent = fileName;
            
            // Optional: Add visual feedback when a file is selected
            if (this.files.length > 0) {
                document.querySelector('.file-upload-label').style.borderColor = '#28a745';
                document.querySelector('.file-upload-label').style.backgroundColor = '#d4edda';
            } else {
                document.querySelector('.file-upload-label').style.borderColor = '#ddd';
                document.querySelector('.file-upload-label').style.backgroundColor = '#f8f9fa';
            }
        });
    </script>
</body>
</html>