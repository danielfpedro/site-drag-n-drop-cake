<?= $this->assign('title', 'Editor')  ?>
<?= $this->Html->css('editor', ['inline' => false])  ?>

<div class="editor-wrapper">
	<div class="col-left">
	    <div style="height: 100%;overflow: auto;">
	    	Blocks
	    </div>
	</div>
	<div class="col-center">
	    oi
	</div>
	<div class="col-right">
	    oi
	</div>
</div>

<script type="text/javascript">
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
	});
</script>