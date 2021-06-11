(function ($) {
	$(document).ready(function () {
		var vwlcBtn = $(".js-vwlc-button-wrapper");
		$(".customize-save-button-wrapper").prepend(vwlcBtn);
		vwlcBtn.css("display", "inline");
		vwlcBtn.find("input[type=checkbox]").on("change", function () {
			if (this.checked) {
				$(".js-vwlc-button").attr("target", "_blank");
			} else {
				$(".js-vwlc-button").attr("target", "");
			}
		});
	});
})(jQuery);
