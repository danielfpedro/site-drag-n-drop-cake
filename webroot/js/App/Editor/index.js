$(function(){
	fitWrapper();
	$(window).resize(function(){
		fitWrapper();
	});
	function fitWrapper(){
		var navbarH = 50;
		var w = $(window).width() + 'px';
		var h = ($(window).height() - navbarH) + 'px';

		console.log(w);

		$('.editor-wrapper').css({width: w, height: h, 'margin-top': navbarH});
	}

    $('#form-ajax-add-page').submit(function(){
    	
        var $this = $(this);
        var url = $this.attr('action');
        var $loader = $('#loader');
        var $btnSubmit = $('.btn-submit');
        $btnSubmit.attr('disabled', true).text('aguarde...');

        $loader.fadeIn('fast', function(){
            $.post(url, $this.serialize(), function(result){
                var url = $('#url').val();
                window.location = url + '/' + result.id;
            }, 'json')
            .fail(function(){
                location.reload();
            });
        });
        return false;
    });

    $('.dropdown-devices').find('ul li a').click(function(){
    	var icon = $(this).data('icon');
    	var $a = $('.dropdown-devices a span.main');
    	var classes = $a.attr('class');
    	
    	$a.removeClass(classes).addClass('main fa fa-' + icon);
    	
    	return false;
    });
});