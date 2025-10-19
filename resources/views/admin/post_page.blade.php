<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')

    <style>
        /* =============== GLOBAL STYLES =============== */
        body {
            background-color: #0f0f1a;
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .page-content {
            padding: 40px 20px;
        }

        /* =============== TITLE =============== */
        .post_title {
            font-size: 32px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            color: #f1f1f1;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
        }

        .post_title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #2ecc71, #1abc9c);
            margin: 10px auto 0;
            border-radius: 2px;
        }

        /* =============== FORM CONTAINER =============== */
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: #1a1a2e;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
        }

        .div_center {
            margin-bottom: 25px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: 600;
            color: #a0a0a0;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 12px 15px;
            background: #22223b;
            border: 1px solid #2c2c54;
            border-radius: 8px;
            color: #e0e0e0;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        textarea:focus,
        input[type="file"]:focus {
            outline: none;
            border-color: #2ecc71;
            background-color: #1e1e2f;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        /* =============== BUTTON =============== */
        .btn-primary {
            display: inline-block;
            background: linear-gradient(135deg, #2ecc71, #1abc9c);
            border: none;
            color: #fff;
            font-weight: 600;
            padding: 12px 25px;
            font-size: 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #1abc9c, #16a085);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(46, 204, 113, 0.4);
        }

        /* =============== ALERT MESSAGE =============== */
        .alert {
            width: 60%;
            margin: 20px auto;
            text-align: center;
            background: rgba(39, 174, 96, 0.1);
            color: #2ecc71;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            border: 1px solid rgba(46, 204, 113, 0.3);
        }

        /* =============== FILE INPUT STYLING =============== */
        input[type="file"]::-webkit-file-upload-button {
            background: #2ecc71;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 8px 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        input[type="file"]::-webkit-file-upload-button:hover {
            background: #27ae60;
        }

        /* =============== RESPONSIVE =============== */
        @media (max-width: 768px) {
            .form-container {
                padding: 25px;
            }

            .post_title {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')

        <div class="page-content">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                </div>
            @endif

            <h1 class="post_title">Add Post</h1>

            <div class="form-container">
                <form action="{{ route('add_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="div_center">
                        <label for="title">Post Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter post title" required>
                    </div>

                    <div class="div_center">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" placeholder="Write something about your post..." required></textarea>
                    </div>

                    <div class="div_center">
                        <label for="image">Add Image</label>
                        <input type="file" name="image" id="image">
                    </div>

                    <div class="div_center">
                        <button type="submit" class="btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
