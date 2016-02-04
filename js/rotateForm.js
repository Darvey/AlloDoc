clicked = 0; //number of pixels before modifying styles

function rotate180(){
   if(clicked == 0){
      $('.inscription-form').addClass('inscription-form-rotate');
      $('.connect-form').addClass('connect-form-rotate');
      $('.infosInscription').addClass('infosInscription-rotate');
      $('.infosConnexion').addClass('infosConnexion-rotate');
      $('.switcher').addClass('switcher-rotate');
      clicked = 1;
   }else{
      $('.inscription-form').removeClass('inscription-form-rotate');
      $('.connect-form').removeClass('connect-form-rotate');
      $('.infosInscription').removeClass('infosInscription-rotate');
      $('.infosConnexion').removeClass('infosConnexion-rotate');
      $('.switcher').removeClass('switcher-rotate');
      clicked = 0;
   }
}
