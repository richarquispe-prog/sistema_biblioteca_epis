// ========================================================================= //
//  Porfolio isotope and filter
// ========================================================================= //
function buscar_datos(consultar) {
    $.ajax({
            url: '../Model/conexion.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta: consulta },
        })
        .done(function(respuesta) {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
}

$(window).load(function() {

    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-thumbnail',
        layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('keyup', function() {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');

        portfolioIsotope.isotope({ filter: $(this).data('filter') });
    });

})