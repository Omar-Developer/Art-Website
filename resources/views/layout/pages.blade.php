@extends('layout.main_page')


@section('pages')
    
<div class="landpage-page-1">
  <div class="overlay-page-1">
  <video autoplay muted loop id="myVideo">
      <source src="{{asset('videos/art-video.mp4')}}" type="video/mp4">
    </video>   
  </div>
</div>

<div class="landpage-page-2">
  <div class="overlay-page-2"> 
   <h1>projects.</h1>
   <div class="container "><div class="row"></div>
  </div>
  </div>
  </div>

  
  <div class="page-1"></div>

  <div class="landpage-page-3" >
    <div class="overlay-page-3"> 
      <div class="container">
      <h1>about.</h1>
     <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story.</p>
    </div>
  
  </div>
    </div>


    <div class="page-2"></div>


    <div class="landpage-page-4">
      <div class="overlay-page-4"> 
        <div class="container">
        <h1>contact.</h1>

        <form onsubmit="return false" >
          <div class="form-group ">
            <label for="f-name">First Name</label>
            <input type="text" class="form-control" id="f-name" required>
          </div>  
          <div class="form-group">
            <label for="l-name">Last Name</label>
            <input type="text" class="form-control" id="l-name" required>
          </div>
         
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" required>
          </div>
    
          <div class="form-group">
            <label for="sub">Subject</label>
            <input type="text" class="form-control" id="sub">
          </div>
    
          <div class="form-group">
            <label for="mess">Message</label>
            <textarea id="mess" style="height: 190px; width: 500px;" required> </textarea>
            
          </div>
    

          <button type="submit" class="btn btn-default">Submit</button>
        
          <div class="Social-media">
            <i class="fa fa-facebook" style="font-size:24px"></i>
            <i class="fa fa-twitter" style="font-size:24px; margin-left: 25px"></i>
            <i class="fa fa-pinterest" style="font-size:24px; margin-left: 25px"></i>
          
          </div>
        
        </form>


      </div>  </div>  </div>

@endsection