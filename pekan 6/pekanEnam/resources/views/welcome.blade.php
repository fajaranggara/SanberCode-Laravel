@extends('layout.master')

@section('title')
    Halaman Home
@endsection

@section('content')
<h1>Selamat Datang {{ $firstName }} {{ $lastName }}!</h1>
<br>
<h2>
Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!
</h2>
@endsection