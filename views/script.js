;jQuery(document).ready(function ($) {
    var tabLinks = $('.faq-block .tab-links-list a');
    var tabContent = $('.faq-block .tab-content');
    var questionItem = $('.faq-block .faq-item .question');

    initFaqTabs();

    $(tabLinks).on('click', function(e) {
        var currentTabIndex = $(this).parent().index();
        e.preventDefault();

        if($(tabLinks).hasClass('active')) {
            $(tabLinks).removeClass('active');
        }

        $(this).addClass('active');

        $(tabContent).removeClass('active');
        $(tabContent[currentTabIndex]).addClass('active');
    });

    $(questionItem).on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).next().slideToggle();
    });

    function initFaqTabs() {
        $(tabLinks[0]).addClass('active');
        $(tabContent[0]).addClass('active');
    }
});