clicked = 0; //number of pixels before modifying styles

function rotate180(){
   if(clicked == 0){
      $('.inscription-form').addClass('inscription-form-rotate');
      $('.connect-form').addClass('connect-form-rotate');
      clicked = 1;
   }else{
      $('.inscription-form').removeClass('inscription-form-rotate');
      $('.connect-form').removeClass('connect-form-rotate');
      clicked = 0;
   }
}
