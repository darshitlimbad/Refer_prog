//DOM
document.addEventListener("DOMContentLoaded" , function() {
  
    // swiper functionality for SWIPING THE IMG
    // note : -1 for img nm and li tag matching
        //swiping left
        document.getElementById("sl").addEventListener("click" , function () {
            var li= document.getElementById("nav-bar").childNodes;
            
            if(li[1].type == 'disc') {
                li[1].type = "circle";
                li[4].type = 'disc';
                $('.img_1').fadeOut(1);
                $('.img_4').fadeIn(100);
            }
            else if(li[2].type == 'disc') {
                li[2].type = 'circle' ;
                li[1].type = 'disc';
                $('.img_2').fadeOut(1);
                $('.img_1').fadeIn(100);
            }
            else if(li[3].type == 'disc') {
                li[3].type = 'circle' ;
                li[2].type = 'disc';
                $('.img_3').fadeOut(1);
                $('.img_2').fadeIn(100);
            }
            else if(li[4].type == 'disc') {
                li[4].type = 'circle' ;
                li[3].type = 'disc';
                $('.img_4').fadeOut(1);
                $('.img_3').fadeIn(100);
            }
        });

        //swiping right
        document.getElementById("sr").addEventListener("click" , function () {
            var li= document.getElementById("nav-bar").childNodes;
            
            if(li[1].type == 'disc') {
                li[1].type = "circle";
                li[2].type = 'disc';
                $('.img_1').fadeOut(1);
                $('.img_2').fadeIn(100);
                
            }
            else if(li[2].type == 'disc') {
                li[2].type = 'circle' ;
                li[3].type = 'disc';
                $('.img_2').fadeOut(1);
                $('.img_3').fadeIn(100);
            }
            else if(li[3].type == 'disc') {
                li[3].type = 'circle' ;
                li[4].type = 'disc';
                $('.img_3').fadeOut(1);
                $('.img_4').fadeIn(100);
            }
            else if(li[4].type == 'disc') {
                li[4].type = 'circle' ;
                li[1].type = 'disc';
                $('.img_4').fadeOut(1);
                $('.img_1').fadeIn(100);
            }
        });
})