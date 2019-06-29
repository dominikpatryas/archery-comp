console.log('xd');

$(document).ready(function(){
    $(".archer_img").click(function(){
  
      if($('.upload_main_photo').css('display') == 'none')
      {
        $(".upload_main_photo").fadeIn("slow");
      }
  else {
    // $(".upload_main_photo").fadeOut();
  }
    });
  });