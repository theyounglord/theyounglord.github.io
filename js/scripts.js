$(document).ready(function() {

    $('#hero-area-slider').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        // autoplay: true, 
        responsive: {
            0: {
                dots: false
            },
            767: {
                dots: false
            },
            768: {
                dots: true
            }
        }
    });

    $('#testimonial-carousel-1').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i><span>Previous</span>', '<span>Next</span><i class="fa fa-angle-right"></i>'],
        responsive: {
            768: {
                navText: ['<i class="fa fa-angle-left"></i><span>Previous</span>', '<span>Next</span><i class="fa fa-angle-right"></i>']
            },
            575: {
                navText: ['<i class="fa fa-angle-left"></i><span></span>', '<span></span><i class="fa fa-angle-right"></i>']
            },
            0: {
                navText: false
            }
        }
    });

    $('#testimonial-carousel-2').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i><span>Previous</span>', '<span>Next</span><i class="fa fa-angle-right"></i>'],
        responsive: {
            768: {
                navText: ['<i class="fa fa-angle-left"></i><span>Previous</span>', '<span>Next</span><i class="fa fa-angle-right"></i>']
            },
            575: {
                navText: ['<i class="fa fa-angle-left"></i><span></span>', '<span></span><i class="fa fa-angle-right"></i>']
            },
            0: {
                navText: false
            }
        }
    });

    $('#driver-carousel').owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        margin: 15,
        navText: ['<i class="fa fa-angle-left"></i><span>Previous</span>', '<span>Next</span><i class="fa fa-angle-right"></i>'],
        responsive: {
            1200: {
                items: 4
            },
            992: {
                items: 3,
                navText: false
            },
            768: {
                items: 2,
                navText: false
            },
            0: {
                navText: false,
                items: 1
            }
        }
    });

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    $('.counter-number').counterUp({
        delay: 10,
        time: 1000
    });

    $(window).trigger("resize");
    init_map();





});

const gmMapDiv = $("#map-canvas");
const onridemap = $("#onridemap");
const ridemap = $("#ride-map");
const contactmap = $("#contact-map");

