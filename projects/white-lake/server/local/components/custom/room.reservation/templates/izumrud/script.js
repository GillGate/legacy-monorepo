let startDate = new Date();

$(document).ready(function () {
	paramSelection('booking__datepicker', 'date');
	$('.booking__datepicker').datepicker({
		dateFormat: 'dd.mm.yyyy',
		minDate: startDate,
		autoClose: true, // закрывает при выборе даты
		position: 'bottom center',
		onSelect: function (dateText, inst) {
			let dateInf = dateText.split(".");
			[dateInf[0], dateInf[2]] = [dateInf[2], dateInf[0]]
			let arrDate = dateInf[0] + '-' + dateInf[1] + '-' + dateInf[2];
			if (window.date == 'booking__datepicker_date_check') {
				window.checkDate = arrDate;
			} else if (window.date == 'booking__datepicker_date_out') {
				window.outDate = arrDate;
			}
		}
	});
});

$('.booking__btn').click(function (e) {
	let url = '?step=step2&objid=801&datein=' + window.checkDate + '&dateout=' + window.outDate + '&room_number=100'
	history.replaceState(null, ' ', url);
});