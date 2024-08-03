// console.log("ok");

// ambil elemen2 yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// untuk menjalankan ajax, kita butuuh triger
// tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // buat objek ajax
  var ajax = new XMLHttpRequest();

  //   cek kesiapan ajax
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      // status 200 artinya OK dan 4 artinya ready
      //   console.log(ajax.responseText);
      container.innerHTML = ajax.responseText;
    }
  };
  //   eksekusi ajax
  ajax.open("GET", "ajax/book.php?keyword=" + keyword.value, true);
  ajax.send();
});
