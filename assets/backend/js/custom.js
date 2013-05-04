$(document).ready(function() {
	// Support for AJAX loaded modal window.
	// Focuses on first input textbox after it loads the window.
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

//Form validation-collection form
//required : function(element) {
					//return $("#m_status").val() == 'Married'
				//}
	$('#collection_form').validate({

		rules : {
			name : {
				required : true,
				maxlength: 100
			},
			description : {
				required : true,
				maxlength: 700
			},
			category : {
				required : true
			},
			similar : {
				
			},
			store : {
				url: true,
				maxlength: 500
			}
				
		},

		messages : {
			
	    //userfile : ""
		//	description : "Describe it man",
		//	category : "It may be in any one of Girls,Boys,Neutral",
		//	similar : "Oops! Don't you have similar products'",
		//	store : "That URL is too long",

		},

		highlight : function(label) {
			$(label).closest('.control-group').addClass('error');
		},
		success : function(label) {
			$(label).closest('.control-group').addClass('success');
		}
	});
//---------------------------------------------------------------------------		
	$('#onlinestore_form').validate({

		rules : {
			name : {
				required : true,
				maxlength: 100
			},
			url : {
				required : true,
				url: true,
				maxlength: 500
			}
		},

		messages : {
			
	    //userfile : ""
		//	description : "Describe it man",
		
		},

		highlight : function(label) {
			$(label).closest('.control-group').addClass('error');
		},
		success : function(label) {
			$(label).closest('.control-group').addClass('success');
		}
	});
//---------------------------------------------------------------------------
$('#slider_form').validate({

		rules : {
			
			url : {
				url: true,
				maxlength: 500
			},
			description : {
				maxlength: 500
			}
		},

		messages : {
			
	    //userfile : ""
		//	description : "Describe it man",
		
		},

		highlight : function(label) {
			$(label).closest('.control-group').addClass('error');
		},
		success : function(label) {
			$(label).closest('.control-group').addClass('success');
		}
	});	
//---------------------------------------------------------------------------		
jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, ""); 
	return this.optional(element) || phone_number.length > 9 &&
		phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, "Please specify a valid phone number");

//-----------------------------------------------------------------------------------
	$('#store_form').validate({

		rules : {
			name : {
				required : true,
				maxlength: 100
			},
			address : {
				required : true,
				 maxlength: 300
			},
			state : {
				required : true
			},
			contact_no : {
				required : true,
				phoneUS: true
				
			},
			url :{
				url: true,
				maxlength: 500
			}
		},

		messages : {
			
	    //userfile : ""
		//	description : "Describe it man",
		
		},

		highlight : function(label) {
			$(label).closest('.control-group').addClass('error');
		},
		success : function(label) {
			$(label).closest('.control-group').addClass('success');
		}
	});
//---------------------------------------------------------------------------		
	$('#product_form').validate({

		rules : {
			name : {
				required : true,
				maxlength: 200
			},
			
			category : {
				required : true
			},
			description : {
				maxlength: 500
			}
		},

		messages : {
			
	    //userfile : ""
		//	description : "Describe it man",
		
		},

		highlight : function(label) {
			$(label).closest('.control-group').addClass('error');
		},
		success : function(label) {
			$(label).closest('.control-group').addClass('success');
		}
	});
//---------------------------------------------------------------------------	
	$('#swatches_form').validate({

		rules : {
			name : {
				required : true,
				maxlength: 100
			},
			
			category : {
				required : true
			},
			description : {
				maxlength: 200
			}
		},

		messages : {
			
	    //userfile : ""
		//	description : "Describe it man",
		
		},

		highlight : function(label) {
			$(label).closest('.control-group').addClass('error');
		},
		success : function(label) {
			$(label).closest('.control-group').addClass('success');
		}
	});
}); 