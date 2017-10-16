    var flag = true;

    var likes = [0,0];


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
        console.log(toScroll);
        $('html, body').stop().animate({
            scrollTop: toScroll
        },1000,"swing");
        mobile.hide('slide',{direction: 'right'});
        flag= true;
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

    }

    function scrolling() {
        var scrollTop = window.scrollY;

        if(scrollTop>50){
            $('#navbar').addClass('navbar-fixed-top').css({
                backgroundColor: 'rgba(100,100,100,0.7)',
                borderBottom: '2px solid white'
            });
            $('#mobile').addClass('navbar-fixed-top');
        } else{
            $('#navbar').removeClass('navbar-fixed-top').css({
                backgroundColor:'rgba(100,100,100,0)',
                borderBottom: '0px solid white'
            });
            $('#mobile').removeClass('navbar-fixed-top');
        }
    }

    $('.project').each(function () {
        $('.imgProject').bind('mouseover',function () {
            var button = "<div class='button-group' style='position:relative;'><span style='cursor:pointer;border: 2px solid white;' class='glyphicon glyphicon-search'></span></div>"
            var body = document.getElementsByTagName('body');
            var width = body.width;
            $(this).animate({
                width: '370px',
                height: '320px',
                border: '2px solid white',
                display:'block',
                transition: 'width 2s'
            },100,'linear');
            $('.hover').html(button).animate({
                display:'block'
            },1000,'linear');
        });
        $('.imgProject').bind('mouseleave',function () {
            var button = "<div class='button-group' style='position:relative;'><span style='cursor:pointer;border: 2px solid white;' class='glyphicon glyphicon-search'></span></div>"
            var body = document.getElementsByTagName('body');
            var width = body.width;
            $(this).animate({
                width: '360px',
                height: '300px',
                display:'none',
                transition: 'width 2s'
            },1000,'linear');
            $('.hover').html(button);
        })
    });

    function showMobileMenu() {
        var mobile = $('.navigationMobile');
        if(flag){
            mobile.show('slide',{direction: 'right'});
            flag = false;
        } else if(!flag){
            mobile.hide('slide',{direction: 'right'});
            flag= true;
        }
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