function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}


var arr = [];
var compArr = [null];
var i = 1;

$('.score').html("Ваш счет : " + i)

$(document).ready(function () {
    $('button').click(function () {
        var clickId = $(this).prop('id');
        if ($(this).is(':empty')) {
            $(this).html("<b>X</b>")
            arr.push(clickId)

            $.post( "tictac_controller.php", { 'data[]': arr,'dataComp[]': compArr })
                .done(function( data ) {
                    compArr.push(data)
                    if (isNumeric(data)){
                        $('#' + data).html( "<b>O</b>" )
                    }else if (data === 'cross' || data === 'zero' || data === 'draw') {
                        arr = [];
                        compArr = [null];
                        $('.tictac').html("")
                        if (data === 'cross'){
                            i++
                        }else if (data === 'zero'){
                            if  (i === 1){
                                return null
                            }
                            i--
                        }else {
                            return null
                        }
                        $('.score').html("Ваш счет : " + i)
                    }
                });

        } else {
            return null
        }
    });
});


$(function(){
    $("#send").click(function() {
        name = $('#name').val();
        $.post( "save_score.php", { 'name': name,'score': i })
            .done(function( data ) {
                alert('Ваш счет сохранен')
            })
    });
});