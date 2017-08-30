
$(document).ready(function() {
    $("#aboutus,#product").on('click', function () {
        if (this.hash !== "") {
//                    event.preventDefault();
            var hash = this.hash;
            $('html, body').animate
            ({
                scrollTop: $(hash).offset().top
            }, 950, function () {
                window.location.hash = hash;
            });
        }
    });
});

$(document).ready(function(){
    $("#menu li a").click(function(){
//                console.log($('#menu li a'));
        $("a").each(function(){
            $('a').removeClass('active');
        });
        $(this).addClass('active');
    });
});
