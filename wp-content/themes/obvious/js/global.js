jQuery(document).ready(function($){

    /*///////////////////////////////
    ------- MENU BURGER MOBILE ANIMATION -------
    ///////////////////////////////*/

    var burger=true

        $('#burgerToggle').on('click',function(){
            if(burger==true){
                TweenMax.set('.navsite__mob--nav',{display:"block"});
                TweenMax.set('.block_1',{top:"10px"});
                TweenMax.set('.block_1',{transform:"rotate(45deg)"});
                TweenMax.set('.block_2',{opacity:0});
                TweenMax.set('.block_3',{top:"10px"});
                TweenMax.set('.block_3',{transform:"rotate(-45deg)"});
                burger=false;
             }else{
                TweenMax.set('.navsite__mob--nav',{display:"none"});
                TweenMax.set('.block_1',{top:"8px"});
                TweenMax.set('.block_1',{transform:"rotate(0deg)"});
                TweenMax.set('.block_2',{opacity:1});
                TweenMax.set('.block_2',{top:"0px"});
                TweenMax.set('.block_3',{top:"16px"});
                TweenMax.set('.block_3',{transform:"rotate(0deg)"});
                burger=true;
             }
        });
    
    
        /*///////////////////////////////
    ------- NAV ARTICLE PREV ET NEXT -------
    ///////////////////////////////*/
    $( ".btn__post--prev" ).mouseover(function() {
        $( ".btn--left--post p" ).css({display: 'block'} );
    });
    
    $( ".btn__post--prev" ).mouseout(function() {
        $( ".btn--left--post p" ).css({display: 'none'} );
    });
    
    $( ".btn__post--next" ).mouseover(function() {
        $( ".btn--right--post p" ).css({display: 'block'} );
    });
    $( ".btn__post--next" ).mouseout(function() {
        $( ".btn--right--post p" ).css({display: 'none'} );
    });
    
    /*///////////////////////////////
    ------- SCROLL TOP MESURÉ -------
    ///////////////////////////////*/
    
    
    //RECOLTE DU SCROLL 
    var w=$(window).width();
    var h=$(window).height();
    var currentOffset=$(window).scrollTop();
    
    $(window).scroll(function(){
    var currentOffset=$(window).scrollTop();
                // BLOCK ARTICLE 1 & SCROLL DOWN 
        
        if(currentOffset>=0 && currentOffset<=1250){
            $('.btn__post--next').css({"border-left":'solid .75px #FFF', "border-bottom": 'solid .75px #FFF',"border-top":'solid .75px #FFF', color: "#FFF"});
            $('.btn__post--prev').css({"border-right":'solid .75px #FFF', "border-bottom": 'solid .75px #FFF',"border-top":'solid .75px #FFF', color: "#FFF"});
            $('.btn--left--post p').css({color: "#FFF"});
            $('.btn--right--post p').css({color: "#FFF"});
            $('#btn1').fadeIn(500);
            $('#scroll-down').fadeIn(500);
            
        } else{
            $('.btn__post--next').css({"border-left":'solid .75px #101015', "border-bottom": 'solid .75px #101015',"border-top":'solid .75px #101015', color: "#101015"});
            $('.btn__post--prev').css({"border-right":'solid .75px #101015', "border-bottom": 'solid .75px #101015',"border-top":'solid .75px #101015', color: "#101015"});
            $('.btn--left--post p').css({color: "#101015"});
            $('.btn--right--post p').css({color: "#101015"});
            $('#btn1').fadeOut(350);
            $('#scroll-down').fadeOut(500);
        }
    });  
    
});