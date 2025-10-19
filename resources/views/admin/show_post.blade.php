<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>All Posts | DarkAdmin</title>
  <!-- Website Icon -->  
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    <!-- SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @include('admin.css')

    <style>
        /* =================== GLOBAL =================== */
        body {
            background-color: #12121b;
            color: #e2e2e2;
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
        }

        .page-content {
            padding: 30px;
        }

        /* =================== TITLE =================== */
        .title_deg {
            font-size: 30px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 35px;
            color: #d4d4d4;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            position: relative;
        }

        .title_deg::after {
            content: "";
            display: block;
            width: 80px;
            height: 3px;
            background: #3a3a3a;
            margin: 10px auto 0;
            border-radius: 4px;
        }

        /* =================== TABLE =================== */
        .table_design {
            width: 95%;
            margin: 0 auto;
            border-collapse: collapse;
            background: #1b1b26;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.4);
        }

        .table_design th {
            background: #1e1e2a;
            color: #c8c8c8;
            padding: 16px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 13px;
            border-bottom: 1px solid #2c2c3e;
            letter-spacing: 0.8px;
        }

        .table_design td {
            padding: 14px;
            text-align: center;
            color: #e4e4e4;
            font-size: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .table_design tr:nth-child(even) {
            background-color: #181821;
        }

        .table_design tr:hover {
            background-color: rgba(255, 255, 255, 0.04);
            transition: 0.3s ease;
        }

        /* =================== IMAGE =================== */
        .img_dg {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #333;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .img_dg:hover {
            transform: scale(1.07);
            border-color: #5e5efc;
        }

        /* =================== BUTTONS =================== */
        .btn {
            font-size: 13px;
            font-weight: 500;
            border-radius: 6px;
            padding: 7px 14px;
            margin: 2px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display:block;
        }

        /* Delete */
        .btn-danger {
            background: #ff4b5c;
            color: #fff;
        }
        .btn-danger:hover {
            background: #e03b4c;
            transform: translateY(-2px);
        }

        /* Edit */
        .btn-success {
            background: #4cd964;
            color: #fff;
        }
        .btn-success:hover {
            background: #38b954;
            transform: translateY(-2px);
        }

        /* Accept */
        .btn-outline-secondary {
            background: transparent;
            border: 1px solid #4cd964;
            color: #4cd964;
        }
        .btn-outline-secondary:hover {
            background: #4cd964;
            color: #fff;
            transform: translateY(-2px);
        }

        /* Reject */
        .btn-outline-primary {
            background: transparent;
            border: 1px solid #ff4b5c;
            color: #ff4b5c;
        }
        .btn-outline-primary:hover {
            background: #ff4b5c;
            color: #fff;
            transform: translateY(-2px);
        }

        /* =================== ALERT =================== */
        .alert {
            width: 60%;
            margin: 20px auto;
            text-align: center;
            background: rgba(255, 75, 92, 0.1);
            color: #ff7a7a;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
        }

        /* =================== SCROLLBAR =================== */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')

        <div class="page-content">

            @if(session()->has('message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session()->get('message') }}
            </div>
            @endif

            <h1 class="title_deg">All Posts</h1>

            <table class="table_design">
                <tr>
                    <th>Post Title</th>
                    <th>Description</th>
                    <th>Post By</th>
                    <th>Post Status</th>
                    <th>User Type</th>
                    <th>Image</th>
                    <th>Actions</th>
                    <th>Accept</th>
                    <th>Reject</th>
                </tr>

                @foreach($post as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->post_staus }}</td>
                    <td>{{ $post->usertype }}</td>
                    <td><img src="postimage/{{ $post->image }}" class="img_dg"></td>
                    <td>
                        <a href="{{ url('delete_post', $post->id) }}" class="btn btn-danger"
                            onclick="confirmation(event)">Delete</a>
                        <a href="{{ url('edit_page', $post->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('accept_post', $post->id) }}" class="btn btn-outline-secondary"
                            onclick="return confirm('Are you sure you want to accept this post?')">Accept</a>
                    </td>
                    <td>
                        <a href="{{ url('reject_post', $post->id) }}" class="btn btn-outline-primary"
                            onclick="return confirm('Are you sure you want to reject this post?')">Reject</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
<br>
<br>


    @include('admin.footer')

    <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');

            swal({
                title: "Are you sure?",
                text: "This post will be permanently deleted!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>

</body>
</html>
