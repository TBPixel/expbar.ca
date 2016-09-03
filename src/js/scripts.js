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


// Events Section of Page
/*

    JAVASCRIPT CODE TO BE USED IN DEMO ONLY

    
var eventData = {
    eventsDOM: document.querySelector ( '.events__list' ),
    list: [],
    app_id: '199372583810994',
    app_secret: 'b3c665126654faadb0fb6b380c31895d',

    getData: function ( callback ) {

        FB.api(
            '/expbar/events?limit=3&access_token='+ eventData.app_id +'|' + eventData.app_secret,
            'GET',
            {"fields":"name,start_time,cover"},
            function ( response ) {
                eventData.list = response.data;
                eventData.appendData ();
            }
        );
    },

    appendData: function () {

        // Loop over all events returend in the list
        Array.prototype.forEach.call ( eventData.list , function ( el, i ) {

            // Format Date
            var date = new Date ( el.start_time );
            var formattedDate = (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear();


            // Create Element Nodes
            var list_el             =   document.createElement      ( 'LI' );
            var list_el_a           =   document.createElement      ( 'A' );

            var list_el_span        =   document.createElement      ( 'SPAN' );
            var list_el_text        =   document.createTextNode     ( el.name );

            var list_el_image       =   document.createElement      ( 'IMG' );

            var list_el_time        =   document.createElement      ( 'TIME' );
            var list_el_time_text   =   document.createTextNode     ( formattedDate );


            // Set Element Attributes
            list_el_a.setAttribute      ( 'href', 'https://www.facebook.com/events/' + el.id );
            list_el_image.setAttribute  ( 'src', el.cover.source );
            list_el_image.setAttribute  ( 'alt', el.name );
            list_el_time.setAttribute   ( 'datetime', el.start_time );

            // Set Element Classes
            list_el.classList.add       ( 'events__item' );
            list_el_a.classList.add     ( 'events__link' );
            list_el_image.classList.add ( 'events__image' );
            list_el_span.classList.add  ( 'events__text' );
            list_el_time.classList.add  ( 'events__date' );


            // Concatenate Elements
            list_el.appendChild         ( list_el_a );

            // Append Elements Inside Link
            list_el_a.appendChild       ( list_el_image );
            list_el_a.appendChild       ( list_el_span );
            list_el_a.appendChild       ( list_el_time );

            // Append Text into Span
            list_el_span.appendChild    ( list_el_text );

            // Append Text into Time
            list_el_time.appendChild    ( list_el_time_text );

            // Append Time Element outside of Link
            list_el.appendChild         ( list_el_time );


            // Append Final Elements to List
            eventData.eventsDOM.appendChild ( list_el );
        });
    },

    logData: function () {
        console.log ( eventData.list );
    },
};

// Fetch and add event data to page
// eventData.getData ( eventData.appendData );
*/