(function(){
var app = angular.module('highways',[]);

app.controller('EventsController',function($http){

/*
var highways = this;
highways.contents = [];
$http.get('json/contents.json').success(function(data){
  highways.contents = data;
});*/

this.scrolling = function(x,y){
  $(window).scroll(function(){
   var hT = $(x).offset().top;
   hH = $(x).outerHeight(),
   wH = $(window).height(),
   wS = $(this).scrollTop();
    //console.log((hT-wH) , wS);
   if (wS > (hT+hH-wH+300)){
    $(x).fadeIn(y);
    /*
            $(x).animate({
            height: '+=2%',
            width: '+=2%'
        });
    */
    /*
    
    //Use this for the text inside the event logos
    
    var e = $(x);
    e.animate({width: '23%'}, "fast");

    */
   }
});
};


this.controlScrolling = function(){
  this.scrolling("#e1", 4000);
  this.scrolling("#b1", 4000);
  this.scrolling("#e2", 4000);
  this.scrolling("#e3", 6000);
  this.scrolling("#e4", 6000);
  this.scrolling("#e5", 8000);
  this.scrolling("#e6", 8000);    
  this.scrolling("#e7", 10000);
  this.scrolling("#e8", 1000);
  this.scrolling("#e9", 12000);
  this.scrolling("#e10", 12000);
  this.scrolling("#e11", 12000);
  this.scrolling("#e12", 12000);
  this.scrolling("#e13", 12000);
  this.scrolling("#e14", 12000);
  this.scrolling("#e15", 12000);
}

/*
this.register = function(){

}*/

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $(".button-collapse").sideNav();
     $('.tooltipped').tooltip({delay: 50});
    $('.modal').modal();
    $('select').material_select();

  });

  $('#modal1').modal('open');
  $('#modal1').modal('close');
  $('#login').modal('open');
  $('#login').modal('close');
  $('#signup').modal('open');
  $('#signup').modal('close');
    $('#ev2').modal('open');
  $('#ev2').modal('close');
  $('#ev3').modal('open');
  $('#ev3').modal('close');
$('#ev4').modal('open');
  $('#ev4').modal('close');
  $('#ev4').modal('open');
  $('#ev4').modal('close');
  $('#ev5').modal('open');
  $('#ev5').modal('close');
  $('#ev6').modal('open');
  $('#ev6').modal('close');
  $('#ev7').modal('open');
  $('#ev7').modal('close');
  $('#ev8').modal('open');
  $('#ev8').modal('close');
  $('#ev9').modal('open');
  $('#ev9').modal('close');
  $('#ev10').modal('open');
  $('#ev10').modal('close');
  $('#ev11').modal('open');
  $('#ev11').modal('close');
  $('#ev12').modal('open');
  $('#ev12').modal('close');
  $('#ev13').modal('open');
  $('#ev13').modal('close');
  $('#ev14').modal('open');
  $('#ev14').modal('close');
  $('#ev15').modal('open');
  $('#ev15').modal('close');
});

/*
app.controller('AdminController',function($http){

$(document).ready(function(){
  $('select').material_select();
});

this.showUser = function(str,x,y) {
  if (str=="") {
    document.getElementById(x).innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById(x).innerHTML=this.responseText;
    }
  }
  console.log(str);
  xmlhttp.open("GET",y+str,true);
  xmlhttp.send();
}

});*/

})();


/*
var p1 = $("#block");
var position1 = p1.position();
console.log(position1);

var p2 = $("#car");
var position2 = p2.position();
console.log(position2);
*/


/*
$(window).scroll(function() {
   var hT = $('#e1').offset().top,
       hH = $('#e1').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
    //console.log((hT-wH) , wS);
   if (wS > (hT+hH-wH)){
    $('#e1').fadeIn(2000);
   }
});

$(window).scroll(function() {
   var hT = $('#e2').offset().top,
       hH = $('#e2').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
    //console.log((hT-wH) , wS);
   if (wS > (hT+hH-wH)){
    $('#e2').fadeIn(2000);
   }
});
*/

