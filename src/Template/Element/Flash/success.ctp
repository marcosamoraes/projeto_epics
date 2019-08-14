<style type="text/css">
	.alert {
		z-index: 1030;
	}
</style>

<div class="alert alert-success">
    <button type="button" aria-hidden="true" class="close">×</button>
    <span><?= ($message) ?></span>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click', '.close', function() {
			$('.alert').slideUp(1000);
		});
		
		setTimeout(function() {
			$('.alert').slideUp(1000);
	   	}, 2000);	
	});
</script>