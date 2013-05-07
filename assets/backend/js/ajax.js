// JavaScript Document
$(document).ready(function() {
	$('#preloader').hide();
	var base_url = "http://cpd.app";
	var url = base_url + "/backend/collections/filter";
	var url_sorting = base_url + "/backend/categories/sorting";
	var url_dishes = base_url + "/backend/dishes/sorting";
	var url_dishes_filter = base_url + "/backend/dishes/filter";
    var url_sorting_dishes = base_url + "/backend/dishes/sorting";
	//-------------------------------------Sorting Categories----------------------------
	$("#sortable_categories tbody.content").sortable({
		update : function(event, ui) {
			var info = $(this).sortable("toArray");
			var cid = $('#cid').val();
			$('#preloader').show();
			var posting = $.post(url_sorting, {
				sort : info,
				cid : cid

			});
			/* Put the results in a div */
			posting.done(function(data) {

				$('#preloader').hide();

			});
			posting.fail(function() {
				alert("Some error occured,We will try to reload the page,you can try again after that.");
				location.reload();
			});

		}
	});
	$("#sortable tbody.content").disableSelection();

	//----------------------------------------------------------------
	$('#backend_dishes_filter').change(function() {
		//alert('sdsdsd');
		$('#preloader').show();
		var cat = $('#backend_dishes_filter').val();
		if (cat != 'All') {
			var posting = $.post(url_dishes_filter, {
				filter : cat

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#ajax_dishes_filter").empty().append(data);
				$("#sortable_dishes tbody.content").sortable({
					update : function(event, ui) {
						var info = $(this).sortable("toArray");
						var cid = $('#cid').val();
						$('#preloader').show();
						var posting = $.post(url_sorting_dishes, {
							sort : info,
							cid : cid

						});
						/* Put the results in a div */
						posting.done(function(data) {
							//var content = $(data).find('#content');
							//$("#ajax_dishes_filter").empty().append(data);
							$('[data-toggle="modal"]').click(function(e) {
								e.preventDefault();
								var url = $(this).attr('href');
								if (url.indexOf('#') == 0) {
									$(url).modal('open');
								} else {
									$.get(url, function(data) {
										$('<div class="modal hide fade">' + data + '</div>').modal();
									}).success(function() {
										//$('input:text:visible:first').focus();
									});
								}
							});
							$('#preloader').hide();
						});
						posting.fail(function() {
							alert("Some error occured,We will try to reload the page,you can try again after that.");
							location.reload();
						});

					}
				});
				$("#sortable_dishes tbody.content").disableSelection();
			});
			posting.fail(function() {
				alert("Some error occured please try again");
			});

		} else {

			location.reload();

		}
		//alert('hide')
		$('#preloader').fadeOut(2000);
	});

});

