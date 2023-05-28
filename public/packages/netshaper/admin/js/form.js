// TODO use angular
$(function() {
	$('#destroy_button').click(function() {
		if (confirm('Удалить без возможности восстановления?')) {
			$('#destroy_form').submit();
		}
	});
});
