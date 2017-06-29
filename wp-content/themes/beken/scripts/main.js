var Beken = Beken || {};
/*
::::::::::: ::::    ::: ::::::::::: :::::::::::
    :+:     :+:+:   :+:     :+:         :+:
    +:+     :+:+:+  +:+     +:+         +:+
    +#+     +#+ +:+ +#+     +#+         +#+
    +#+     +#+  +#+#+#     +#+         +#+
    #+#     #+#   #+#+#     #+#         #+#
########### ###    #### ###########     ###
*/
(function(){
    Beken= {
        revealBlocks:void 0,
        mainMenu:void 0,
        init:function(){
            var _this = this;
            //Main Function
            console.log("INIT BEKEN");
            this.revealBlocks = $('.reveal');

            this.revealBlocks.each(function(i,el){
                var element = $(el);
                if(element.visible(true)){
                    element.addClass('stage-taken');
                }

            });

            _this.mainMenu = new Beken.Menu();
            $('.works-list-block').each(function(){
                var el = $(this);
                new Beken.WorksList(el);
            });
            $('.testimonials-block').each(function(){
                var el = $(this);
                new Beken.TestimonialSlider(el);
            });

            if(is.mobile() || is.ios() || is.android()){
                $('.list-block').addClass('mobile');
            }

            //ADD ON SCROLL reveal
            $(window).on('scroll',function(){
                _this.mainMenu.headerCollapse();
                _this.revealBlocks.each(function(i,el){
                    var element = $(el);
                    if(element.visible(true)){
                        element.addClass('take-stage');
                    }
                });
            });
        }
    };
    Beken.Menu = function(){
        var _this = this;
        _this.header = $('body > header');
        _this.mobileBtn = $('#mobile-btn');
        _this.menu = $('#menu');
        _this.state = 'closed';
        _this.init = function(){
            _this.mobileBtn.on('click',_this.onMobileBtnClickHandler);
        };

        _this.onMobileBtnClickHandler = function(){
            if(_this.mobileBtn.hasClass('open')){
                _this.mobileBtn.removeClass('open');
                _this.menu.removeClass('on');
                setTimeout(function(){
                    _this.menu.removeClass('open');
                },400);
            }else{
                _this.mobileBtn.addClass('open');
                _this.menu.addClass('open');
                setTimeout(function(){
                    _this.menu.addClass('on');
                },10);
            }

        }

        _this.headerCollapse = function(){
            if($(window).scrollTop() > 0){
                _this.header.addClass('collapse');
            }else{
                _this.header.removeClass('collapse');
            }
        };

        _this.init();
    };
    Beken.WorksList = function(el){
        var _this = this;
        _this.element = el;
        _this.items = _this.element.find('.item');
        _this.itemsHeader = _this.element.find('.item h3');

        _this.init = function(){
            _this.itemsHeader.on('click',_this.onItemHeaderClickHandler);
        };

        _this.onItemHeaderClickHandler = function(){
            var clicked = $(this);
            _this.element.find('.item.active .content').attr('style','');
            _this.items.removeClass('active');
            clicked.parent().parent().parent().addClass('active');
            var childs = clicked.parent().parent().parent().find('.content a');
            var height = 31*childs.length;

            clicked.parent().parent().parent().find('.content').css('max-height',height+50);
        };

        _this.init();
    };
    Beken.TestimonialSlider = function(el){
        var _this = this;
        _this.element = el;
        _this.slider = _this.element.find('.slider-container');
        _this.itemsContainer = _this.slider.find('.scrollpane');
        _this.items = _this.itemsContainer.find('.item');
        _this.counter = _this.element.find('.counter');
        _this.counterCurrent = _this.counter.find('.current');
        _this.counterTotal = _this.counter.find('.total');
        _this.current = 1;
        _this.timer = void 0;

        _this.onSliderTranslateStart = function(event){

        };

        _this.onSliderTranslateEnded = function(event){
            _this.current = event.item.index+1;
            _this.updateCounter();
        };

        _this.updateCounter = function(){
            _this.counterCurrent.text(_this.current);
        };

        _this.init = function(){
            _this.counterTotal.text('/'+_this.items.length);
            _this.counterCurrent.text(_this.current);
            _this.itemsContainer.owlCarousel({
                items:1,
                autoplay:true,
                rewind:true,
                smartSpeed:750,
                onTranslate:function(event){_this.onSliderTranslateStart(event)},
                onTranslated:function(event){_this.onSliderTranslateEnded(event)}
            });
        };

        _this.init();
    };
}());
