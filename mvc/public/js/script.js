// console.log("okee");

$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#judulModal").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });
  $(".tampilModalUbah").on("click", function () {
    // console.log("okee");
    $("#judulModal").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr("action", "http://localhost/belajar-php/mvc/public/mahasiswa/ubah");

    const id = $(this).data("id");
    // console.log(id);

    $.ajax({
      url: "http://localhost/belajar-php/mvc/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        // console.log(data);
        $("#nama").val(data.nama);
        $("#nim").val(data.nim);
        $("#jurusan").val(data.jurusan);
        $("#angkatan").val(data.angkatan);
        $("#id").val(data.id);
      },
      error: function (xhr, status, error) {
        console.error("AJAX Error: " + status + error);
      },
    });
  });
});
