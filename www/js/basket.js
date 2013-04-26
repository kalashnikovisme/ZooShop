function push_button(id) { 
    if (document.getElementById("basket_" + id).style.background == "red") {
        document.getElementById("basket_" + id).style.background = "white";
        return;
    }
    document.getElementById("basket_" + id).style.background = "red";
}

function confirm() {
    var table = document.getElementById("table");
    var count = table.rows.length - 1;
    var arr = new Array();
    for (var i = 1; i <= count; i++) {
        if (document.getElementById("basket_" + i).style.background == "red") {
            arr += i;
        }
    }
    $.ajax({
		url:    'confirm.php',
		type:   'POST',
		data:   'ids='+arr,
		success: function(response) {
			if (response == "1") {
				alert("Заявка оформлена");
			}
		}
	});
}