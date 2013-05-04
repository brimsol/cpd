// JavaScript Document
$(document).ready(function() {
	$('#preloader').hide();
	//var base_url = "";
	var base_url = "http://demo.bandyworks.com/glennajean";
	var url = base_url + "/backend/collections/filter";
	var url_product = base_url + "/backend/products/filter";
	var url_store = base_url + "/backend/stores/filter";
	var url_swatch = base_url + "/backend/swatches/filter";
	var url_sorting = base_url + "/backend/products/sorting";
	//var url_onlinestore_view = base_url + "/store/onlinestore";
	//var Keyword_length = 2;

	$('#backend_collection_filter').change(function() {
		//alert('sdsdsd');
		$('#preloader').show();

		var array = [];
		//$('input:checkbox:checked').each(function() {

		//array.push($(this).val());

		//});
		/* Send the data using post */
		//alert('show');
		array.push($('#backend_collection_filter').val());
		var reload = $('#backend_collection_filter').val();
		if (reload != 'All') {
			var posting = $.post(url, {
				filter : array

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#ajax_collection_filter").empty().append(data);
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
	//----------------------------------------------------------------
	$('#backend_product_filter').change(function() {
		//alert('sdsdsd');
		$('#preloader').show();
		var cat = $('#backend_product_filter').val();
		if (cat != 'All') {
			var posting = $.post(url_product, {
				filter : cat

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#ajax_product_filter").empty().append(data);
				$("#sortable tbody.content").sortable({
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
							//var content = $(data).find('#content');
							//$("#ajax_collection_filter").empty().append(data);
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
				$("#sortable tbody.content").disableSelection();
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

	//=================================================================================.
	$('#backend_store_filter').change(function() {
		//alert('sdsdsd');
		$('#preloader').show();
		var state = $('#backend_store_filter').val();
		if (state != 'All') {
			var posting = $.post(url_store, {
				filter : state

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#ajax_store_filter").empty().append(data);
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
	//=================================================================================.
	$('#backend_swatch_filter').change(function() {
		//alert('sdsdsd');
		$('#preloader').show();
		var collection = $('#backend_swatch_filter').val();
		if (collection != 'All') {
			var posting = $.post(url_swatch, {
				filter : collection

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#ajax_swatch_filter").empty().append(data);
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

