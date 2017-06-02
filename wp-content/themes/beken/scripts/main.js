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
        _this.init = function(){

        };

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
}());
