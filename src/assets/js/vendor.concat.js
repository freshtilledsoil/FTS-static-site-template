;(function($, w, doc){

  "use strict";

  // Local object for method references
  var Nav = {};

  // Namespace
  Nav.ns = "Navigation";

  /*
    Grab the screen size psuedo element content
  */

  Nav.isScreenSize = function( sizeString ) {

    var size = w.getComputedStyle(doc.body,':before').getPropertyValue('content');

    if( size && size.indexOf( sizeString ) !==-1 ) {
      return true;
    }

  };

  /*
    Anything you need to create the small screen namvigation
  */

  Nav.createSmallView = function( parentMenu, subMenu ) {

    // don't run this code if it already ran, please
    if( parentMenu.hasClass('responsive-nav') ) {
      return;
    }

    var anchorText = parentMenu.find('a').first().text();
    var idSlug = anchorText.toLowerCase().replace(/ /g,"-");
    var randomNumber= Math.floor( Math.random()*9999 );
    var slug = idSlug + randomNumber;
    var button;
    var buttonText;
    var inverseText;

    subMenu.attr('aria-expanded', 'false').attr('id', slug);
    parentMenu.addClass('is-expandable').addClass('responsive-nav');
    parentMenu.find('> a').first().after('<button type="button" aria-controls="' + slug + '" class="ui-toggle-button" data-text="close">open</button>');

    parentMenu.find('.ui-toggle-button').first().on('click', function() {

      button = $(this);
      buttonText = button.text();
      inverseText = button.attr('data-text');

      if( subMenu.attr('aria-expanded') === 'false' ) {

        subMenu.attr('aria-expanded', 'true');
        subMenu.focus();

      } else {

        subMenu.attr('aria-expanded', 'false');
        button.focus();

      }

      // toggle the button text
      button.attr('data-text', buttonText).text(inverseText);

    });

  }; // Nav.createSmallView

  /*
    Anything you need to do to remove elements that were just for small screen
  */

  Nav.destroySmallView = function( parentMenu, subMenu ) {

    subMenu.removeAttr('aria-expanded');
    parentMenu.removeClass('is-expandable');
    parentMenu.find('.ui-toggle-button').remove();
    parentMenu.removeClass('responsive-nav');

  }; // Nav.destroySmallView

  /*
    Blur event to close the menu when tabbing through
  */

  Nav.blur = function( self, parentContainer ) {

    parentContainer = self.closest('.menu-item.has-children');

    if( parentContainer.find('.sub-menu').find('ul > li').children(':focus').length === 0 ) {
      parentContainer.removeClass('child-has-focus');
    }

  } // Nav.blur

  /*
    Focus event to expose submenus while tabbing
  */

  Nav.focus = function ( self ) {

    self.closest('.menu-item.has-children').addClass('child-has-focus');

  } // Nav.focus

  /*
    Small screen menu toggle
  */

  $('.nav-menu-toggle').on('click', function(e) {

    e.preventDefault();

    var self = $(this);
    var body = $('body');
    var targetId = self.attr('aria-controls');
    var targetZone = $('#' + targetId);

    if( body.hasClass('nav-is-active') ) {

      self.trigger('navclose');
      body.removeClass('nav-is-active');
      targetZone.attr('aria-expanded', 'false');

    } else {

      self.trigger('navopen');
      body.addClass('nav-is-active');
      targetZone.attr('aria-expanded', 'true').focus();

    }

  }); // menu toggle

  /*
    Loop over all the menu items to see if they have child nodes
  */

  $('.menu-item').each(function() {

    var self = $(this);
    var menuChildren = self.children().length;

    // check to see if any menus have children
    if(menuChildren > 1) {

      self.addClass('has-children');

    }

  }); // each menu-item

  /*
    Loop through the sub menus
  */

  if( $('.menu-item.has-children').length > 0 ) {

    $('.menu-item.has-children').each(function() {

      var self = $(this);
      var parentMenu = self;
      var subMenu = self.find('.sub-menu').first();
      var subMenuAnchor = subMenu.find('a');
      var parentContainer;

      // focus
      subMenuAnchor.on('focus', function() {
        Nav.focus( $(this) );
      });

      // blur
      subMenuAnchor.on('blur', function() {
        Nav.blur( $(this), parentContainer );
      }); // blur event

      // create small screen navigation
      if( Nav.isScreenSize( 'mediumscreen' ) || Nav.isScreenSize( 'smallscreen' ) ) {
        Nav.createSmallView(parentMenu, subMenu);
      }

    }); // each()

    /*
      Resize event to create and destory the navigation
    */

    $(w).on('resize', function() {

      if( Nav.isScreenSize( 'mediumscreen' ) || Nav.isScreenSize( 'smallscreen' ) ) {

        var parentMenu;
        var subMenu

        $('.menu-item.has-children').each(function() {

          parentMenu = $(this);
          subMenu = parentMenu.find('.sub-menu');

          Nav.createSmallView( parentMenu, subMenu );

        }); // each menu with children

      } else {

        $('.menu-item.has-children').each(function() {

          parentMenu = $(this);
          subMenu = parentMenu.find('.sub-menu');

          Nav.destroySmallView( parentMenu, subMenu );

        }); // each menu with children

      }

    }); // resize

  }// if has-children

} ( jQuery, this, this.document ));
/*! SVG Icon Sprite Polyfill for IE9+
 * Copyright 2015 Tim Wright
 * Licensed under MIT
 * https://github.com/timwright12/SVG-Icon-Sprite-Polyfill/
 * 
 * HTML Example Usage:
 * 
 * <svg role="img" aria-label="Golf clubs in a bag" class="icon icon-add-to-my-bag">
 *   <title>Golf clubs in a bag</title>
 *   <use xlink:href="img/svg-defs.svg#icon-add-to-my-bag"></use>
 * </svg>
 */

