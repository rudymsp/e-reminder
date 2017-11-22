<body>
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('Dashboard')?>">
                    <img src="<?php echo base_url('assets/img/logo.png')?>" />
                </a>
            </div>
            <div class="left-div">
                
            </div>
        </div>
    </div>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li>
                                <a <?php if($menu == 'dashboard'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Dashboard')?>">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a <?php if($menu == 'dash_post'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Post')?>">
                                    Pengumuman
                                </a>
                            </li>
                            <li>
                                <a <?php if($menu == 'dash_reminder'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Reminder')?>">
                                    Reminder
                                </a>
                            </li>
                            <li>
                                <a <?php if($menu == 'dash_manage'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Manage')?>">
                                    Kelola User
                                </a>
                            </li>
                            <li>
                                <a <?php if($menu == 'login'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Login')?>">
                                    Login
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>