var modal = {
	show: function(){
		$(".form_wrap, .screen").show();
	},
	hide: function(){
		$(".form_wrap, .screen").hide();
	}
}


function highlight(ele){
	var className = $(ele).attr('class');
	$("."+className).removeClass('active');
	$(ele).addClass('active');
}

function actions(){
	$(".option").click(function(event) {
		highlight(this);
	});

	$(".exit, .submit").click(function(event) {
		modal.hide();
	});

	$(".new").click(function(event) {
		modal.show();
	});
}


actions()