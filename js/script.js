(function ($) {
	$("#footer-menu").hide(); //Скрытие окна ошибки, если не введены данные в input
	/*Действия, при загрузке документа */
	$(document).ready(function () {
		update_content();
	})
	/*Удаление необходимых валют*/
	$(document).on('click', '.btn.btn-info.remove', function () {
		event.preventDefault();
		var button_url = this.value;
		var id = $(this).attr('name');
		$.get(
			button_url,
			{
			  param: id
			},
		function onAjaxSuccess(data)
		{
  			update_content();
		})
	})
	/*Добавление новых валют*/
	$(document).on("submit", "form", function (e) {
		event.preventDefault();
		var name_currency = $("#test option:selected").text();
		var code_currency = $("#test").val();
		$("#name").val(name_currency);
		$("#code").val(code_currency);
		if (!/Выберите одну из/.test($("#test option:selected").text())) {
			$.ajax({
				type: $(this).attr('method'),
				url: $(this).attr('action'),
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function (result) {
					update_content();
				},
			});
		} else {
			$("#footer-menu").show(100)

			function WarningClose() {
				$("#footer-menu").hide(100)
			}
			setTimeout(WarningClose, 600);
		}
	})
	/*Обновление контента на странице*/
	function update_content() {

		$.ajax({
			type: 'post',
			url: 'modules/content.php',
			contentType: false,
			cache: false,
			processData: false,
			success: function (result) {
				document.getElementById('cont').innerHTML = result;
			},
		});
	}
})(jQuery);