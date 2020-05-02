
<!-- link that opens popup -->


<!-- JS here -->
<script src="{{ URL::asset('my_assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/popper.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/ajax-form.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/waypoints.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/scrollIt.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/wow.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/nice-select.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/plugins.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/gijgo.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/slick.min.js')}}"></script>
<!--contact js-->
<script src="{{ URL::asset('my_assets/js/contact.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/jquery.form.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/mail-script.js')}}"></script>

<script src="{{ URL::asset('my_assets/js/main.js')}}"></script>
<script src="{{ URL::asset('my_assets/js/visible/jquery.visible.min.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
    (function($) {

        /**
         * Copyright 2012, Digital Fusion
         * Licensed under the MIT license.
         * http://teamdf.com/jquery-plugins/license/
         *
         * @author Sam Sehnert
         * @desc A small plugin that checks whether elements are within
         *     the user visible viewport of a web browser.
         *     only accounts for vertical position, not horizontal.
         */

        $.fn.visible = function(partial) {

            var $t            = $(this),
                $w            = $(window),
                viewTop       = $w.scrollTop(),
                viewBottom    = viewTop + $w.height(),
                _top          = $t.offset().top,
                _bottom       = _top + $t.height(),
                compareTop    = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;

            return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

        };

    })(jQuery);

    $(window).scroll(function(event) {

        $(".module").each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("come-in");
            }
        });

    });

    var win = $(window);
    var allMods = $(".module");

    // Already visible modules
    allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("already-visible");
        }
    });

    win.scroll(function(event) {

        allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("come-in");
            }
        });

    });




    $(window).scroll(function(event) {

        $(".moduleZ").each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("zoom-in");
            }
        });

    });

    var winZ = $(window);
    var allModsZ = $(".moduleZ");

    // Already visible modules
    allModsZ.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("already-visible");
        }
    });

    winZ.scroll(function(event) {

        allModsZ.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("zoom-in");
            }
        });

    });



    $(window).scroll(function(event) {

        $(".moduleL").each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("left-in");
            }
        });

    });

    var winL = $(window);
    var allModsL = $(".moduleL");

    // Already visible modules
    allModsL.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("already-visible");
        }
    });

    winL.scroll(function(event) {

        allModsL.each(function(i, el) {
            var id = el.id;
            var el = $(el);
            if (el.visible(true)) {
                if(id){
                    var owl = $('.testmonial_active');
                    owl.trigger('play.owl.autoplay',[800])
                }
                el.addClass("left-in");
            }
        });

    });
</script>
