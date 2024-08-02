<?php

// cookie sama dengan session tapi cookie menyimpan data di client browser sedangkan session menyimpan data di server


// mengaktifkan cookie
// setcookie("name", "value", "*exp_date") kalo zg pake exp_date maka cookie hnya berlaku di satu sesi tersebut

setcookie("nama", "Benony Gabriel");
// setcookie("nama", "Benony Gabriel", time() + 60); // artinya cookie berlaku hanya 1 menit
