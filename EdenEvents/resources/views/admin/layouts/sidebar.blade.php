<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Eden Events</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/styles.min.css')}}">
</head>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><img class="img-fluid" src="{{ asset('backend/assets/img/imageedit_1_9468446019.png')}}"></div>
                <div class="sidebar-brand-text mx-3"><span>Eden Events</span><br>
                    <span>Planners</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('categories') }}"><i class="fas fa-table"></i><span>Category</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('users.all') }}"><i class="fas fa-table"></i><span>Users&nbsp;</span></a></li>
                <li class="nav-item"><a class="nav-link" href={{ route('homepage') }}><i class="fas fa-window-maximize"></i><span>Home Page&nbsp;</span></a></li>
                <li class="nav-item"><a class="nav-link" href={{ route('aboutus.index') }}><i class="fas fa-window-maximize"></i><span>About us Page&nbsp;</span></a></li>
                <li class="nav-item"><a class="nav-link" href={{ route('portfolio') }}><i class="fas fa-window-maximize"></i><span>Portfolio Page&nbsp;</span></a></li>
                <li class="nav-item"><a class="nav-link" href={{ route('contacts') }}><i class="fas fa-window-maximize"></i><span>Contact us details</span></a></li>
                <li class="nav-item"><a class="nav-link" href={{ route('headers') }}><i class="fas fa-window-maximize"></i><span>Header</span></a></li>
                <li class="nav-item"><a class="nav-link" href={{ route('services') }}><i class="fas fa-window-maximize"></i><span>Services</span></a></li>
                <li class="nav-item"><a class="nav-link" href={{ route('teams') }}><i class="fas fa-window-maximize"></i><span>Team</span></a></li>

            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
