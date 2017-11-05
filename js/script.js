var flag = true;
var i=0;
var flag1= false;
var flag2 = false;
var flag3 = false;
var flag4 = false;
var flag5 = false;
var flag6 = false;
var flag7 = false;
var likes = [0,0];
var id;
    $(document).ready(function () {

        $('#imgProject1').bind('mouseover',function () {
            $('#infoBmi').css('display','block');
        });
        $('#imgProject1').bind('mouseleave',function () {
            $('#infoBmi').css('display','none');
        });
        $('#imgProject2').bind('mouseover',function () {
            $('#infoShop').css('display','block');
        });
        $('#imgProject2').bind('mouseleave',function () {
            $('#infoShop').css('display','none');
        });
        $('#imgProject3').bind('mouseover',function () {
            $('#infoForum').css('display','block');
        });
        $('#imgProject3').bind('mouseleave',function () {
            $('#infoForum').css('display','none');
        });
    });

    function goToHome() {
        var positionBanner = 0;
        var position = positionBanner;
        var realPosition;
        var toScroll;
        var mobile = $('.navigationMobile');
        if(window.scrollY > position){
            realPosition = parseInt(window.scrollY) - parseInt(position);
            toScroll = position - 50;
        } else{
            realPosition = parseInt(position) - parseInt(position);
            toScroll = position - realPosition - 50;
        }
        $('html, body').stop().animate({
            scrollTop: toScroll
        },1000,"swing");
        mobile.hide('slide',{direction: 'right'});
        flag= true;
        showMenuIcon();
    }

    function goToSkills() {
        var positionSkills = $('.skills').offset().top;
        var position = positionSkills;
        var realPosition;
        var toScroll;
        var mobile = $('.navigationMobile');
        if(window.scrollY > position){
            realPosition = parseInt(window.scrollY) - parseInt(position);
            toScroll = position - 50;
        } else{
            realPosition = parseInt(position) - parseInt(position);
            toScroll = position - realPosition - 50;
        }
        console.log(toScroll);
        $('html, body').stop().animate({
            scrollTop: toScroll
        },1000,"swing");
        mobile.hide('slide',{direction: 'right'});
        flag= true;
        showMenuIcon();
    }

    function goToProjects() {
        var positionProjects = $('.projects').offset().top;
        var position = positionProjects;
        var realPosition;
        var toScroll;
        var mobile = $('.navigationMobile');
        if(window.scrollY > position){
            realPosition = parseInt(window.scrollY) - parseInt(position);
            toScroll = position - 50;
        } else{
            realPosition = parseInt(position) - parseInt(position);
            toScroll = position - realPosition - 50;
        }
        console.log(toScroll);
        $('html, body').stop().animate({
            scrollTop: toScroll
        },1000,"swing");
        mobile.hide('slide',{direction: 'right'});
        flag= true;
        showMenuIcon();
    }

    function goToContacts() {
        var positionContact = $('.contacts').offset().top;
        var position = positionContact;
        var realPosition;
        var toScroll;
        var mobile = $('.navigationMobile');
        if(window.scrollY > position){
            realPosition = parseInt(window.scrollY) - parseInt(position);
            toScroll = position - 50;
        } else{
            realPosition = parseInt(position) - parseInt(position);
            toScroll = position - realPosition - 50;
        }
        console.log(toScroll);
        $('html, body').stop().animate({
            scrollTop: toScroll
        },1000,"swing");
        mobile.hide('slide',{direction: 'right'});
        flag= true;
        showMenuIcon();
    }
    function goToAbout() {
        var positionAbout = $('.about').offset().top;
        var position = positionAbout;
        var realPosition;
        var toScroll;
        var mobile = $('.navigationMobile');
        if(window.scrollY > position){
            realPosition = parseInt(window.scrollY) - parseInt(position);
            toScroll = position - 50;
        } else{
            realPosition = parseInt(position) - parseInt(position);
            toScroll = position - realPosition - 50;
        }
        console.log(toScroll);
        $('html, body').stop().animate({
            scrollTop: toScroll
        },1000,"swing");
        mobile.hide('slide',{direction: 'right'});
        flag= true;
        showMenuIcon();
    }

    function scrolling() {
        var scrollTop = window.scrollY;
        var firstRow = parseInt($('.skills').offset().top) -400;
        var secondRow = firstRow + 150;
        var thirdRow = firstRow + 300;
        var fourthRow =firstRow + 450;
        var fifthRow = firstRow + 600;
        var sixthRow = firstRow + 750;

        var widthPage =  window.innerWidth;

        if(widthPage<768){
        } else{
            if(scrollTop>firstRow && flag2==false){
                $('#circle1').show('slide',{direction: 'right'},1000);
                $('#circle2').show('slide',{direction: 'left'},1000);
                flag2=true;
                console.log("first");
            } else if(scrollTop<firstRow && flag2==true){
                $('#circle1').hide('slide',{direction: 'right'},1000);
                $('#circle2').hide('slide',{direction: 'left'},1000);
                flag2=false;
                console.log("firstEnd");
            }
            if(scrollTop>secondRow && flag3==false){
                $('#circle3').show('slide',{direction: 'right'},1000);
                $('#circle4').show('slide',{direction: 'left'},1000);
                flag3=true;
                console.log("second");
            }else if(scrollTop<secondRow && flag3==true){
                $('#circle3').hide('slide', {direction: 'right'}, 1000);
                $('#circle4').hide('slide', {direction: 'left'}, 1000);
                flag3 = false;
                console.log("secondend");
            }
            if(scrollTop>thirdRow && flag4==false){
                $('#circle5').show('slide',{direction: 'right'},1000);
                $('#circle6').show('slide',{direction: 'left'},1000);
                flag4=true
                console.log("third");
            }else if(scrollTop<thirdRow && flag4==true){
                $('#circle5').hide('slide', {direction: 'right'}, 1000);
                $('#circle6').hide('slide', {direction: 'left'}, 1000);
                flag4 = false;
                console.log("thirdEnd");
            }
            if(scrollTop>fourthRow && flag5==false){
                $('#circle7').show('slide',{direction: 'right'},1000);
                $('#circle8').show('slide',{direction: 'left'},1000);
                flag5=true;
                console.log("fourth");
            }else if(scrollTop<fourthRow && flag5==true){
                $('#circle7').hide('slide',{direction: 'right'},1000);
                $('#circle8').hide('slide',{direction: 'left'},1000);
                flag5=false;
                console.log("fourthEnd");
            }
            if(scrollTop>fifthRow && flag6==false){
                $('#circle9').show('slide',{direction: 'right'},1000);
                $('#circle10').show('slide',{direction: 'left'},1000);
                flag6=true;
                console.log("fifth");
            }else if(scrollTop<fifthRow && flag6==true){
                $('#circle9').hide('slide', {direction: 'right'}, 1000);
                $('#circle10').hide('slide', {direction: 'left'}, 1000);
                flag6 = false;
                console.log("fifthEnd");
            }
            if(scrollTop>sixthRow && flag7==false){
                $('#circle11').show('slide',{direction: 'right'},1000);
                $('#circle12').show('slide',{direction: 'left'},1000);
                flag7=true;
                console.log("sixth");
            }else if(scrollTop<sixthRow && flag7==true){
                $('#circle11').hide('slide', {direction: 'right'}, 1000);
                $('#circle12').hide('slide', {direction: 'left'}, 1000);
                flag7 = false;
                console.log("sixthEnd");
            }
        }


        if(scrollTop>50 && flag1==false) {
            $('#navbar').stop().animate({
                backgroundColor: 'rgba(54,79,112,0.9)',
                borderBottom: '2px solid white'
            },1000,'linear');
            flag1=true;
        } else if(scrollTop<50 && flag1==true) {
        $('#navbar').stop().animate({
            backgroundColor:'rgba(100,100,100,0)',
            borderBottom: '0px solid white'
        },1000,'linear');
            flag1=false;
        }
    }


    function showMobileMenu() {
        var mobile = $('.navigationMobile');
        if(flag){
            mobile.show('slide',{direction: 'right'});
            $('#mobile1').hide('scale',400);
            setTimeout(function () {
                $('#mobile2').show('scale',400);
            },400);
            flag = false;
        } else if(!flag){
            mobile.hide('slide',{direction: 'right'});
            $('#mobile2').hide('scale',400);
            setTimeout(function () {
                $('#mobile1').show('scale',400);
            },400);
            flag= true;
        }
    }

    function showMenuIcon() {
        $('#mobile2').hide('scale',400);
        setTimeout(function () {
            $('#mobile1').show('scale',400);
        },400);
    }

    function addLike(id) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET","DataBase.php",true);
        xhr.send({id: id});
        xhr.onreadystatechange = function () {
            if(xhr.readyState===200){
                if(xhr.status===4){

                }
            }
        }
    }

    function getLikes() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET","DataBaseGet.php",true);
        xhr.send(null);
        xhr.onreadystatechange = function () {
            if(xhr.readyState===200){
                if(xhr.status===4){
                    likes = xhr.response;
                }
            }
        }
    }