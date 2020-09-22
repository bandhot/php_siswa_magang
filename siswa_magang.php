<?php

$data_siswa=[];


while(true)
{
    // data siswa

    $siswa=&$data_siswa;

    // banner aplikasi

    tampil("data siswa magang TOP");
    tampil("======================");

    // user input data siswa magang

    $input_siswa=readline("masukan data siswa ?");
//simpan data siswa
    $siswa[]=$input_siswa;

    // validasi huruf

    if(!preg_match("/^[a-zA=Z]*$/",$input_siswa) || empty($input_siswa))
    {
        echo PHP_EOL;
        echo "tolong masukan karakter huruf";
        continue;
    }

    //munculkan data siswa magang
   
    $nomor=1;

    foreach($siswa as $key)
{
        tampil("$nomor.$key");
        $nomor++;
}

//tanya user untuk memasukan data lagi
tanyaUser();
}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

function tanyaUser()
{
  
$tanya=readline("tambah data ?");

if($tanya=="no") {
    tampil("terima kasih");
    exit;
  }
  
}

function menuAplikasi()
{
    $data=["input data","update data","delete data","lihat data"];
    
}



//CRUD ( create read update delete )

function inputData(&$data)
{
    echo tampil;
}

function tampilData(&$data)
{

}

function updateData(&$data)
{

}

function deleteData(&$data)
{

}

?>