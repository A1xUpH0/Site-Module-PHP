var  main = document.getElementsByTagName("main");

if(window.innerHeight > window.innerWidth){
    main[0].setAttribute ('id','Portrait');
}
else {
    main[0].setAttribute ('id','Paysage')
    $('main').on('wheel', function(e){
        e.preventDefault();
        $(this).scrollLeft($(this).scrollLeft() + e.originalEvent.deltaY);
    });
}

window.addEventListener('orientationchange',(function() {
    location.reload(true);
}));