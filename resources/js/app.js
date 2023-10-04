$("#menuBT").click(function () {
    $("#pages").animate({
        height: 'toggle'
    });
    $("#menuBT").toggleClass("change");
});

$('.profil').click(function () {
    $('.toggle-profil').toggleClass('active')
})
$('main').click(function () {
    $('.toggle-profil').removeClass('active')
})

const close = document.getElementById('close');

close.addEventListener('click', function(){
    document.getElementById('toggle').classList.remove('active');
    document.getElementById('toggle-page').classList.remove('active');
})


