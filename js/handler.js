var  mn = $(".navbar");
var  mns = "navbar-nav-scrolled";
var  hdr = $('.navbar').height()-60;
var  siz = $('.cover-image-landing').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
    mn.addClass("navbar-default");
    mn.find('#logo').attr("src","img/logo2.png");
  }
  else {
    mn.removeClass(mns);
    if( $(this).scrollTop() <= siz) {
      mn.removeClass("navbar-default");	
      mn.find('#logo').attr("src","img/logo.png");
    }
  }
});


if ($('body').is('.index') === false)  {
  $('html, body').animate({
    scrollTop: $("#main").offset().top - hdr
  }, 800);
}

function toggleText(someText, someButton) {
            var x = document.getElementById(someButton);
            if (x.textContent === 'Pročitaj više ') {
                x.textContent = '';
                x.insertAdjacentHTML( 'afterbegin', 
                  'Pročitaj manje <i class="fa fa-angle-up" aria-hidden="true"></i>' );
            }
            else {
                x.textContent = '';
                x.insertAdjacentHTML( 'afterbegin', 
                  'Pročitaj više <i class="fa fa-angle-down" aria-hidden="true"></i>' );
            }
            var a = document.getElementById(someText);
            if (a.style.display === "block") {
                a.style.display = 'none';
            }
            else {
                a.style.display = "block";
            }
        }