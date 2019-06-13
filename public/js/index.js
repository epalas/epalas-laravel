/*$("#filter .btn-light").on('click', event => {


    if ($(event.currentTarget).hasClass("active")) {
    $(event.currentTarget).removeClass("active");

        // remise à zéro
    $("#red img").attr('src','img/pictos/vin.svg');
    $("#white img").attr('src','img/pictos/vin.svg');
    $("#rosy img").attr('src','img/pictos/vin.svg');
    $("#mouss img").attr('src','img/pictos/mousseux.svg');
    $("#bio img").attr('src','img/pictos/bio.svg');
    $("#prim img").attr('src','img/pictos/primeur.svg');
    $("#promo img").attr('src','img/pictos/promo.svg');
    $("#new img").attr('src','img/pictos/nouveau.svg');
    $("#end img").attr('src','img/pictos/fin.svg');

   } else {
    $("#filter .active").removeClass("active");
    $(event.currentTarget).addClass("active");
    let alt = $(".active img").attr('alt');

    // remise à zéro
    $("#red img").attr('src','img/pictos/vin.svg');
    $("#white img").attr('src','img/pictos/vin.svg');
    $("#rosy img").attr('src','img/pictos/vin.svg');
    $("#mouss img").attr('src','img/pictos/mousseux.svg');
    $("#bio img").attr('src','img/pictos/bio.svg');
    $("#prim img").attr('src','img/pictos/primeur.svg');
    $("#promo img").attr('src','img/pictos/promo.svg');
    $("#new img").attr('src','img/pictos/nouveau.svg');
    $("#end img").attr('src','img/pictos/fin.svg');

// ajout de la nouvelle photo
switch(alt) {
    case 'Rouge':
        $(".active img").attr('src','img/pictos/picto_color/red.svg');
    break;
    case 'Blanc':
        $(".active img").attr('src','img/pictos/picto_color/white.svg');
    break;
    case 'Rosé':
        $(".active img").attr('src','img/pictos/picto_color/rosy.svg');
    break;
    case 'Mousseux':
        $(".active img").attr('src','img/pictos/picto_color/champain.svg');
    break;
    case 'Bio':
        $(".active img").attr('src','img/pictos/picto_color/bio-green.svg');
    break;
    case 'Primeur':
        $(".active img").attr('src','img/pictos/picto_color/primeur-color.svg');
    break;
    case 'Promo':
        $(".active img").attr('src','img/pictos/picto_color/promo-red.svg');
    break;
    case 'Nouveau':
        $(".active img").attr('src','img/pictos/picto_color/new-red.svg');
    break;
    case 'Fin de série':
        $(".active img").attr('src','img/pictos/picto_color/end-red.svg');
    break;
  default:
    }
}
});
*/

// hover cart vin
$(document).ready(function(){
    $('.card').hover(function(){
        $(this).toggleClass('red-magic');
    });
});

// filtre cliqué
$("#filter .active").on('click', event => {

event.preventDefault();
window.location.href = $('#filter').data('href');

});

// formulaire contact
$("#send").on('click', event => {

event.preventDefault();
$('#advertise').removeClass('hidden');

});

// page filtres
$(document).ready(function(){
        
    // liste déroulante pays
    $("#paysListe a").click( function() {
    var pays = $(this).text();
        $('.carte_vins').each(function() {
            $(this).hide();
            $('#contenant > div').find("[data-pays='" + pays + "']").show();
            $('#grpPays button').text(pays);
        });
    });

    //liste déroulante region
    $("#regionListe a").click( function() {
    var region = $(this).text();
    $('.carte_vins').each(function() {
            $(this).hide();
            $('#contenant > div').find("[data-region='" + region + "']").show();
            $('#grpRegions button').text(region);
        });
    });

    $("#prixListe a").click( function() {
    var prix = $(this).text();
            $('#grpPrix button').text(prix);
    });

});
