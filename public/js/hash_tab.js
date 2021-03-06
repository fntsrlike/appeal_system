$(function() {
  var ns_hash = {};

  ns_hash.case_id = 0;

  ns_hash.tab_hash = function() {
    var hash = window.location.hash;
    hash && ns_hash.tab_show( hash );

    $( '.nav a' ).click( function( e ) {
      var
      scrollmem = $('body').scrollTop();

      $( this ).tab( 'show' );
      window.location.hash = this.hash;
      $( 'html, body' ).scrollTop( scrollmem );
    });
  };

  ns_hash.tab_show = function( hash ) {
    if ( hash.search( '#appeal-view' ) == -1 ) {
      $( 'ul.nav a[href="' + hash + '"]' ).tab( 'show' );

    } else if ( hash.search( '#appeal-view-' ) == -1 ) {
      if ( ns_hash.case_id !== 0 ) {
        window.location.hash = window.location.hash + '-' + ns_hash.case_id;
      }
    } else {
      $( 'ul.nav a[href="#appeal-view"]' ).tab( 'show' );
      ns_hash.case_id = hash.substring( 13 );
      ns_appeal.cases.show( ns_hash.case_id )
    }
  };

  window.onhashchange = function() {
    var hash = window.location.hash;
    hash && ns_hash.tab_show( hash );
  };

  ns_hash.tab_hash();

});