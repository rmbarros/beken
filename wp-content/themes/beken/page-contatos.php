<?php
/*
* Template Name: Contatos
*/
    get_header();
?>
<div class="page-container">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }

    ?>
    <section class="bk-block contactos-map">
        <article class="grid-container">
            <div class="grid-inner">
                <div class="row">
                    <div class="col-6-12 col-tm-5-12 col-m-12-12 address">
                        <h3>Office</h3>
                        <p>
                            Rua de Pedrouços, n37 <br>
                            1400-038 Lisboa<br>
                            +351 937 213 876
                        </p>
                    </div>
                    <div class="col-3-12 col-tm-3-12 col-m-12-12 social">
                        <h3>Follow</h3>
                        <ul>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                            <li>
                                <a href="#">LinkedIn</a>
                            </li>
                            <li>
                                <a href="#">Facebook</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-3-12 col-tm-4-12 col-m-12-12 contact">
                        <h3>New Business</h3>
                        <p>
                            Interested in working with us? <br>
                            Please contact: <a href="mailTo:ines.beken@ifcomunicacao.com">ines.beken@ifcomunicacao.com</a>
                        </p>
                    </div>
                </div>

            </div>
            <div id="map"></div>
        </article>
    </section>
    <script>
      function initMap() {
        var uluru = {lat: 38.695301, lng: -9.217377};
        var map = new google.maps.Map(document.getElementById('map'), {
            styles:[
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                }
            ],
            zoom: 14,
            disableDefaultUI:true,
            center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCERnV9hPG60v5f7hT5jyD8BzGAY5rtnms&callback=initMap">
    </script>
</div>
