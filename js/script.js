// $(document).ready(function() {
//     $('#summernote').summernote({
//      tabsize: 2,
//      height: 100
//    });
   
//    $("#test").click(function() {
//      var markupStr = $('#summernote').summernote('code');
//      alert(markupStr);
//    });
//    });

(function() {
	var content =
		"<p><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzC_Ho_08G0m7PyxJOPLpPujM9UTLxvaE-5nXewscnqa3GMWjGwg' alt='Image result for summernote.js'></p><h1>Summernote</h1>";
	var $sumNote = $("#ta-1")
		.summernote({
			callbacks: {
				onPaste: function(e,x,d) {
					$sumNote.code(($($sumNote.code()).find("font").remove()));
				}
			},

			dialogsInBody: true,
			dialogsFade: true,
			disableDragAndDrop: true,
			//                disableResizeEditor:true,
			height: "150px",
			tableClassName: function() {
				alert("tbl");
				$(this)
					.addClass("table table-bordered")

					.attr("cellpadding", 0)
					.attr("cellspacing", 0)
					.attr("border", 1)
					.css("borderCollapse", "collapse")
					.css("table-layout", "fixed")
					.css("width", "100%");

				$(this)
					.find("td")
					.css("borderColor", "#ccc")
					.css("padding", "4px");
			}
		})
		.data("summernote");

	//get
	$("#btn-get-content").on("click", function() {
		var y =$($sumNote.code());
	
		console.log(y[0]);console.log(y.find("p> font"));
	var x = y.find("font").remove();		
		$("#content").text($("#ta-1").val());
	});
	//get text$($sumNote.code()).find("font").remove()$($sumNote.code()).find("font").remove()
	$("#btn-get-text").on("click", function() {
		$("#content").html($($sumNote.code()).text());
	});
	//set
	$("#btn-set-content").on("click", function() {
		$sumNote.code(content);
	}); //reset
	$("#btn-reset").on("click", function() {
		$sumNote.reset();
		$("#content").empty();
	});
})();
