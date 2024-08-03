// memanggil jquery
// ada dua cara
// $(document); // simbol $ artinya kita sedang memanggil jquery sama aja dgn jQuery(document). cara baca $(document) adalah "jquery tolong carikan saya `document` atau apapun itu yang dituliskan di dalam kurungnya"
// jQuery(document);

$(document).ready(function () {
  // artinya jika jquery akan mencari `document` dan kalau document nya udh siap maka jalankan function berikut ini

  // hilangkan tombol cari
  // $("#tombol-cari").hide();

  // event ketika keyword ditulis
  $("#keyword").on("keyup", function () {
    $(".loader").show();

    // ajax menggunakan load
    // $("#container").load("ajax/book.php?=" + $("#keyword").val());

    //menggunakan get
    $.get("ajax/book.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
      $(".loader").hide();
    });
  });
});
