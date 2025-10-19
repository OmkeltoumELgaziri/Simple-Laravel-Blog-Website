<!DOCTYPE html>
<html lang="en">
   <head>

 <title>Blog Website</title>


  <!-- Website Icon -->  
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         
         
         @include('home.header')
         @include('home.Banner')




      </div>
      <!-- header section end -->



      <!-- services section start -->
      
   
          @include('home.Services')


      <!-- services section end -->


      <!-- about section start -->
     

         @include('home.about')


      <!-- about section end -->


      <!-- blog section start -->
     
               @include('home.Blog')


      <!-- blog section end -->
      <!-- client section start -->
      
             @include('home.client')

      <!-- client section start -->
      <!-- choose section start -->
      
             @include('home.Choose')

      <!-- choose section end -->
      <!-- footer section start -->
      
              @include('home.footer')

   </body>
</html>