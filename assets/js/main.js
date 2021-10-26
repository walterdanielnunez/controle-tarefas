$(document).ready(function(){
    $(".error").click(function(){
        $(this).slideUp();
    });
    $("#hide_del_form").click(function(){
        $("#excluir_form").slideUp();
    });
});

function excluir(id, name){
    $("#excluir_id").val(id);
    $("#excluir_name").html(name);
    $("#excluir_form").slideDown();
    $(window).scrollTop(0);
}