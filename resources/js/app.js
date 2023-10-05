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


// Écouteur d'événement pour détecter les changements dans la liste déroulante
document.getElementById('cursus-dropdown').addEventListener('change', function () {
    // Récupérer la valeur sélectionnée
    var selectedValue = this.value;
    // Rediriger vers la nouvelle URL avec la valeur sélectionnée
    window.location.href = 'votre_page.php?cursus=' + selectedValue;
});

