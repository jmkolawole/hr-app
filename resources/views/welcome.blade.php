<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    </style>
</head>


<body>
    <nav class='sidebar sidebar-menu-collapsed'>
        <a href='#' id='justify-icon'>
            <span class='glyphicon glyphicon-align-justify'></span>
        </a>
        <ul>
            <li class='active'>
                <a class='expandable' href='#' title='Dashboard'>
                    <span class='glyphicon glyphicon-home collapsed-element'></span>
                    <span class='expanded-element'>Dashboard</span>
                </a>
            </li>
            <li>
                <a class='expandable' href='#' title='APIs'>
                    <span class='glyphicon glyphicon-wrench collapsed-element'></span>
                    <span class='expanded-element'>APIs</span>
                </a>
            </li>
            <li>
                <a class='expandable' href='#' title='Settings'>
                    <span class='glyphicon glyphicon-cog collapsed-element'></span>
                    <span class='expanded-element'>Settings</span>
                </a>
            </li>
            <li>
                <a class='expandable' href='#' title='Account'>
                    <span class='glyphicon glyphicon-user collapsed-element'></span>
                    <span class='expanded-element'>Account</span>
                </a>
            </li>
        </ul>
        <a href='#' id='logout-icon' title='Logout'>
            <span class='glyphicon glyphicon-off'></span>
        </a>
    </nav>
    <div class="content" id="content">
        <div class=" container-fluid">
            <div class="row wrapper">
                <div class="col-md-2">
                    <aside class="sidebars position-fixed top-0 left-0 overflow-auto h-100 float-left"
                        id="show-side-navigation1">
                        <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
                        <div class="sidebars-header d-flex justify-content-center align-items-center px-3 py-4">
                        </div>

                        <ul class="categories list-unstyled">
                            <li class="">
                                <i class="fa fa-tachometer" aria-hidden="true"></i><a href="#"> Dashboard</a>
                            </li>
                            <li class="">
                                <i class="fa fa-users" aria-hidden="true"></i><a href="#"> Users</a>
                            </li>
                            <li class="">
                                <i class="fa fa-object-group" aria-hidden="true"></i><a href="#"> Departments</a>
                            </li>
                            <li class="">
                                <i class="fa fa-user-o" aria-hidden="true"></i><a href="#"> Employee</a>
                            </li>

                            <li class="">
                                <i class="fa fa-briefcase" aria-hidden="true"></i><a href="#"> Activities</a>
                            </li>
                            <li class="">
                                <i class="fa fa-plane" aria-hidden="true"></i><a href="#"> Holidays</a>
                            </li>
                            <li class="">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i><a href="#"> Events</a>
                            </li>
                            <li class="">
                                <i class="fa fa-money" aria-hidden="true"></i><a href="#"> Payroll</a>
                            </li>
                            <li class="">
                                <i class="fa fa-suitcase" aria-hidden="true"></i><a href="#"> Accounts</a>
                            </li>
                            <li class="">
                                <i class="fa fa-info-circle" aria-hidden="true"></i><a href="#"> Report</a>
                            </li>

                        </ul>
                    </aside>
                </div>

                <div class="col-md-10" style="background-color: #F9FBFD; padding:0!important">
                    <div class="top-bar">

                        <div class="left-part" style="">
                            <span class="title">Users</span>
                            <div class="year">
                                <select class="form-control">
                                    <option>Year</option>
                                    <option>2002</option>
                                </select>
                            </div>
                            <div class="search">
                                <input type="search" class=" form-control">
                            </div>
                        </div>
                        <div class="right-part">
                            <div class="menu">
                                <span>Language<i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                <span>Reports <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                <span>Project <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                            </div>

                            <div class="notifications">
                                <div><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span class="info"></span>
                                </div>
                                <div><i class="fa fa-bell" aria-hidden="true"></i>
                                    <span class="info bell"></span>
                                </div>
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type='text/javascript' src='//code.jquery.com/jquery-1.10.1.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>
