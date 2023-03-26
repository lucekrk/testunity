$(document).ready(function() {
	$("#save-button").click(function() {
		var title = $("#title").val();
		var content = $("#content").val();
		var data = {
			"title": title,
			"content": content
		};
		$.ajax({
			type: "GET",
			url: "save.php",
			data: data,
			success: function(response) {
				window.location.href = "/" + response;
			},
			error: function(xhr, status, error) {
				alert("Wystąpił błąd: " + error);
			}
		});
	});
});