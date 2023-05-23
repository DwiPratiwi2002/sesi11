<?php
    $dta[0]["nama"]      =  "Dwi Pratiwi";
    $dta[0]["alamat"]    = "Jl. Kenangan Mantan";
    $dta[0]["tgl_lahir"] = "2002-11-22";
    $dta[0]["telp"]      = "085237808937";
    $dta[0]["agama"]     = "Hindu";

    $dta[1]["nama"]      = "Aditya Epriyana";
    $dta[1]["alamat"]    = "Jl. Monang - Maning";
    $dta[1]["tgl_lahir"] = "2002-04-29";
    $dta[1]["telp"]      = "083119560142";
    $dta[1]["agama"]     = "Hindu";

    $dta[2]["nama"]      = "Khidir";
    $dta[2]["alamat"]    = "Jl. Ultramen";
    $dta[2]["tgl_lahir"] = "2000-05-11";
    $dta[2]["telp"]      = "089379856177";
    $dta[2]["agama"]     = "Islam";

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($dta);