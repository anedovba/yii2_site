//sticky header

$(window).resize(function () {
    $(".navbar-collapse").css({maxHeight: $(window).height() - $(".navbar-header").height() + "px"});
});
//sticky header on scroll
$(document).ready(function () {
    $(window).load(function () {
        $(".sticky").sticky({topSpacing: 0});
    });
});



//slider revolution
jQuery(document).ready(function () {

    revapi = jQuery('.tp-banner').revolution(
            {
                delay: 6000,
                startwidth: 1170,
                startheight: 450,
                hideThumbs: 10,
                fullWidth: "on",
                forceFullWidth: "on",
                navigationStyle: "preview4"
            });

});	//ready

//all property slider
$(document).ready(function () {

    $("#property-slider").owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
});

//select box
(function () {
    [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function (el) {
        new SelectFx(el);
    });
})();



//thumb slider
$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});

// карта на странице контактов
jQuery(document).ready(function ($) {
    function LoadMapProperty() {
        var locations = new Array(
            [38.951399, -76.958463]
        );
        var types = new Array(
            'family-house'
        );
        var markers = new Array();
        var plainMarkers = new Array();

        var mapOptions = {
            center: new google.maps.LatLng(38.951399, -76.958463),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };

        var map = new google.maps.Map(document.getElementById('property-map'), mapOptions);

        $.each(locations, function (index, location) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(location[0], location[1]),
                map: map,

            });

            var myOptions = {
                draggable: true,
                content: '<div class="marker ' + types[index] + '"><div class="marker-inner"></div></div>',
                disableAutoPan: true,
                pixelOffset: new google.maps.Size(-21, -58),
                position: new google.maps.LatLng(location[0], location[1]),
                closeBoxURL: "",
                isHidden: false,
                // pane: "mapPane",
                enableEventPropagation: true
            };
            marker.marker = new InfoBox(myOptions);
            marker.marker.isHidden = false;
            marker.marker.open(map, marker);
            markers.push(marker);
        });

        google.maps.event.addListener(map, 'zoom_changed', function () {
            $.each(markers, function (index, marker) {
                marker.infobox.close();
            });
        });
    }

    google.maps.event.addDomListener(window, 'load', LoadMapProperty);

    var dragFlag = false;
    var start = 0, end = 0;

    function thisTouchStart(e) {
        dragFlag = true;
        start = e.touches[0].pageY;
    }

    function thisTouchEnd() {
        dragFlag = false;
    }

    function thisTouchMove(e) {
        if (!dragFlag)
            return;
        end = e.touches[0].pageY;
        window.scrollBy(0, (start - end));
    }

    document.getElementById("property-map").addEventListener("touchstart", thisTouchStart, true);
    document.getElementById("property-map").addEventListener("touchend", thisTouchEnd, true);
    document.getElementById("property-map").addEventListener("touchmove", thisTouchMove, true);
});

/***********************************************************
     * ACCORDION
     ***********************************************************/
    $('.panel-heading a[data-toggle="collapse"]').on('click', function () {
        if ($(this).closest('.panel-heading').hasClass('active')) {
            $(this).closest('.panel-heading').removeClass('active');
        } else {
            $('.panel-heading a[data-toggle="collapse"]').closest('.panel-heading').removeClass('active');
            $(this).closest('.panel-heading').addClass('active');
        }
    });
    
         /* ===================================================================
             TWEETIE -  TWITTER FEED PLUGIN THAT WORKS WITH NEW Twitter 1.1 API
             ==================================================================== */
            $('.tweet').twittie({
                apiPath: 'twit-api/tweet.php',
                dateFormat: '%b. %d, %Y',
                template: '{{tweet}} <div class="date">{{date}}</div> <a href="{{url}}"{{screen_name}}',
                count: 2
            });