/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

$(document).ready(function() {
    
    /*drop down faq list*/
   
$("p#faqlist").hide();
    
    $(".faq").on("click", function () {
        
    $(this).toggleClass("open").next().slideToggle();
});
    
    $("p#details").hide();
    
    $(".course").on("click", function () {
        
    $(this).toggleClass("open").next().slideToggle();
    });
});