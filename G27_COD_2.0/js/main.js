$(function(){
    $('section.mis_platos form.formulario').hide();
    $('section.perfil .contenedor_formulario').hide();
 $('div.plato_nuevo div.button').click(function (e) {
     e.preventDefault();
     var padre= $(this).parent()
     $(padre).slideUp();
     $('form.formulario').slideDown();
     
 });
 $('section.perfil div.contenedor_formulario_inicio div.button').click(function (e) {
    e.preventDefault();
    var padre= $(this).parent()
    $(padre).hide();
    $('.contenedor_formulario').show();
    
});
    $('.platito-info').colorbox({inline:true, width:"50%"});
    
});