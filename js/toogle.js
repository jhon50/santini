var main_nav = $('#main-nav');
var menu_toggle = $('#mobile-menu-toggle');

if(Modernizr.csstransitions){
  // CSS Class toggles where transitions are supported 
  menu_toggle.click(function(){
    main_nav.toggleClass('open');
    main_nav.toggleClass('closed');
  });
} else{
  // Good old slideToggle for everybody else
  menu_toggle.click(function(){
    main_nav.slideToggle(200);
  });
}