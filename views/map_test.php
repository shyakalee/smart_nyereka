            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

                <script>
                    $(document).ready(function(){
                        $("#getUID").load("UIDContainer.php");
                        setInterval(function() {
                            $("#getUID").load("UIDContainer.php");
                        }, 500);
                    });
                </script>

                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Device Location</h4>
                                    <?php
                                    if (isset($_POST["submit_address"]))
                                    {
                                        $address = $_POST["address"];
                                        $address = str_replace(" ", "+", $address);
                                        ?>

                                        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
                                            
                                        <?php
                                    }

                                    if (isset($_POST["submit_coordinates"]))
                                    {
                                        //===================================
                                        // $string = '30.050719-1.978948';
                                        // $string = $_POST["splitted_values"];
                                        // $pos = 8;
                                        // $begin = substr($string, 0, $pos+1);
                                        // $end = substr($string, $pos+1);
                                        
                                        //===================================

                                        $latitude = $_POST["latitude"];
                                        $longitude = $_POST["longitude"];
                                        ?>

                                        <iframe id="map1" width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>

                                        <?php
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="main-content-inner">
                <div class="row text-left">
                <form method="POST">
                <div class="form-group">
                    
                    <input class="form-control" hidden type="search" name="address" placeholder="Type the location to search" id="example-search-input">

                    <input class="form-control" hidden type="text" name="splitted_values" placeholder="Keyword.." id="idvalues">
                    <textarea name="id" hidden id="getUID" rows="1" cols="10" required></textarea>

                </div>
              
                    <button type="submit" hidden name="submit_address" id="submit_address" class="btn btn-primary">Query Device</button>
                </form>

                <form method="POST">
                <div class="form-group">
                    
                    <input class="form-control" hidden id="longitude" type="search" value="" name="longitude" placeholder="Enter location.." id="example-search-input">
                </div>
                <div class="form-group">
                    
                    <input class="form-control" hidden id="latitude" type="search" name="latitude" placeholder="Type the location to search" id="example-search-input">
                </div>
                    <button type="submit" name="submit_coordinates" class="btn btn-primary">Query Device</button>
                </form>
                </div>
            </div>
            </div>

            

            
      
    <!-- page container area end -->
    <!-- offset area start -->
    
    <!-- offset area end -->
    <!-- maps Resources -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>

    <!-- <script>

    $(document).ready(function(){
    $("#submit_address").click(function () {
    var txt = $("#getUID").val(); 
    $("#idvalues").val(txt);
    //alert(txt); 
    });   
    });
    </script> -->

    <script>
        $( window ).on( "load", function() {
            var txt = $("#getUID").val(); 
        $("#idvalues").val(txt);
        let result1 = txt.slice(0, 9);
        let result2 = txt.slice(9, 19);
        $("#longitude").val(result1);
        $("#latitude").val(result2);
        });
    </script>

    <script>
    function initialize() {
        var e = {
                zoom: 15,
                scrollwheel: !1,
                center: new google.maps.LatLng(40.712764, -74.005667),
                styles: [{
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#1d2c4d"
                        }]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "color": "#8ec3b9"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "weight": 2
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#1a3646"
                        }]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#4b6878"
                        }]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text",
                        "stylers": [{
                                "saturation": 30
                            },
                            {
                                "lightness": -100
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#64779e"
                        }]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#4b6878"
                        }]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#334e87"
                        }]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#023e58"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#283d6a"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#6f9ba5"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#1d2c4d"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#023e58"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#3C7680"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#304a7d"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#98a5be"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#1d2c4d"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#2c6675"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#255763"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#b0d5ce"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#023e58"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#98a5be"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#1d2c4d"
                        }]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#283d6a"
                        }]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#3a4762"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#0e1626"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#0e0e26"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#4e6d70"
                        }]
                    }
                ]
            },

            l = new google.maps.Map(document.getElementById("google_map"), e);
        new google.maps.Marker({ position: l.getCenter(), animation: google.maps.Animation.BOUNCE, map: l })
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  

