

$(function(){
var  array = ['1', '2','3', '4', '5','6','7','8','9'];
  
    array.forEach(function (value, i) {
    
  $(".landpage-page-2 .row").append('<div class="project -'+(i+1)+' col-lg-4 col-md-4 col-sm-6"> <div class="view"><p>Project '+(i+1)+'</p></div></div>');
  $(".landpage-page-2 .row .-"+(i+1)).css("background-image","url('images/image_"+(i+1)+".jpg')");
  $(".landpage-page-2 .row .-"+(i+1)).click(function(){
    
    sessionStorage.setItem("pro_num",(i+1)); 
     sessionStorage.setItem("image", "url('images/image_"+(i+1)+".jpg')");
    window.location.href = "http://localhost/art_project/public/project_info";
  });
});

var im = sessionStorage.getItem("image");
var num = sessionStorage.getItem("pro_num");

$(".landpage-page-project_info .img").css("background-image",im);
$(".landpage-page-project_info span").text(num);
$(".landpage-page-project_info .go_back").click(function(){
  window.history.back();

});


  $(".menu-icon").click(function(){
    $(".menu-samll-page").toggle(300);

  });

 
  $(".menu-samll-page span , .menu-samll-page ul li a").click(function(){
    $(".menu-samll-page").hide(300);
  });



 

  $(".header ul .project , .header ul .about , .header ul .contact , .navbar .ab , .navbar .pro , .navbar .con ").click(function(){
  
     if ($(this).is(".navbar .pro") || $(this).is(".header ul .project")) {
      go_to_page(".landpage-page-2",0);
    }

   else if ($(this).is(".navbar .ab") || $(this).is(".header ul .about")) {
     go_to_page(".landpage-page-3",-50);
   }
  
 else if ($(this).is(".navbar .con") || $(this).is(".header ul .contact")) {
        go_to_page(".landpage-page-4",0);
    }
 
 });
 


  function go_to_page(to,num){
    $('html, body').animate({
      scrollTop: $(to).offset().top+num
  }, 1500);
 
 }




});

