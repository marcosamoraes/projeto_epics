$(document).ready(function() {
	$('.data-nascimento-mask').mask('00/00/0000');
	$('.cpf-mask').mask('000.000.000-00');

	var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

    if($('.celular-mask').length > 0){
	    $('.celular-mask').mask(SPMaskBehavior, spOptions);
	}
});