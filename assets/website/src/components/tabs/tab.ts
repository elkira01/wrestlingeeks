import $ from 'jquery';

const titles = $('.tab-title');
const tabs = $('.tab-content');

$(window).on('load', () => {
    $('#tab-content-1').removeClass('hidden');
    $('#tab-title-1').addClass('active');
})
titles.on('click', function () {
    const index = titles.index(this);
    titles.removeClass('active');
    $(this).addClass('active');
    tabs.addClass('hidden');
    tabs.eq(index).removeClass('hidden');
})