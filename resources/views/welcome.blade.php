<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 

    <style>
        .button-row {
            padding: 20px
        }

        .table-row {
            padding: 20px;
        }

        .table-header {
            background-color: white;
            height: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .table-header .form-search {
            width: 30%;
        }

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
                    <div class="row button-row">
                        <div class="col-md-12">
                            <button class="btn btn-success pull-right" data-bs-toggle="modal"
                                data-bs-target="#addModal">Add User</button>
                        </div>
                    </div>

                    <div class="row table-row">
                        <div class="col-md-12">
                            <div class="table-header">
                                <h4>List Users</h4>
                                <div class="form-search">
                                    <input class="form-control" type="search" placeholder="search">
                                </div>
                            </div>
                            <style>
                                .users-table tr {
                                    line-height: 50px;
                                    min-height: 50px;
                                    height: 50px;
                                }

                                .users-table .header {
                                    background-color: #EFF4FA;
                                    border: 1px solid #ddd
                                }

                                .users-table img {
                                    height: 45px;
                                    width: 45px;
                                    border-radius: 50%;
                                    margin-right: 10px;
                                }

                                .users-table .action span {
                                    font-size: 22px;
                                    margin: 0 5px
                                }

                            </style>

                            <table class="table table-borderless users-table">
                                <thead>
                                    <tr class="header">
                                        <th scope="col">Name</th>
                                        <th scope="col">Create Date</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($customers as $customer)
                                        <tr class="item{{$customer->id}}">
                                            <td>
                                                <span><img src="images/a.jpg"></span>
                                                <span>{{ $customer->firstname }} {{ $customer->lastname }}</span>
                                                <span class="badge badge-primary">New</span>
                                            </td>
                                            <td>{{ $customer->created_at }}</td>
                                            <td>{{ $customer->role->name }}</td>
                                            <td class="action">
                                                <span>
                                                    <button class="btn"
                                                        data-bs-target="#edit{{ $customer->id }}"
                                                        data-bs-toggle="modal"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                </span>
                                                <style>
                                                    .modal-backdrop {
                                                        display: none !important;
                                                        visibility: hidden !important;
                                                        position: relative !important;
                                                    }

                                                    .modal {
                                                        background: url("http://bin.smwcentral.net/u/11361/BlackTransparentBackground.png");
                                                        z-index: 1100 !important;
                                                    }

                                                </style>
                                                <div class="edit-section" style="display: inline">
                                                    <div class=" edit modal fade" id="edit{{ $customer->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        {{ $customer->firstname }}
                                                                        {{ $customer->lastname }}</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="data-edit{{ $customer->id }}" method="POST"
                                                                        action="{{ route('edit.customer', $customer->id) }}">
                                                                        {{ csrf_field() }}
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <input type="text"
                                                                                        name="employee_id"
                                                                                        value="{{ $customer->employee_id }}"
                                                                                        placeholder="Employee ID*"
                                                                                        class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <input type="text" name="firstname"
                                                                                        placeholder="First Name*"
                                                                                        value="{{ $customer->firstname }}"
                                                                                        class="form-control"
                                                                                        id="firstname">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <input type="text" name="lastname"
                                                                                        placeholder="Last Name*"
                                                                                        class="form-control"
                                                                                        value="{{ $customer->lastname }}"
                                                                                        id="lastname">
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <input type="email" name="email"
                                                                                        placeholder="Email*"
                                                                                        class="form-control"
                                                                                        value="{{ $customer->email }}"
                                                                                        id="email">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <input type="text" name="phone"
                                                                                        placeholder="Mobile No"
                                                                                        class="form-control"
                                                                                        value="{{ $customer->phone }}"
                                                                                        id="phone">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <select class="form-control"
                                                                                        name="role_id">


                                                                                        @foreach ($roles as $role)
                                                                                            <option
                                                                                                @if ($customer->role->id == $role->id) selected @endif
                                                                                                value="{{ $role->id }}">
                                                                                                {{ $role->name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <input type="text" name="username"
                                                                                        placeholder="Username*"
                                                                                        value="{{ $customer->username }}"
                                                                                        class="form-control"
                                                                                        id="firstname">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <input type="password"
                                                                                        name="password"
                                                                                        placeholder="Password*"
                                                                                        class="form-control"
                                                                                        id="firstname">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <input type="password"
                                                                                        name="password_confirmation"
                                                                                        placeholder="Confirm Password*"
                                                                                        class="form-control"
                                                                                        id="firstname">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>

                                                                    <style>
                                                                        .operations-table .header {
                                                                            background-color: #EFF4FA;
                                                                            border: 1px solid #ddd
                                                                        }

                                                                        .operations-table tr {
                                                                            line-height: 30px;
                                                                            min-height: 30px;
                                                                            height: 30px;

                                                                        }

                                                                        .operations-table .checkbox {
                                                                            margin-top: 10px
                                                                        }

                                                                    </style>
                                                                    <table
                                                                        class="table table-borderless operations-table">
                                                                        <thead>
                                                                            <tr class="header">
                                                                                <th scope="col">Module Permission</th>
                                                                                @foreach ($operations as $operation)
                                                                                    <th scope="col">
                                                                                        {{ $operation->operation }}
                                                                                    </th>
                                                                                @endforeach
                                                                                <th></th>

                                                                            </tr>

                                                                        </thead>

                                                                        <tbody>

                                                                            @foreach ($roles as $role)
                                                                                <form
                                                                                    action="{{ route('assign.operation') }}"
                                                                                    method="POST">
                                                                                    {{ csrf_field() }}
                                                                                    <tr>
                                                                                        <input type="hidden" name="role"
                                                                                            value="{{ $role->id }}">
                                                                                        <td>{{ $role->name }}</td>
                                                                                        <td><input
                                                                                                class="checkbox"
                                                                                                type="checkbox"
                                                                                                {{ $role->hasOperation('read') ? 'checked' : '' }}
                                                                                                name="operation_read">
                                                                                        </td>
                                                                                        <td><input
                                                                                                class="checkbox"
                                                                                                type="checkbox"
                                                                                                {{ $role->hasOperation('write') ? 'checked' : '' }}
                                                                                                name="operation_write">
                                                                                        </td>
                                                                                        <td><input
                                                                                                class="checkbox"
                                                                                                type="checkbox"
                                                                                                {{ $role->hasOperation('delete') ? 'checked' : '' }}
                                                                                                name="operation_delete">
                                                                                        </td>
                                                                                        <td><button type="submit"
                                                                                                class="btn ">Assign</button>
                                                                                        </td>
                                                                                    </tr>
                                                                                </form>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary edit-button"
                                                                        id="editButton-{{ $customer->id }}">Update User</button>
                                                                    <button type="button" class="btn"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <span style="display: inline">
                                                    <button class="btn"><i class="fa fa-trash deleteUser"
                                                            aria-hidden="true" rel="{{ $customer->id }}"></i></button>
                                                </span>
                                            </td>
                                            {{-- Edit Modal here --}}

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="data-form" method="POST" action="{{ route('add.customer') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" name="employee_id" placeholder="Employee ID*"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" name="firstname" placeholder="First Name*"
                                        class="form-control" id="firstname">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" name="lastname" placeholder="Last Name*" class="form-control"
                                        id="firstname">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="email" name="email" placeholder="Email*" class="form-control"
                                        id="firstname">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="text" name="phone" placeholder="Mobile No" class="form-control"
                                        id="firstname">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <select class="form-control" name="role_id">
                                        <option>Select Role Type</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="text" name="username" placeholder="Username*" class="form-control"
                                        id="firstname">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="password" name="password" placeholder="Password*"
                                        class="form-control" id="firstname">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password*"
                                        class="form-control" id="firstname">
                                </div>
                            </div>
                        </div>
                    </form>

                    <style>
                        .operations-table .header {
                            background-color: #EFF4FA;
                            border: 1px solid #ddd
                        }

                        .operations-table tr {
                            line-height: 30px;
                            min-height: 30px;
                            height: 30px;

                        }

                        .operations-table .checkbox {
                            margin-top: 10px
                        }

                    </style>
                    <table class="table table-borderless operations-table">
                        <thead>
                            <tr class="header">
                                <th scope="col">Module Permission</th>
                                @foreach ($operations as $operation)
                                    <th scope="col">{{ $operation->operation }}</th>
                                @endforeach
                                <th></th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($roles as $role)
                                <form action="{{ route('assign.operation') }}" method="POST">
                                    {{ csrf_field() }}
                                    <tr>
                                        <input type="hidden" name="role" value="{{ $role->id }}">
                                        <td>{{ $role->name }}</td>
                                        <td><input class="checkbox" type="checkbox"
                                                {{ $role->hasOperation('read') ? 'checked' : '' }}
                                                name="operation_read">
                                        </td>
                                        <td><input class="checkbox" type="checkbox"
                                                {{ $role->hasOperation('write') ? 'checked' : '' }}
                                                name="operation_write">
                                        </td>
                                        <td><input class="checkbox" type="checkbox"
                                                {{ $role->hasOperation('delete') ? 'checked' : '' }}
                                                name="operation_delete">
                                        </td>
                                        <td><button type="submit" class="btn ">Assign</button></td>
                                    </tr>
                                </form>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="submit-button">Add User</button>
                    <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='//code.jquery.com/jquery-1.10.1.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
    <script>
        $("#submit-button").on('click', function() {
            $("#data-form").submit();
            $('#modal').modal('toggle');
        });

        $(".edit-button").on('click', function() {
            var idEdit = $(this).attr('id');
            var id = idEdit.split('-')[1];
            
            $("#data-edit"+id).submit();
            $('#modal').modal('toggle');
        });

        $('.deleteUser').click(function() {
            var id = $(this).attr('rel');
            var token = $("meta[name='csrf-token']").attr("content");
            
            var msg = confirm('Are you sure?');
            if(msg){
                $.ajax({
                        url: "user/delete/" + id,
                        type: 'DELETE',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function() {
                            $('.item' + id).remove();
                            
                        }
                    });
            }else{
                return;
            }
            
        });
    </script>
</body>
