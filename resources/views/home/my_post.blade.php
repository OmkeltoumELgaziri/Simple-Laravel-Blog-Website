<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Posts - Laravel Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <style>
        /* Reset & Global */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #f7f9fc;
            color: #333;
            line-height: 1.6;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 50px auto;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0px 8px 24px rgba(0,0,0,0.1);
        }

        /* Header */
        .header-section {
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            color: white;
            padding: 25px 30px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .header-section h1 {
            flex: 1;
            text-align: center;
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
            text-decoration: none;
            color: white;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-50%) translateX(-5px);
        }

        /* Posts Grid */
        .posts-container {
            padding: 35px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(330px, 1fr));
            gap: 25px;
        }

        .post-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .post-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        .post-image {
            width: 100%;
            height: 190px;
            object-fit: cover;
        }

        .post-content {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .post-title {
            font-size: 20px;
            font-weight: 600;
            color: #222;
            margin-bottom: 12px;
        }

        .post-description {
            color: #666;
            font-size: 15px;
            margin-bottom: 18px;
            flex: 1;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        /*<=============ACTIONS==============> */
       .post-actions {
    border-top: 1px solid #eee;
    padding-top: 15px;
    display: flex;
    flex-direction: column; /* اجعل العناصر عمودية */
    gap: 10px; /* مسافة بين الأزرار والتاريخ */
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .view-btn,
        .update-btn,
        .delete-btn {
            padding: 7px 14px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }

        .view-btn {
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            color: white;
        }
        .view-btn:hover {
            box-shadow: 0 4px 10px rgba(79,70,229,0.3);
        }

        .update-btn {
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: white;
        }
        .update-btn:hover {
            box-shadow: 0 4px 10px rgba(22,197,94,0.3);
        }

        .delete-btn {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            border: none;
            cursor: pointer;
        }
        .delete-btn:hover {
            box-shadow: 0 4px 10px rgba(239,68,68,0.3);
        }

       .post-date {
    font-size: 13px;
    color: #555; /* لون أغمق قليلًا ليكون واضح */
    text-align: left; /* اجعل التاريخ على يمين البطاقة */
}

        /* Empty State */
        .empty-state {
            text-align: center;
            grid-column: 1 / -1;
            padding: 80px 30px;
        }

        .empty-state i {
            font-size: 64px;
            color: #bbb;
            margin-bottom: 18px;
        }

        .empty-state h3 {
            font-size: 24px;
            color: #555;
            margin-bottom: 10px;
        }

        .empty-state p {
            font-size: 15px;
            color: #888;
            margin-bottom: 25px;
        }

        .create-post-btn {
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            padding: 12px 24px;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .create-post-btn:hover {
            box-shadow: 0 6px 15px rgba(79,70,229,0.3);
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .posts-container {
                grid-template-columns: 1fr;
                padding: 20px;
            }
            .header-section h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    @include('sweetalert::alert')

    <div class="container">
        <div class="header-section">
            <a href="{{ url('/') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1>My Posts</h1>
        </div>

        <div class="posts-container">
            @if(isset($data) && count($data) > 0)
                @foreach($data as $post)
                    <div class="post-card">
                        <img src="/postimage/{{$post->image}}" class="post-image" alt="Post Image">
                        <div class="post-content">
                            <h3 class="post-title">{{$post->title}}</h3>
                            <p class="post-description">{{$post->description}}</p>
                            <div class="post-actions">
                                <div class="action-buttons">
                                    <a href="{{ url('post_details/' . $post->id) }}" class="view-btn">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                    <a href="{{ url('post_update_page', $post->id) }}" class="update-btn">
                                        <i class="fas fa-edit"></i> Update
                                    </a>
                                    <button type="button"
                                        class="delete-btn delete-post-btn"
                                        data-post-id="{{ $post->id }}"
                                        data-post-title="{{ $post->title }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                                <span class="post-date">{{ date('M j, Y', strtotime($post->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="empty-state">
                    <i class="fas fa-file-alt"></i>
                    <h3>No Posts Yet</h3>
                    <p>You haven’t created any posts yet. Start sharing your thoughts with the community!</p>
                    <a href="{{ url('create_post') }}" class="create-post-btn">
                        <i class="fas fa-plus"></i> Create Your First Post
                    </a>
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.delete-post-btn').forEach(button => {
            button.addEventListener('click', function() {
                const postId = this.dataset.postId;
                const postTitle = this.dataset.postTitle;

                Swal.fire({
                    title: 'Are you sure?',
                    text: `Delete "${postTitle}"? This cannot be undone!`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc2626',
                    cancelButtonColor: '#4f46e5',
                    confirmButtonText: 'Yes, delete it',
                    cancelButtonText: 'Cancel',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ url('my_post_del') }}/" + postId;
                    }
                });
            });
        });
    </script>
</body>
</html>