;(function (doc) {
  
  // Enable strict mode
  "use strict";
  
  // Local object for method references
  var App = {};
  
  // A proper namespace
  App.ns = "SVG Sprite Polyfill";
  
  // Ajax that isn't jquery?!?!
  App.ajax = function(loopObj, callback) {
    
    var request = new XMLHttpRequest();
    var response;
    
    request.open('GET', loopObj, true);
      
      request.onload = function() {
        if (request.status >= 200 && request.status < 400) {

          response = request.responseText;
          
          if (typeof callback === 'function') {
            callback.call(this, response);
          }
          
        } else {
          
          console.log('Error reaching the server');
        
        }
        
      };
      
      request.onerror = function() {
        
        console.log('Connection error');
      
      };
      
      request.send();
    
  }; // Ajax
  
  // Start the application
  App.init = function() {
    
    // Set up and cache variables
    var svgUse = doc.querySelectorAll("svg > use");
    var fragment = App.create('<div id="svg-poly-target" style="position: absolute;height: 0; width: 0;"></div>');
    var svgUrls = [];
    var attrArray = [];
    var url;
    var hash;
    var i;
    var j;
    var obj;
    var loopObj;
    var attr;
    
    // Insert the document fragment catch the contents of the SVG
    doc.body.insertBefore(fragment, doc.body.childNodes[0]);
    
    // Loop through all the svg <use> elements
    for (i = 0; i < svgUse.length; i = i + 1) {
      
      obj = svgUse[i];
      attr = obj.getAttribute('xlink:href');
      attrArray = attr.split('#');
      url = attrArray[0];
      hash = attrArray[1];
      
      if( url ) {
        svgUrls.push( url );
        obj.setAttribute('xlink:href', '#' + hash);
      }
      
    } // for
    
    // Remove duplicate URLs from the array so we're not making double Ajax calls
    svgUrls = svgUrls.filter( function( item, pos ) {
      return svgUrls.indexOf(item) == pos;
    });
    
    // Loop through all the URLs in the Array
    for (j = 0; j < svgUrls.length; j = j + 1) {
      
      loopObj = svgUrls[j];
      
      App.ajax( loopObj, function( response ) {
        doc.getElementById('svg-poly-target').innerHTML += response;
      });

    } // for

  }; // App.init
  
  // Helper function to create a document fragment
  
  App.create = function( htmlStr ) {

    var frag = doc.createDocumentFragment();
    var temp = doc.createElement('div');
    
    temp.innerHTML = htmlStr;
    
    while ( temp.firstChild ) {
      frag.appendChild(temp.firstChild);
    }
    
    return frag;

  };
  
  // Only use it in IE, this should be a feature detect, but... I'm not sure what the feature is to detect.
  
  /MSIE|Trident/.test(navigator.userAgent) && doc.addEventListener('DOMContentLoaded', function () {
  
    App.init();
  
  });

} )( this.document );