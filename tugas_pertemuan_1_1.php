    <?php
    
    $arr = array(1, 2, 3, 4, 5);
    
    //inisisasi penampung jumlah
    $jml = 0;
    foreach ($arr as $ar) {
        //untuk menjumlahkan nilai array tiap perulangan
        $jml = $ar + $jml;
    }
    //menampilkan hasil akhir
    echo $jml;
    
    ?>
