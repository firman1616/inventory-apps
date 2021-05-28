function autofill() {
	var kode = document.getElementById("item_code").value;
	$.ajax({
		url: BASE_URL + "admin/Mutasi/cari",
		//  url:"<?php echo base_url();?>admin/Mutasi/cari",
		data: "&kode=" + kode,
		success: function (data) {
			var hasil = JSON.parse(data);
			//console.log(hasil);

			$.each(hasil, function (key, val) {
				// document.getElementById("item_code").value = val.kode;

				console.log(val.nama_item);
				document.getElementById("nama_item").value = val.nama_item;
			});
		},
	});
}

$(document).ready(function () {
	// $(window).load(function () {
	$("#ot1").hide();
	$("#ot2").hide();
	$("#ot3").hide();

	$("#lokasi").change(function () {
		console.log($(this).val());
		if ($(this).val() == "500") {
			$("#ot1").show();
			$("#ot2").show();
		} else {
			$("#ot1").hide();
			$("#ot2").hide();
		}
	});
});
