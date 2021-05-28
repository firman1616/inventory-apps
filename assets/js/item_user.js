// Form Serial Number
$(document).ready(function () {
	// $(window).load(function () {
	$("#sn1").hide();
	$("#sn2").hide();
	$("#sn3").hide();

	$("#tipe").change(function () {
		console.log($(this).val());
		if ($(this).val() == "usn") {
			$("#sn1").hide();
			$("#sn2").hide();
		} else {
			$("#sn1").show();
			$("#sn2").show();
		}
	});
	// });

	// Select Chain
	$("#item").change(function () {
		var id = $(this).val();
		// var BASE_URL = "<?php echo base_url();?>";
		$.ajax({
			url: BASE_URL + "user/Item/get_subitem",
			// url: "<?php echo base_url(); ?>admin/item/get_subitem",
			method: "POST",
			data: {
				id: id,
			},
			async: false,
			dataType: "json",
			success: function (data) {
				var html = "";
				var i;
				for (i = 0; i < data.length; i++) {
					html +=
						"<option value =" +
						data[i].id_master_sub +
						">" +
						data[i].nama_sub +
						"</option>";
				}
				$(".subitem").html(html);
			},
		});
	});

	//  Brand Counter
	$("#tes").change(function () {
		var id = $(this).val();
		// var BASE_URL = "<?php echo base_url();?>";
		$.ajax({
			url: BASE_URL + "user/Item/tes",
			// url: "<?php echo base_url(); ?>admin/item/get_subitem",
			method: "POST",
			data: {
				id: id,
			},
			async: false,
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#count").val(data);
			},
		});
	});
});
