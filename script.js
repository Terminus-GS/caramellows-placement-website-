$(document).ready(function () {
    $(window).scroll(function () {
        $('.hideElement').each(function (i) {
            var bottom_object = $(this).offset().top + $(this).outerHeight();
            var page_bottom = $(window).scrollTop() + $(window).height();
            if (page_bottom > bottom_object) {
                $(this).animate({
                    'opacity': '1'
                }, 500);
            }
        })
    });
    //Model
    var modal = document.getElementById('myModal');
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // opens as page loads
    window.onload = function () {
            modal.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
            modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    
    ///var open = document.getElementById('openNav');
    ///var close = document.getElementById('closeNav');
    ///var overlay = document.getElementById('cataOverlay');

//    open.onclick = function () {
  //      overlay.style.width = "100%";
//    }
  //  close.onclick = function () {
    //    overlay.style.width = "0%";
    //}
    
});