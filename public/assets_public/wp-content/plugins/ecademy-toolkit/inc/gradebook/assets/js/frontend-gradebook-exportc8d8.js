;(function($){

	$(document).ready( function(){
		$('a.gradebook-export-to-csv').click(function (even) {
			even.preventDefault();
			var course_id = $(this).data('id');
			$.ajax({
				type : "POST",
				dataType : "json",
				url : ajaxurl,
				data : {
					action: "gradebook_exportfe",
					course_id: course_id
				},
				beforeSend: function(){
				},
				success: function(response) {
					console.log(response);
					var userData = response.data;

					downloadCSV(userData,course_id);
				},
				error: function( jqXHR, textStatus, errorThrown ){
					console.log( 'The following error occured: ' + textStatus, errorThrown );
				}
			});
		});
		function downloadCSV(userData,courseID) {
			var csv = Papa.unparse(userData);
			var fileN = 'export_gradebook_course_' + courseID + '.csv';
			var csvData = new Blob([csv], {type: 'text/csv;charset=utf-8;'});
			var csvURL = null;
			if (navigator.msSaveBlob) {
				csvURL = navigator.msSaveBlob(csvData, 'download.csv');
			} else {
				csvURL = window.URL.createObjectURL(csvData);
			}

			var tempLink = document.createElement('a');
			tempLink.href = csvURL;
			tempLink.setAttribute('download', fileN);
			tempLink.click();
		}
	})
})(jQuery);
