@extends('layouts/main')

@section('content')
<div class='parallax' style="background-image: url('../images/parallax/1.jpg');"></div>
@include('includes/short/what-we-believe')

<div class='parallax' style="background-image: url('../images/parallax/2.jpg');"></div>
@include('includes/short/what-we-do')

<div class='parallax' style="background-image: url('../images/parallax/1.jpg');"></div>
@include('includes/short/whos-who')

<div class='parallax' style="background-image: url('../images/parallax/2.jpg');"></div>
@include('includes/short/up-coming')

<div class='parallax' style="background-image: url('../images/parallax/1.jpg');"></div>
@include('includes/short/find-us')


@endSection