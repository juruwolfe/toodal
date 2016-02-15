var types = {
	"Personal":1,
	"Work":2,
	"Paperwork":3,
	"Hobbies":4,
}

var modal = {
	show: function(){
		$(".form_wrap, .screen").show();
	},
	hide: function(){
		$(".form_wrap, .screen").hide();
	}
}

var items = {
	post: function(){
	    var $form = $(".form"),
	    	task = $form.find("input").val(),
	    	type = $(".option.active").text(),
	    	order = $(".item").length,  
	    	points = 2, 
	    	status = 0,
	    	type_id = types[type];

	    var data = {
	    	"task":task,
	    	"type_char":type,
	    	"order":order+1,
	    	"points":points,
	    	"status":status,
	    	"type_id":type_id
	    }

	    serializedData = $.param(data); 
	    console.log(serializedData)

	    request = $.ajax({
	        url: "/toodal/form.php?"+serializedData,
	        type: "post",
	        data: serializedData
	    });

	    request.done(function (response, textStatus, jqXHR){
	        console.log("Hooray, it worked!",response, textStatus, jqXHR);
	    });

	    request.fail(function (jqXHR, textStatus, errorThrown){
	        console.error(
	            "The following error occurred: "+
	            textStatus, errorThrown
	        );
	    });

	}
}


function highlight(ele){
	var className = $(ele).attr('class');
	$("."+className).removeClass('active');
	$(ele).addClass('active');
}

function actions(){
	$(".option").click(function(event) { highlight(this); });
	$(".exit, .submit").click(function(event) { modal.hide(); });
	$(".new").click(function(event) { modal.show(); });
	$(".submit").click(function(event) { items.post() });
}

$(function() {
	$( "#sortable" ).sortable();
	$( "#sortable" ).disableSelection();
});


actions()