jQuery(document).ready(function() {
    var btn = $('#button');  
    $(window).scroll(function() {     
      if ($(window).scrollTop() > 300) {
         btn.addClass('show');
       } else {
         btn.removeClass('show');
       }
     });
     btn.on('click', function(e) {
       e.preventDefault();
       $('html, body').animate({scrollTop:0}, '1000');
     });
});

function openbox1(){
  document.getElementById('card-2').style.display="block";
}

function openbox2(){
    document.getElementById('card-3').style.display="block";
}
function openbox3(){
    document.getElementById('card-1').style.display="block";
}
function openbox4(){
    document.getElementById('card-4').style.display="block";
}

document.getElementById('close1').onclick = function(){
    document.getElementById('card-1').style.display="none";
};
document.getElementById('close2').onclick = function(){
  document.getElementById('card-4').style.display="none";
};
document.getElementById('close3').onclick = function(){
  document.getElementById('card-3').style.display="none";
};
document.getElementById('close4').onclick = function(){
  document.getElementById('card-2').style.display="none";
};

function main(){
  $('html, body').animate({
    scrollTop: $('.header').offset().top
  }, 500);
}

function services(){
  $('html, body').animate({
    scrollTop: $('.services').offset().top
  }, 500);
}
function stat(){
  $('html, body').animate({
    scrollTop: $('.ratings').offset().top
  }, 500);
}
function scrolltoTop(){
  $('html, body').animate({
    scrollTop: $('.company').offset().top
  }, 500);
}
function about(){
  $('html, body').animate({
    scrollTop: $('.about').offset().top
  }, 500);
}
function news(){
  $('html, body').animate({
    scrollTop: $('.news').offset().top
  }, 500);
}
function contacts(){
  $('html, body').animate({
    scrollTop: $('.footer').offset().top
  }, 500);
}
