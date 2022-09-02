<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Kwik E Mart - DASHBAORD</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="www.sigitechnologies.com">

    <link rel="icon" href="{{asset('public/logo.png')}}" type="image/x-icon">
    
        <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/charts-c3/plugin.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/multi-select/css/multi-select.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendor/dropify/css/dropify.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/vendor/summernote/dist/summernote.css')}}" />
    
    
        <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/color_skins.css')}}">
    
        <!--toastr-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   
    <style>
        /* ===== Scrollbar CSS ===== */
        /* Firefox */
        * {
            scrollbar-width: auto;
            scrollbar-color: #8f54a0 #ffffff;
        }
        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 16px;
        }
        *::-webkit-scrollbar-track {
            background: #ffffff;
        }
        *::-webkit-scrollbar-thumb {
            background-color: #8f54a0;
            border-radius: 10px;
            border: 3px solid #ffffff;
        }
    </style>
</head>