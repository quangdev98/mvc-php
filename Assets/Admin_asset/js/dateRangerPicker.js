// daterangerpicker
	$(function() {
	  $('input[name="datefilter"]').daterangepicker({
	      autoUpdateInput: false,
	      autoApply: true,
	      timePicker: true,
	      timePicker24Hour:true,
	      singleDatePicker: true,
	      locale: {
	          format: 'MM/DD/YYYY hh:mm'
	      }

	  });
	  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
	      $(this).val(picker.startDate.format('MM/DD/YYYY hh:mm'));
	  });

	});