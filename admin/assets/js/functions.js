/** UserTask vazifa biriktirish uchun vaqtlarni qo'shishda */
function remindTime(i) {
	let div = $(document).find('.div_remind_time');

	let timeInput = '<div class="label-input js_RemindTimeDiv ml-2">'+
						'<label for="remind_time'+i+'">'+i+'. Vaqt</label>'+
						'<div class="remind_time1 input-group">'+
							'<input type="time" class="form-control" id="remind_time'+i+'" name="remind_time'+i+'">'+
							'<div class="input-group-append js_remind_time_remove_btn">'+
								'<span class="input-group-text remindTime"><i class="fas fa-times"></i></span>'+
							'</div>'+
							'<div class="invalid-feedback">'+
								'Vaqtni kiriitng!'+
							'</div>'+
						'</div>'+
					'</div>';

	div.append(timeInput);
}







$(document).ready(function() {
    $("#born").datepicker({
		uiLibrary: 'bootstrap4',
		format: "dd.mm.yyyy"
    });
   $('input[name="start_day"]').datepicker({
	   uiLibrary: 'bootstrap4',
	   format: "dd.mm.yyyy"
   });

	$('input[name="end_day"]').datepicker({
		uiLibrary: 'bootstrap4',
		format: "dd.mm.yyyy"
	});


	/** Datatable **/
	$("#example1").DataTable({
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	});
	/** ./ Datatable **/


	$('#taskTable').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	});

	$('#reportTable').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	});

   
    $('[data-toggle="tooltip"]').tooltip();


	$('#task-selected-options').multiSelect();



	/** userTask add task */
	$('.js_remind_time_add_btn').click(function(e){
		e.preventDefault();

		let n = $(document).find('.label-input');
		let i = 1+n.length;
		remindTime(i);
		// console.log(n.length);
	});

	/** userTask remove remind time */
	let js_RemindTimeDiv = $(".js_RemindTimeDiv");
	$(document).on('click','.js_remind_time_remove_btn', function() {

		if (!$(this).hasClass('js_noAdd')) {
			$(this).closest(".js_RemindTimeDiv").remove();
		}
	});
	/** ./UserTask add task */


	$('#taskSelect').select2();


	/** Ish reja sana uchun oraliq sana */
	$('input[name="startDay_endDay"]').daterangepicker({
		autoUpdateInput: false,
		locale: {
			cancelLabel: 'Clear',
			format: 'DD.MM.YYYY'
		}
	});

	$('input[name="startDay_endDay"]').on('apply.daterangepicker', function(ev, picker) {
		$(this).val(picker.startDate.format('DD.MM.Y') + ' - ' + picker.endDate.format('DD.MM.Y'));
	});

	$('input[name="startDay_endDay"]').on('cancel.daterangepicker', function(ev, picker) {
		$(this).val('');
	});
	/** ./Ish reja sana uchun oraliq sana */


	/** Korish */

	$('.js_StartEndDays').daterangepicker({
		autoUpdateInput: false,
		locale: {
			cancelLabel: 'Clear',
			format: 'DD.MM.YYYY'
		}
	});


	$('.js_StartEndDays').on('apply.daterangepicker', function(ev, picker) {
		$(this).val(picker.startDate.format('DD.MM.YYYY') + ' - ' + picker.endDate.format('DD.MM.YYYY'));
	});

	$('.js_StartEndDays').on('cancel.daterangepicker', function(ev, picker) {
		$(this).val('');
	});





	/** --------------------------------------------------------------------------------------- */

	/**
	 * UserTask datatable vaqt columns
	 * */

	/** UserTask Plus btn */
	$('.js_remindTimePlusBtn').click(function (e) {
		e.preventDefault();

		let ThisTr = $(this).closest('tr');

		let d = new Date();
		let time = '';
		if (d.getHours() < 10)
			time = time + "0";
		time = time + d.getHours() + ":";
		if (d.getMinutes() < 10)
			time = time + "0";
		time = time + d.getMinutes();


		let timeInput = '<div class="col-3 mt-1 input-group js_inputGroup">' +
							'<input type="time" class="form-control form-control-sm" name="remind_time" value="'+time+'">' +
							'<div class="input-group-append js_remindTimeThisRemove">' +
								'<span class="input-group-text"><i class="fas fa-times"></i></span>' +
							'</div>' +
						'</div>';

		$(this).before(timeInput);


	});

	/** UserTask remove this input */
	$(document).on('click','.js_remindTimeThisRemove', function () {
		let ThisTr = $(this).closest('.js_remindTimeInputs');


		let user_task_id = $(this).closest('.js_inputGroup').data('user_task_id');

		ThisTr.data('remove_user_task_id', user_task_id);

		$(this).closest('.js_inputGroup').addClass('d-none');

		let id = { 'id': user_task_id }
		let url = $(this).data('url');

		$.post(url, id, function (res) {
			console.log(res);
		});

	});




	/** UserTask back btn */
	$(document).on('click','.js_remindTimeBackBtn', function (e) {
		e.preventDefault();

		let ThisTr = $(this).closest('tr');

		ThisTr.find('.remindTimeSpan').removeClass('d-none');

		ThisTr.find('.js_inputGroup').addClass('d-none');

		ThisTr.find('.js_remindTimePlusBtn').addClass('d-none');

		ThisTr.find('.js_remindTimeEditBtn').removeClass('d-none');

		ThisTr.find('.js_remindTimeDeleteBtn').removeClass('d-none');

		$(this).addClass('d-none');

		ThisTr.find('.js_remindTimeSaveBtn').addClass('d-none');

		let t = ThisTr.find('.js_inputGroup');


		$.each(t, function() {

			if ($(this).data('user_task_id'))
				t.addClass('d-none');
			else
				$(this).remove();

		});

	});



	/** UserTask edit btn */
	$('.js_remindTimeEditBtn').click(function(e){
		e.preventDefault();

		let ThisTr = $(this).closest('tr');
		let userId = ThisTr.find('.js_remindTimeInputs').data('userId');

		ThisTr.find('.remindTimeSpan').addClass('d-none');

		ThisTr.find('.js_inputGroup').removeClass('d-none');

		ThisTr.find('.js_remindTimePlusBtn').removeClass('d-none');

		ThisTr.find('.js_remindTimeSaveBtn').removeClass('d-none');

		ThisTr.find('.js_remindTimeBackBtn').removeClass('d-none');

		$(this).addClass('d-none');

		ThisTr.find('.js_remindTimeDeleteBtn').addClass('d-none');

	});


	/** UserTask save btn */
	$(document).on('click','.js_remindTimeSaveBtn', function (e) {
		e.preventDefault();
		let url = $(this).data('url');
		let ThisTr = $(this).closest('tr');

		let input_groups = $(this).closest("tr").find(".js_remindTimeInputs").find(".js_inputGroup");

		let data = {
			'edit': {},
			'add': {},
		};

		$.each(input_groups, function(index, val) {

			if ($(val).data('user_task_id')) {

				data.edit[index] = {
					'user_task_id': $(val).data('user_task_id'),
					'remind_time': $(val).find('input').val(),
				};
			}
			else {
				data.add[index] = {
					'user_id': ThisTr.find('.js_remindTimeInputs').data('user_id'),
					'task_id': ThisTr.find('.js_remindTimeInputs').data('task_id'),
					'remind_time': $(val).find('input').val(),
					'start_day': ThisTr.find('.js_remindTimeInputs').data('start_day'),
					'end_day': ThisTr.find('.js_remindTimeInputs').data('end_day'),
				};
			}
		}) // .each

		$.post(url, data, function (res) {
			// console.log(res);
			if(res){
				// ThisTr.find('.js_remindTimeBackBtn').addClass('d-none');
				// ThisTr.find('.js_remindTimeEditBtn').removeClass('d-none');
				// ThisTr.find('.js_delete_item').removeClass('d-none');
				// ThisTr.find('.js_remindTimeSaveBtn').addClass('d-none');

				location.reload();
			}
		});

	});



	/** userTask delete btn  */
	$(document).on("click", ".js_remindTimeDeleteBtn", function () {

		let url = $(this).data('href');
		let name = $(this).data('name');
		let ids = $(this).data('ids');

		let t = $(document).find('.js_modal_delete').data('id', 123);
		// $(document).find('.js_modal_delete').data('ids', ids);
		console.log(t);
		$(document).find('.js_modal_title').html(name);

		// if($(this).hasClass("js_modal_delete"))
		// {
		// 	let url2 = $(this).attr("value");
		// 	$.post(url2, {}, function(res){
		// 		console.log(res);
		// 		if(res)
		// 		{
		// 			$("#delete_notify").modal("hide");
		// 			location.reload();
		// 		}
		// 		else
		// 		{
		// 			alert("uchmadi");
		// 		}
		// 	}, "json");
		//
		// }

	});
});












