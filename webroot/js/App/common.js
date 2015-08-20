$(function(){
    $('#form-ajax').submit(function(){
    	
        var $this = $(this);
        var url = $this.attr('action');
        var $loader = $('#loader');
        var $btnSubmit = $('.btn-submit');
        $btnSubmit.attr('disabled', true).text('aguarde...');

        $loader.fadeIn('fast', function(){
            $.post(url, $this.serialize(), function(result){
                console.log(result);
            }, 'json')
            .always(function(){
                location.reload();
            });
        });
        return false;
    });
});