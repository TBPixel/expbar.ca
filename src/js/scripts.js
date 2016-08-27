// JQuery DOM Ready Initialzie
$( function () {
    'use strict';

    // Maps are inactive initially
    var $locDOM = $( '.location' );
    var $mapDOM = $locDOM.find ( '#map' );


    function setMapState ( v ) {

        v = v || null;

        var css,
            state = $mapDOM.css( 'pointer-events' );


        if ( typeof v === 'string' )
        {
            css = v;
        }
        else
        {
            css = (state === 'none') ? 'auto' : 'none';
        }

        $mapDOM.css ( 'pointer-events', css );
    }


    $( document ).on ( 'click', function () { setMapState ( 'none' ); });

    $locDOM.on( 'click', function ( e ) {

        e.stopPropagation ();
        setMapState ();
    });
});