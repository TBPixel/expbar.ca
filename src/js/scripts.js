// JQuery DOM Ready Initialzie
( function () {
    'use strict';

    // Prevents Google Maps overtaking scroll unless user selects area
    var mapView = {
        locationDOM: document.querySelector ( '.location' ),
        mapDOM: document.getElementById ( 'map' ),
        state: 'none',

        // Sets the pointer-events for the map
        changeMapState: function ( value ) {

            mapView.mapDOM.style.pointerEvents = value;
        },

        // Adds the listeners for functionality
        addEventListeners: function () {
            document.addEventListener ( 'click', function() { mapView.changeMapState ( 'none' ); });

            mapView.locationDOM.addEventListener ( 'click', function ( e ) {

                e.stopPropagation ();
                mapView.changeMapState ( 'auto' );
            });
        },

        init: function () {

            if ( mapView.locationDOM !== null && mapView.mapDOM !== null ) { mapView.addEventListeners (); }
            else return;
        }
    };

    // Init mapView
    mapView.init ();


    // Override Back-to-Top button
    var backToTop = {
        button: document.querySelector ( '.footer__back-to-top' ),

        scrollToTop: function ( e ) {
            e.preventDefault ();
            window.scrollTo ( 0, 0 );
        },

        addEventListener: function () {
            backToTop.button.addEventListener ( 'click', function ( e ) { backToTop.scrollToTop ( e ); } );
        },

        init: function () {
            if ( backToTop.button !== null ) { backToTop.addEventListener (); }
            else return;
        }
    };

    // Init backToTop
    backToTop.init ();
    

    // Load Webfonts
    WebFont.load({
        google: {
            families: ['Baloo Da', 'Lato:700,300', 'Open Sans:300,400,400i,600', 'Material Icons']
        }
    });

} ());



// Initialize Map
function initMap()
{
    var mapDiv = document.getElementById('map');

    var myLatLng = {lat: 49.282368, lng: -123.111155};

    var map = new google.maps.Map(mapDiv, {
        center: myLatLng,
        zoom: 18
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'EXP Restaurant + Bar!'
    });
}