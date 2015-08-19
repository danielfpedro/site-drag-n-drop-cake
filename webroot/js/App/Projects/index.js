$(function(){
    $('form').submit(function(){
        var $this = $(this);
        var url = $this.attr('action');
        var $loader = $('#loader');
        $('.btn-add').attr('disabled', true).text('Salvando, aguarde...');

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