function init_map() {
    (function($) {

        if (gmMapDiv.length) {

            const gmCenterAddress = gmMapDiv.attr("data-address");
            let gmMarkerAddress = gmMapDiv.attr("data-address");


            gmMapDiv.gmap3({
                action: "init",
                marker: {
                    address: gmMarkerAddress,
                    latLng: [22.952635, 91.282526],
                    options: {
                        icon: "../assets/images/map-marker.png"
                    }
                },
                map: {
                    options: {
                        zoom: 14,
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        },
                        mapTypeControl: false,
                        scaleControl: false,
                        scrollwheel: false,
                        streetViewControl: false,
                        draggable: true,
                        styles: [{
                                "featureType": "administrative",
                                "elementType": "all",
                                "stylers": [{
                                    "saturation": "-100"
                                }]
                            },
                            {
                                "featureType": "administrative.province",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": 65
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": "50"
                                    },
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "all",
                                "stylers": [{
                                    "saturation": "-100"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "simplified"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "all",
                                "stylers": [{
                                    "lightness": "30"
                                }]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "all",
                                "stylers": [{
                                    "lightness": "40"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [{
                                        "hue": "#ffff00"
                                    },
                                    {
                                        "lightness": -25
                                    },
                                    {
                                        "saturation": -97
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "labels",
                                "stylers": [{
                                        "lightness": -25
                                    },
                                    {
                                        "saturation": -100
                                    }
                                ]
                            }
                        ]
                    }
                }
            });
        }


        if (onridemap.length) {

            // const gmCenterAddress = onridemap.attr("data-address");
            let gmMarkerAddress = onridemap.attr("data-address");


            onridemap.gmap3({
                action: "init",
                marker: {
                    address: gmMarkerAddress,
                    latLng: [22.952635, 91.282526],
                    options: {
                        icon: "../assets/images/map-marker.png"
                    }
                },
                map: {
                    options: {
                        zoom: 14,
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        },
                        mapTypeControl: false,
                        scaleControl: false,
                        scrollwheel: false,
                        streetViewControl: false,
                        draggable: true,
                        styles: [{
                                "featureType": "administrative",
                                "elementType": "all",
                                "stylers": [{
                                    "saturation": "-100"
                                }]
                            },
                            {
                                "featureType": "administrative.province",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": 65
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": "50"
                                    },
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "all",
                                "stylers": [{
                                    "saturation": "-100"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "simplified"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "all",
                                "stylers": [{
                                    "lightness": "30"
                                }]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "all",
                                "stylers": [{
                                    "lightness": "40"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [{
                                        "hue": "#ffff00"
                                    },
                                    {
                                        "lightness": -25
                                    },
                                    {
                                        "saturation": -97
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "labels",
                                "stylers": [{
                                        "lightness": -25
                                    },
                                    {
                                        "saturation": -100
                                    }
                                ]
                            }
                        ]
                    }
                }
            });
        }

        if (ridemap.length) {

            // const gmCenterAddress = onridemap.attr("data-address");
            let gmMarkerAddress = ridemap.attr("data-address");


            ridemap.gmap3({
                action: "init",
                marker: {
                    address: gmMarkerAddress,
                    latLng: [22.952635, 91.282526],
                    options: {
                        icon: "../assets/images/map-marker.png"
                    }
                },
                map: {
                    options: {
                        zoom: 14,
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        },
                        mapTypeControl: false,
                        scaleControl: false,
                        scrollwheel: false,
                        streetViewControl: false,
                        draggable: true,
                        styles: [{
                                "featureType": "administrative",
                                "elementType": "all",
                                "stylers": [{
                                    "saturation": "-100"
                                }]
                            },
                            {
                                "featureType": "administrative.province",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": 65
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": "50"
                                    },
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "all",
                                "stylers": [{
                                    "saturation": "-100"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "simplified"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "all",
                                "stylers": [{
                                    "lightness": "30"
                                }]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "all",
                                "stylers": [{
                                    "lightness": "40"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [{
                                        "hue": "#ffff00"
                                    },
                                    {
                                        "lightness": -25
                                    },
                                    {
                                        "saturation": -97
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "labels",
                                "stylers": [{
                                        "lightness": -25
                                    },
                                    {
                                        "saturation": -100
                                    }
                                ]
                            }
                        ]
                    }
                }
            });
        }

        if (contactmap.length) {

            // const gmCenterAddress = onridemap.attr("data-address");
            let gmMarkerAddress = contactmap.attr("data-address");


            contactmap.gmap3({
                action: "init",
                marker: {
                    address: gmMarkerAddress,
                    latLng: [22.952635, 91.282526],
                    options: {
                        icon: "../assets/images/map-marker-2.png"
                    }
                },
                map: {
                    options: {
                        zoom: 14,
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        },
                        mapTypeControl: false,
                        scaleControl: false,
                        scrollwheel: false,
                        streetViewControl: false,
                        draggable: true,
                        styles: [{
                                "featureType": "administrative",
                                "elementType": "all",
                                "stylers": [{
                                    "saturation": "-100"
                                }]
                            },
                            {
                                "featureType": "administrative.province",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": 65
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": "50"
                                    },
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "all",
                                "stylers": [{
                                    "saturation": "-100"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "simplified"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "all",
                                "stylers": [{
                                    "lightness": "30"
                                }]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "all",
                                "stylers": [{
                                    "lightness": "40"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [{
                                        "hue": "#ffff00"
                                    },
                                    {
                                        "lightness": -25
                                    },
                                    {
                                        "saturation": -97
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "labels",
                                "stylers": [{
                                        "lightness": -25
                                    },
                                    {
                                        "saturation": -100
                                    }
                                ]
                            }
                        ]
                    }
                }
            });
        }




    })(jQuery);
}