// Function to toggle between dark and light mode.
let dark=false;
function switchMode(){
   if(!dark){
    $('.navbar').addClass('dark-mode-navbar');
    $('body').addClass('dark-mode-body');
    }
    else{
      $('.navbar').removeClass('dark-mode-navbar');
    $('body').removeClass('dark-mode-body');
    }
    dark=!dark;
}
// Function call.
$(document).ready("click", '.switch-mode', switchMode);
