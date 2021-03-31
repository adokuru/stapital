@extends('layouts/userdashboard') @section('title', 'Dashboard - Start Ups')
@section('nav')
<nav class="side-nav">
    <a href="/" class="intro-x flex items-center pl-5 pt-4">
        <img
            alt="Lawna Pastors"
            class="w-6"
            src="{{asset('assets/images/favicon/android_192.png')}}"
        />
        <span class="hidden xl:block text-white text-lg ml-3 font-medium"
            >Start Ups</span
        >
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="" class="side-menu side-menu--active">
                <div class="side-menu__icon">
                    <i data-feather="home"></i>
                </div>
                <div class="side-menu__title ">
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a href="" class="side-menu">
                <div class="side-menu__icon">
                    <i data-feather="users"></i>
                </div>
                <div class="side-menu__title">
                    Company
                </div>
            </a>
        </li>
        <li>
            <a href="" class="side-menu">
                <div class="side-menu__icon">
                    <i data-feather="corner-down-right"></i>
                </div>
                <div class="side-menu__title">
                   Investors Requests
                </div>
            </a>
        </li>
        <li>
            <a href="/login" class="side-menu">
                <div class="side-menu__icon">
                    <i data-feather="book-open"></i>
                </div>
                <div class="side-menu__title">
                    Logout
                </div>
            </a>
        </li>
    </ul>
  </nav>
@endsection @section('body')


<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
            <a href="/" class="">Stapital</a>
            <i data-feather="chevron-right" class="breadcrumb__icon"></i>
            <a href="{{'Starupsdashboard'}}" class="breadcrumb--active">Dashboard</a>
        </div>
        <!-- END: Breadcrumb -->
        
    </div>
    <!-- END: Top Bar -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a href="" class="ml-auto flex text-theme-1">
                        <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i>
                        Reload Data
                    </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div
                        class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y"
                    >
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i
                                        data-feather="user"
                                        class="report-box__icon text-theme-10"
                                    ></i>
                                    <div class="ml-auto"></div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">
                                    10
                                </div>
                                <div class="text-base text-gray-600 mt-1">
                                    Pastors
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y"
                    >
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i
                                        data-feather="hexagon"
                                        class="report-box__icon text-theme-10"
                                    ></i>
                                    <div class="ml-auto"></div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">
                                    Ketu 
                                </div>
                                <div class="text-base text-gray-600 mt-1">
                                        Area
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y"
                    >
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i
                                        data-feather="box"
                                        class="report-box__icon text-theme-11"
                                    ></i>
                                    <div class="ml-auto"></div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">
                                   10
                                </div>
                                <div class="text-base text-gray-600 mt-1">
                                   No of Districts
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y"
                    >
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i
                                        data-feather="book-open"
                                        class="report-box__icon text-theme-12"
                                    ></i>
                                    <div class="ml-auto"></div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">
                                    20
                                </div>
                                <div class="text-base text-gray-600 mt-1">
                                    No of Assemblies
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
            <!-- BEGIN: Weekly Top Seller -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Latest Investor Requests
                    </h2>
                </div>
                <div
                    class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0"
                >
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-no-wrap">
                                    S/N
                                </th>
                                <th class="whitespace-no-wrap">
                                    NAME
                                </th>
                                <th class="text-center whitespace-no-wrap">
                                    PHONE NUMBER
                                </th>
                                <th class="text-center whitespace-no-wrap">
                                    ACTIONS
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div
                                            class="text-gray-600 text-xs whitespace-no-wrap"
                                        >
                                            1
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a
                                        href=""
                                        class="font-medium whitespace-no-wrap"
                                        >David Tobi</a
                                    >
                                </td>
                                <td class="text-center">08034556473</td>
                                
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3 text-green-600" href="{{ url('Starupsdashboard') }}"> <i data-feather="eye" class="text-green-600 w-4 h-4 mr-1"></i> View </a>
                                    </div>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END: Weekly Top Seller -->
        </div>
    </div>
</div>

@endsection