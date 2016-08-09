var InitElements = {
	init: function(){
		this.initDatePicker();
	},
	initDatePicker: function(){
		$('.date-picker').datepicker({
			autoclose: true,
			todayHighlight: true
		});
	}
}

$(function(){
	InitElements.init();
});