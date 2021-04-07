// cek login form
const flashData = $(".flash-data").data("flashdata");
if (flashData) {
	Swal.fire({
		icon: "error",
		title: "Oops...",
		text: flashData + " Username or Password",
	});
}
// End Cek Login Form

// User
const flashUser = $(".flash-user").data("flashdata");
if (flashUser) {
	Swal.fire({
		icon: "success",
		title: "Congratulation",
		text: "User data successfully " + flashUser,
	});
}

$(".hapus-user").on("click", function (e) {
	// hentikan aksi default
	e.preventDefault();
	// jqueri cariin tombol hapus yang lagi saya click, lalu ambil atributnya
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are You Sure for Delete User?",
		text: "user data will be deleted!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, Delete User!",
		// Jika hasilya true (tombol di pencet) jalankan fungsi dibawah
	}).then((result) => {
		if (result.value == true) {
			document.location.href = href;
		}
	});
});
// End User

// Type
const flashTipe = $(".flash-tipe").data("flashdata");
if (flashTipe) {
	Swal.fire({
		icon: "success",
		title: "Congratulation",
		text: "Type data successfully " + flashTipe,
	});
}
// End Type

// EMployee
const flashKaryawan = $(".flash-karyawan").data("flashdata");
if (flashKaryawan) {
	Swal.fire({
		icon: "success",
		title: "Congratulation",
		text: "Employee data successfully " + flashKaryawan,
	});
}

$(".hapus-karyawan").on("click", function (e) {
	// hentikan aksi default
	e.preventDefault();
	// jqueri cariin tombol hapus yang lagi saya click, lalu ambil atributnya
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are You Sure for Delete data Employee?",
		text: "emloyee data will be deleted!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, Delete Employee!",
		// Jika hasilya true (tombol di pencet) jalankan fungsi dibawah
	}).then((result) => {
		if (result.value == true) {
			document.location.href = href;
		}
	});
});
// end Employee

// Daily
const flashDaily = $(".flash-daily").data("flashdata");
if (flashDaily) {
	Swal.fire({
		icon: "success",
		title: "Congratulation",
		text: "Daily Activities data successfully " + flashDaily,
	});
}

$(".hapus-daily").on("click", function (e) {
	// hentikan aksi default
	e.preventDefault();
	// jqueri cariin tombol hapus yang lagi saya click, lalu ambil atributnya
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are You Sure for Delete data Daily Activities?",
		text: "Activities data will be deleted!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, Delete Data!",
		// Jika hasilya true (tombol di pencet) jalankan fungsi dibawah
	}).then((result) => {
		if (result.value == true) {
			document.location.href = href;
		}
	});
});
// End Daily
