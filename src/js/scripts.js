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



/*! loadCSS: load a CSS file asynchronously. [c]2016 @scottjehl, Filament Group, Inc. Licensed MIT */
(function(w){
    "use strict";
    /* exported loadCSS */
    var loadCSS = function( href, before, media ){
        // Arguments explained:
        // `href` [REQUIRED] is the URL for your CSS file.
        // `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
            // By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
        // `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
        var doc = w.document;
        var ss = doc.createElement( "link" );
        var ref;
        if( before ){
            ref = before;
        }
        else {
            var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
            ref = refs[ refs.length - 1];
        }

        var sheets = doc.styleSheets;
        ss.rel = "stylesheet";
        ss.href = href;
        // temporarily set media to something inapplicable to ensure it'll fetch without blocking render
        ss.media = "only x";

        // wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
        function ready( cb ){
            if( doc.body ){
                return cb();
            }
            setTimeout(function(){
                ready( cb );
            });
        }
        // Inject link
            // Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
            // Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
        ready( function(){
            ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
        });
        // A method (exposed on return object for external use) that mimics onload by polling document.styleSheets until it includes the new sheet.
        var onloadcssdefined = function( cb ){
            var resolvedHref = ss.href;
            var i = sheets.length;
            while( i-- ){
                if( sheets[ i ].href === resolvedHref ){
                    return cb();
                }
            }
            setTimeout(function() {
                onloadcssdefined( cb );
            });
        };

        function loadCB(){
            if( ss.addEventListener ){
                ss.removeEventListener( "load", loadCB );
            }
            ss.media = media || "all";
        }

        // once loaded, set link's media back to `all` so that the stylesheet applies once it loads
        if( ss.addEventListener ){
            ss.addEventListener( "load", loadCB);
        }
        ss.onloadcssdefined = onloadcssdefined;
        onloadcssdefined( loadCB );
        return ss;
    };
    // commonjs
    if( typeof exports !== "undefined" ){
        exports.loadCSS = loadCSS;
    }
    else {
        w.loadCSS = loadCSS;
    }
}( typeof global !== "undefined" ? global : this ));





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