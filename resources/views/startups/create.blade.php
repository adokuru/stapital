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
                        <a href="" class="breadcrumb">Dashboard</a>
                        <i data-feather="chevron-right" class="breadcrumb__icon"></i>
                        <a href=" class="breadcrumb--active">Add Company</a>
                    </div>
                    <!-- END: Breadcrumb -->
                
                </div>
                <!-- END: Top Bar -->
             
                
              {{-- MULTIPLE FORM WIZARD --}}
              <div class="intro-y box py-5 sm:py-20 mt-5">
                <div class=" sm:px-20">
                    <div class="font-medium text-base">Pastor Profile </div> 
                    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <div class="mb-2">First Name</div>
                            <input type="text" class="input w-full border flex-1" placeholder="Firstname">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <div class="mb-2">Last Name</div>
                            <input type="text" class="input w-full border flex-1" placeholder="Last Name" required>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <div class="mb-2">Phone Number</div>
                            <input type="text" class="input w-full border flex-1" placeholder="(+234) 000 000 0000">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <div class="mb-2">Email</div>
                            <input type="email" class="input w-full border flex-1" placeholder="Email">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-12">
                            <div class="mb-2">Highest Qualification</div>
                            <select class="input w-full border flex-1">
                                <option value="phd">Qualification</option>
                                <option value="phd">Phd</option>
                                <option value="masters">Masters</option>
                                <option value="bsc">B.Sc</option>
                                <option value="hnd">HND</option>
                                <option value="ond">OND</option>
                                <option value="ssce">SSCE</option>
                                <option value="none">N/A</option>
                            </select>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-4">
                            <div class="mb-2">Date Of Birth</div>
                            <div class="relative w-56 ">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div> <input type="text" class="datepicker input pl-12 border">
                            </div>
                        </div>
                        
                        <div class="intro-y col-span-12 sm:col-span-4">
                            <div class="mb-2">Date of Absorption</div>
                            <div class="relative w-56 ">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div> <input type="text" class="datepicker input pl-12 border">
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-4">
                            <div class="mb-2">Expected Date of Retirement</div>
                            <div class="relative w-56 ">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div> <input type="text" class="datepicker input pl-12 border">
                            </div>
                        </div>

                        <div class="intro-y col-span-12 sm:col-span-4">
                            <div class="mb-2">Area</div>
                            <select class="input w-full border flex-1">
                                <option value="phd">Area</option>
                                <option value="phd">Phd</option>
                                <option value="masters">Masters</option>
                                <option value="bsc">B.Sc</option>
                                <option value="hnd">HND</option>
                                <option value="ond">OND</option>
                                <option value="ssce">SSCE</option>
                                <option value="none">N/A</option>
                            </select>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-4">
                            <div class="mb-2">District</div>
                            <select class="input w-full border flex-1">
                                <option value="phd">District</option>
                                <option value="phd">Phd</option>
                                <option value="masters">Masters</option>
                                <option value="bsc">B.Sc</option>
                                <option value="hnd">HND</option>
                                <option value="ond">OND</option>
                                <option value="ssce">SSCE</option>
                                <option value="none">N/A</option>
                            </select>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-4">
                            <div class="mb-2">Assembly</div>
                            <select class="input w-full border flex-1">
                                <option value="phd">Assembly</option>
                                <option value="phd">Phd</option>
                                <option value="masters">Masters</option>
                                <option value="bsc">B.Sc</option>
                                <option value="hnd">HND</option>
                                <option value="ond">OND</option>
                                <option value="ssce">SSCE</option>
                                <option value="none">N/A</option>
                            </select>
                        </div>

                        <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Roles</div>
                            <select class="input w-full border flex-1">
                                <option value="">Select Role</option>
                                <option value="AreaSec">Area Secretary</option>
                                <option value="ATreasurer">Area Treasurer</option>
                                <option value="AMenMovLeader">Area Men's Movement Leader</option>
                                <option value="AManLeader">Area Man Leader</option>
                                <option value="AreaYL">Area Youth Leader & Witness Leader</option>
                                <option value="ACEULeader">Area CEU Leader</option>
                                <option value="ASundaySchoolLeader">Area Sunday School Leader</option>
                                <option value="DreaSec">District Secretary</option>
                                <option value="DTreasurer">District Treasurer</option>
                                <option value="DMenMovLeader">District Men's Movement Leader</option>
                                <option value="DManLeader">District Man Leader</option>
                                <option value="DreaYL">District Youth Leader & Witness Leader</option>
                                <option value="DCEULeader">District CEU Leader</option>
                                <option value="DSundaySchoolLeader">District Sunday School Leader</option>
                                <option value="AssreaSec">Assembly Secretary</option>
                                <option value="AssTreasurer">Assembly Treasurer</option>
                                <option value="AssMenMovLeader">Assembly Men's Movement Leader</option>
                                <option value="AssManLeader">Assembly Man Leader</option>
                                <option value="AssreaYL">Assembly Youth Leader & Witness Leader</option>
                                <option value="AssCEULeader">Assembly CEU Leader</option>
                                <option value="AssSundaySchoolLeader">Assembly Sunday School Leader</option>
                                <option value="other">Others</option>
                            </select>
                        </div>

                        <div class="intro-y col-span-12 sm:col-span-12">
                            <div class="mb-2">Archivements</div>
                            <div class="mt-2">
                                <textarea data-feature="basic" class="summernote" name="editor"></textarea>
                            </div>
                        </div>

                        <div class="intro-y col-span-12 sm:col-span-12">
                            <div class="mb-2">Upload Profile Pics</div>
                            <form data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                <div class="fallback"> <input name="file" type="file" /> </div>
                                <div class="dz-message" data-dz-message>
                                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                </div>
                            </form>
                        </div>
                 
                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                            {{-- <button class="button w-24 justify-center block bg-gray-200 text-gray-600">Previous</button> --}}
                            <button class="button w-24 justify-center block bg-green-400 text-white ml-2">ADD</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection