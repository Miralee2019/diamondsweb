
var header = '<html>' +
    '<head>' +
    '<meta charset="utf-8">' +
    '<meta name="viewport" content="width=device-width, initial-scale=1">' +
    '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">' +
    '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>' +
    '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>' +
    ' <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>' +
    '<link rel="stylesheet" href="<?php echo base_url(); ?>assets/head_foot/css/header.css">' +
    '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">' +
    '</head>' +
    ' <body>' +
    '<div class="row header_section">' +
        '<div class="col-xl-2">' +
            '<div class="logo">' +
                '<img src="<?php echo base_url(); ?>assets/home/images/Maruti-Gems-Logo-02.jpg">' +
            '</div>' +
        '</div>' +
        '<div class="col-xl-10">' +
            '<div class="row nav_menu">' +
                '<div class="col-xl-12">' +
                    '<div class="input_area text-left">' +
                        '<input type="search" name="search" placeholder="Search for anything">' +
                        '<div class="input_icon text-right">' +
                            '<a href="#" class="search">' +
                                '<i style="font-size:24px" class="fa">&#xf002;</i>' +
                            '</a>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<div class="row nav_menu">' +
                '<div class="col-xl-12">' +
                    '<nav class="row navbar navbar-expand-md">' +
                        '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">' +
                            '<span class="navbar-toggler-icon"></span>' +
                        '</button>' +
                        '<div class="collapse navbar-collapse" id="collapsibleNavbar">' +
                            '<ul class="navbar-nav">' +
                                '<li class="nav-item">' +
                                    '<a class="nav-link" href="">Home</a>' +
                                '</li>' +
                                '<li class="nav-item">' +
                                    '<a class="nav-link" href="categories.html">Shop</a>' +
                                '</li>' +
                                '<li class="nav-item" style="position: relative;">' +
                                    '<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="collapse" data-target="#collapsivnavbar">Category</a>' +
                                    '<ul class="dropdown-menu" id="collapsivnavbar">' +
                                        '<li><a tabindex="-1" href="#">Category 1</a></li>' +
                                        '<li><a tabindex="-1" href="#">Category 2</a></li>' +
                                        '<li class="dropdown-submenu">' +
                                            '<a class="test" tabindex="-1" href="#">Category 3<span class="caret"></span></a>' +
                                            ' <ul class="dropdown-menu">' +
                                                '<li><a tabindex="-1" href="#">2nd level dropdown</a></li>' +
                                                '<li><a tabindex="-1" href="#">2nd level dropdown</a></li>' +
                                                '<li class="dropdown-submenu">' +
                                                    '<a class="test" href="#">Another dropdown <span class="caret"></span></a>' +
                                                    '<ul class="dropdown-menu">' +
                                                        '<li><a href="#">3rd level dropdown</a></li>' +
                                                        '<li><a href="#">3rd level dropdown</a></li>' +
                                                    '</ul>' +
                                                '</li>' +
                                            '</ul>' +
                                        '</li>' +
                                    '</ul>' +
                                '</li>' +
                                '<li class="nav-item" style="position: relative;">' +
                                    '<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Currency</a>' +
                                    '<div class="dropdown-menu">' +
                                        '<a class="dropdown-item" href="#">United States (US) dollar</a>' +
                                        '<a class="dropdown-item" href="#">Euro</a>' +
                                        '<a class="dropdown-item" href="#">Pound sterling</a>' +
                                    '</div>' +
                                '</li>' +
                                '<li class="nav-item">' +
                                    '<a class="nav-link" href="#">About Us</a>' +
                                '</li>' +
                                '<li class="nav-item">' +
                                    '<a class="nav-link" href="#">Contact Us</a>' +
                                '</li>' +
                            '</ul>' +
                        '</div>' +
                    '</nav>' +
                '</div>' +
            '</div>' +
        '</div>' +
    '</div>' +
'<body>' +
'</html>';
