<?php

use App\Models\metadata;

function get_meta_value($meta_key)
{
    $data = metadata::where('meta_key', $meta_key)->first();
    if ($data) {
        return $data->meta_value;
    }
}

function set_about_nama($nama)
{
    //risca novita
    $arr = explode(" ", $nama); //[0]= risca [1]=novita
    $getakhir = end($arr); //ambil array terakhir
    $kataAkhir = "<span class='text-primary'>$getakhir</span>";  //memberi warna pada huruf terakhir
    array_pop($arr); //risca
    $namaAwal = implode(" ", $arr);
    return $namaAwal . " " . $kataAkhir;
}

function set_list_awards($isi)
{
    $isi = str_replace("<ul>", ' <ul class="fa-ul mb-0">', $isi);
    $isi = str_replace("<li>", '<li><span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>', $isi);

    return $isi;
}

function set_list_workflow($isi)
{
    $isi = str_replace("<ul>", ' <ul class="fa-ul mb-0">', $isi);
    $isi = str_replace("<li>", '<li><span class="fa-li"><i class="fas fa-check"></i></span>', $isi);

    return $isi;
}

?>
