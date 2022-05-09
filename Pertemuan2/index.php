<?php
// ini adalah komentar
/* ini juga komentar */

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standard Output
// echo, print
// echo "Fikri Ramdani";
// print "Fikri Ramdani";
// String boleh ditulis menggunakan kutip 2 "" atau menggunakan kutip 1 '', tidak boleh menggunakan campuran
// Kutip 2 "" harus digunakan ketika string yang kita tulis memiliki kutip 1 ('')
// Kutip 2 lebih sakti dari kutip 1
// echo "jum'at";
// echo 1234;
// echo true;
// echo false;

// print_r
// print_r ("Fikri Ramdani");

// var_dump
// var_dump ("Fikri Ramdani");

// Penulisan sintaks php
// 1. PHP didalam HTML
// 2. HTML didalam PHP
// penulisan html didalam php tidak disarankan, karena untuk memisahkan file html dan php

// Variabel dan Tipe Data
// Variabel : cukup dengan menggunakan tanda dolar ($) didepan nama variabel
// tidak boleh doawali dengan angka, tapi boleh mengandung angka
// $nama = "Fikri Ramdani";
// echo "Halo, Nama saya $nama";
// echo 'Halo, Nama saya $nama';
// Ketika menggunakan kutip 1, maka interpolasi tidak akan berjalan jika didalam string ada variabel. variabel hanya akan dibaca menjadi string

// Operator
// Aritmatika
// + - * / %
// echo 1 + 1;
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concat
// .
// $nama_depan = "Fikri";
// $nama_belakang = "Ramdani";
// echo $nama_depan ." ". $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Fikri";
// $nama .= " ";
// $nama .= "Ramdani";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// Operator perbandingan tidak mengecek tipe datanya
// var_dump(1 == 1);
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 &&  $x % 2 == 0);
