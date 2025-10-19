<!DOCTYPE html>
<html>
  <head> 

  <base href="/public">
    @include('admin.css')


         <style type="text/css">

        .post_title{
            font-size: 30px;
            font-weight:bold;
            text-align: center;
            padding: 30px;
        }

        .div_center{
            padding: 30px;
            text-align: center;

        }

        label{

            display: inline-block;
            width: 200px;
        }


    </style>



  </head>
  <body>
    
        @include('admin.header')


    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      

          @include('admin.sidebar')




      <!-- Sidebar Navigation end-->
      


       <div class="page-content">

            @if(session()-> has('message'))

                    <div class='alert alert-success'>

                        <button type="button" class='close' data-dismiss="alert" aria-hidden="true">X</button>
                
                            {{session()->get('message')}}
                    </div>
                @endif   

                        <H1 class="post_title">Update Post</H1>


                      
                            <form action="{{ url('update_post', $post->id) }}" method="POST" enctype="multipart/form-data">
                                  @csrf

                                  <div class="div_center">
                                      <label for="title">Post Title</label>
                                      <input type="text" name="title" id="title" required value="{{$post->title}}">
                                  </div>

                                  <div class="div_center">
                                      <label for="description">Description</label>
                                      <textarea name="description" id="description" required  >{{$post->description}}</textarea>
                                  </div>

                                  <div class="div_center">
                                      <label for="image">Old Image</label>
                                      <img src="/postimage/{{$post->image}}" height="100px" width="100px">
                                  </div>
                                  <div class="div_center">
                                      <label for="image">Add Image</label>
                                      <input type="file" name="image" id="image" >
                                  </div>

                                  <div class="div_center">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                            </form>   


                </div>


          @include('admin.footer')




  </body>
</html>