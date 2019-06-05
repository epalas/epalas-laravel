/*$("#filter .btn-light").on('click', event => {

    if ($(event.currentTarget).hasClass("active")) {
    $(event.currentTarget).removeClass("active");

    // remise à zéro
    $("#red img").attr('src', "img/pictos/vin.svg");
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
    $("#red img").attr('src', "img/pictos/vin.svg");
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
        $(".active img").attr('src',"{{asset(img/pictos/picto_color/red.svg)}}");
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
});*/


