
@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
                <!-- breadcumb-area -->
                <section class="breadcumb-area card bg-gradient mb-5">
                    <div class="bread-cumb-content card-body d-flex align-items-center">
                        <div class="breadcumb-heading">
                            <h2 class="text-white">Dashboard</h2>
                        </div>
                        <div class="breadcumb-image ml-auto">
                            <img src="AdminAssets/img/breadcumb-dashboard.png" alt="">
                        </div>
                    </div>
                </section>
                <!-- End breadcumb-area -->

                <!-- highlight-area start -->
                <div class="row mb-5">
                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-purple card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="AdminAssets/img/student.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">160 <small class="d-block mt-2">Students</small></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-blue card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="AdminAssets/img/teacher.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">15 <small class="d-block mt-2">Teachers</small></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-green card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="AdminAssets/img/parent.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">160 <small class="d-block mt-2">Parent</small></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-yellow card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="AdminAssets/img/staff.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">10 <small class="d-block mt-2">Staff</small></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-yellow card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="AdminAssets/img/staff.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">1500 <small class="d-block mt-2">Total Send SMS</small></h2>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-green card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="AdminAssets/img/parent.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">16000 <small class="d-block mt-2">Total Buy SMS</small></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div
                            class="single-asset-counting-list-box bg-gradient bg-gradient-blue card border-0 text-center">
                            <div class="card-body">
                                <div class="single-asset-counting-list-image-wrap">
                                    <img src="AdminAssets/img/teacher.png" alt="">
                                </div>
                                <h2 class="text-white mb-0">10000 <small class="d-block mt-2">SMS Balance</small></h2>
                            </div>
                        </div>
                    </div>



                </div>

                <!---- student attendence ----->
                <div class="student mb-4 table-responsive">
                    <h4>
                        <span>
                            <i class="fa-solid fa-user mr-2"></i>Today Student's Attendence(23March,2022)
                        </span>
                        <span>
                            <i class="fa-solid fa-arrow-right-long mr-2"></i>See All
                        </span>
                    </h4>
                    <table class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Roll</th>
                                <th scope="col">Class</th>
                                <th scope="col">Name</th>
                                <th scope="col" style="color: blue;">In</th>
                                <th scope="col" style="color: red;">Out</th>
                                <th scope="col">Punch In Zone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>6</td>
                                <td>Jhon</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>6</td>
                                <td>Jhon</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>6</td>
                                <td>Jhon</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!---- /student attendence ----->

                <!---- staff attendence ----->
                <div class="student mb-4 table-responsive">
                    <h4>
                        <span>
                            <i class="fa-solid fa-person-dress mr-2"></i></i>Today Staff's Attendence(23March,2022)
                        </span>
                        <span><i class="fa-solid fa-arrow-right-long mr-2"></i> Seel All</span>
                    </h4>
                    <table class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Name</th>
                                <th scope="col" style="color: blue;">In</th>
                                <th scope="col" style="color: red;">Out</th>
                                <th scope="col">Punch In Zone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <!---- /staff attendence ----->

                <!---- student admission ----->
                <div class="student mb-4 table-responsive">
                    <h4>
                        <span>
                            <i class="fa-solid fa-earth-africa mr-2"></i>Student admission pending
                        </span>
                    </h4>
                    <table class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Session</th>
                                <th scope="col">Class</th>
                                <th scope="col">ID</th>
                                <th scope="col">Roll</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>
                                    <img src="AdminAssets/img/student.png" class="pending_img" alt="">
                                    <span>Ruman</span>
                                </td>
                                <td>
                                    <a href="#" class="process_btn"><i
                                            class="fa-solid fa-pen-to-square mr-2"></i>Process</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>
                                    <img src="AdminAssets/img/student.png" class="pending_img" alt="">
                                    <span>Ruman</span>
                                </td>
                                <td>
                                    <a href="#" class="process_btn"><i
                                            class="fa-solid fa-pen-to-square mr-2"></i>Process</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>
                                    <img src="AdminAssets/img/student.png" class="pending_img" alt="">
                                    <span>Ruman</span>
                                </td>
                                <td>
                                    <a href="#" class="process_btn"><i
                                            class="fa-solid fa-pen-to-square mr-2"></i>Process</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!---- /student admisson ----->
            </div>
@endsection

