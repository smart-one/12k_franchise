/**
* --------------------------------------------------------------------------------------------------
* Main.js functionality
* --------------------------------------------------------------------------------------------------
*/
'use strict';

$(document).ready(function(){

  $("input[type='tel']").mask("+7 (999) 999-9999");


/**
* --------------------------------------------------------------------------------------------------
* Site scrolling
* --------------------------------------------------------------------------------------------------
*/

  var scrollView = $("body");

  $("header").on("click", "a", function(e){

    e.preventDefault();
    var destination = $(this).attr('href');
    scrollView.animate({scrollTop: $(destination).position().top}, 600);

  });

});