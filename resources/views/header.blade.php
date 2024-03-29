<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/public/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ url('/public/assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    TS WEB
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ url('/public/assets/css/material-dashboard.css') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->

</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ url('/public/assets/img/sidebar-1.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          TS WEB
        </a>
      </div>
      <div class="sidebar-wrapper">
        
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item {{ set_active(['adduser*']) }}">
            <a class="nav-link" href="{{ URL::to('/adduser') }}">
              <i class="material-icons">dashboard</i>
              <p>Add New User</p>
            </a>
          </li>

          <li class="nav-item {{ set_active(['employee*']) }}">
            <a class="nav-link" href="{{ URL::to('/employee') }}">
              <i class="material-icons">dashboard</i>
              <p>Employee</p>
            </a>
          </li>

          <li class="nav-item {{ set_active(['department*']) }}">
            <a class="nav-link" href="{{ URL::to('/department') }}">
              <i class="material-icons">dashboard</i>
              <p>Department</p>
            </a>
          </li>
          
        
        </ul>
      </div>
    </div>
<!-- End Sidebar -->
