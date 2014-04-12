<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap, from Twitter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $page_title . $page_title_split . $site_name ?></title>
        <!-- Le styles -->
        <link href="/css/admin/bootstrap.css" rel="stylesheet">
        <link href="/css/admin/bootstrap-responsive.css" rel="stylesheet">
        <link href="/css/admin/main.css" rel="stylesheet">
        <link href="<?php echo URL::base(); ?>css/main-admin.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::base(); ?>css/main-admin.css" rel="stylesheet" type="text/css" />
        <!--[if IE 6]>
        <link href="<?php echo URL::base(); ?>css/htmls-ie.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <?php if (ViewHead::hasStyles()): ?>
            <?php while ($headStyle = ViewHead::getNextStyle()): ?>
                <link href="<?php echo URL::base() ?>css/<?php echo $headStyle ?>" rel="stylesheet" type="text/css" />
            <?php endwhile; ?>
        <?php endif; ?>
        <script type="text/javascript">
            var baseurl = '<?php echo URL::base(); ?>';
        </script>
        <?php if (ViewHead::hasScripts()): ?>
            <?php while ($headScript = ViewHead::getNextScript()): ?>
                <script type="text/javascript" src="<?php echo URL::base() ?>js/<?php echo $headScript ?>"></script>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <link href="/css/admin/ie.css" rel="stylesheet">
        <![endif]-->
    </head>

    <body>
        <?php if (Request::instance()->controller != "login") { ?>
        
        
        
        } ?>
        <div class="loading"><img src="img/loaders/loader01.gif" alt=""></div>

        <header>
            <a href="#" class="logo"><img src="img/logoImage.png" alt=""></a>

            <span id="mobileNav"><img src="img/mobile-icon.png" alt=""></span>
            <span id="phoneNav"><img src="img/mobile-icon.png" alt=""></span>

            <div class="phone-menu">
                <ul>
                    <li class="active"><a href="index.html"><span></span> Dashboard</a></li>
                    <li><a href="#"><span></span> Forms <div class="subchild-arrow"></div></a>
                        <ul>
                            <li><a href="forms.html"><span></span> Form elements</a></li>
                            <li><a href="form-wizards.html"><span></span> Form wizards</a></li>
                            <li><a href="forms-validate.html"><span></span> Form validate</a></li>
                            <li><a href="input-grid.html"><span></span> Input grid</a></li>
                        </ul>
                    </li>
                    <li><a href="index.html"><span></span> Charts</a></li>
                    <li><a href="#"><span></span> UI elements <div class="subchild-arrow"></div></a>
                        <ul>
                            <li><a href="ui.html"><span></span> Main UI elements</a></li>
                            <li><a href="buttons.html"><span></span> Buttons</a></li>
                            <li><a href="typography.html"><span></span> Typography</a></li>
                            <li><a href="gallery.html"><span></span> Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="index.html"><span></span> Chat</a></li>
                    <li><a href="#"><span></span> Tables <div class="subchild-arrow"></div></a>
                        <ul>
                            <li><a href="standard-tables.html"><span></span> Standard tables</a></li>
                            <li><a href="dynamic-tables.html"><span></span> Dynamic tables</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span></span> Errors <div class="subchild-arrow"></div></a>
                        <ul>
                            <li><a href="403.html"><span></span> 403</a></li>
                            <li><a href="404.html"><span></span> 404</a></li>
                            <li><a href="405.html"><span></span> 405</a></li>
                            <li><a href="500.html"><span></span> 500</a></li>
                            <li><a href="502.html"><span></span> 502</a></li>
                            <li><a href="offline.html"><span></span> Offline</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span></span> Other <div class="subchild-arrow"></div></a>
                        <ul>
                            <li><a href="inbox.html"><span></span> Inbox template</a></li>
                            <li><a href="inbox_template.html"><span></span> Inbox template v2</a></li>
                            <li><a href="profile.html"><span></span> Profile page</a></li>
                            <li><a href="search-result.html"><span></span> Search result</a></li>
                            <li><a href="file-manager.html"><span></span> File manager</a></li>
                            <li><a href="invoice.html"><span></span> Invoice</a></li>
                            <li><a href="search-result.html"><span></span> Search results</a></li>
                            <li><a href="tabbed-page.html"><span></span> Tabbed page</a></li>
                            <li><a href="login.html"><span></span> Login</a></li>
                            <li><a href="loginv2.html"><span></span> Login v2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <ul class="header-actions">
                <li><a href="#"><img src="img/icon/14x14/header/messages.png" alt=""></a>
                    <!-- Messages drop down -->
                    <div class="dropdown">
                        <div class="dropdown-inner">
                            <div class="summary">
                                <span><strong>Messages</strong> (6) emails and (2) PM</span>
                            </div>
                            <a href="#" class="dropdown-block clearfix">
                                <img class="avatar" src="img/avatar_01.png" alt="Profile image">
                                <div class="result">
                                    <span class="head"><strong>Jason Bourne</strong> <i>1 hour ago</i></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </a>
                            <a href="#" class="dropdown-block clearfix">
                                <img class="avatar" src="img/avatar_02.png" alt="Profile image">
                                <div class="result">
                                    <span class="head"><strong>Adamova Sharapova</strong> <i>3 hour ago</i></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </a>
                            <a href="#" class="dropdown-block clearfix">
                                <img class="avatar" src="img/avatar_03.png" alt="Profile image">
                                <div class="result">
                                    <span class="head"><strong>Angelina Jozek</strong> <i>1 day ago</i></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </a>
                            <a href="#" class="dropdown-block clearfix">
                                <img class="avatar" src="img/avatar_04.png" alt="Profile image">
                                <div class="result">
                                    <span class="head"><strong>Maria Gomez</strong> <i>2 days ago</i></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </a>
                            <div class="dropdown-footer" align="right">
                                <a href="#" class="all-messages">View all messages</a>
                            </div>
                        </div>
                    </div>
                    <!-- Messages drop down -->
                </li>
                <li><a href="#"><img src="img/icon/14x14/header/notification.png" alt=""></a>
                    <!-- Notification drop down -->
                    <div class="dropdown">
                        <div class="dropdown-inner">
                            <div class="summary">
                                <span><strong>Notifications</strong> (2) alerts and (1) info</span>
                            </div>
                            <div class="dropdown-block clearfix">
                                <div class="result">
                                    <p>You are reaching your server diskspace. Please make sure you arrange more diskspace for your security...</p>
                                </div>
                            </div>
                            <div class="dropdown-block clearfix">
                                <div class="result">
                                    <p>Scheduled system back-up on 02 February 2013 at 00:00...</p>
                                </div>
                            </div>
                            <div class="dropdown-block clearfix">
                                <img class="avatar" src="img/avatar_04.png" alt="Profile image">
                                <div class="result">
                                    <span class="head"><strong>Maria Gomez</strong> <i>2 days ago</i></span>
                                    <p>has updated her profile...</p>
                                </div>
                            </div>
                            <div class="dropdown-footer" align="right">
                                <a href="#" class="all-messages">View all notifications</a>
                            </div>
                        </div>
                    </div>
                    <!-- Notification drop down -->
                </li>
                <li><a href="#"><img src="img/icon/14x14/header/settings.png" alt=""></a>
                    <!-- Settings drop down -->
                    <div class="dropdown">
                        <div class="dropdown-inner">
                            <div class="summary">
                                <strong>Settings</strong> for your site</span>
                            </div>
                            <a href="#" class="dropdown-block clearfix">
                                <span class="head"><img src="img/icon/14x14/light/cog.png" alt=""> Change site settings</span>
                            </a>
                            <a href="#" class="dropdown-block dropdown-block clearfix">
                                <span class="head"><img src="img/icon/14x14/light/box1.png" alt=""> Plugins</span>
                            </a>
                            <a href="#" class="dropdown-block clearfix">
                                <span class="head"><img src="img/icon/14x14/light/grid.png" alt=""> Change theme</span>
                            </a>
                        </div>
                    </div>
                    <!-- Settings drop down -->
                </li>
                <li><a href="#"><img src="img/icon/14x14/header/out.png" alt=""></a></li>
            </ul> 
        </header>

        <div class="mainNavigation">
            <div class="innerNavigation">
                <div class="profile clearfix">
                    <a href="#"><img src="img/avatar_02.png" alt="Profile image"></a>
                    <div class="profile-options">
                        <div class="basic">
                            <div class="info clearfix">
                                <span class="name">Bernad Delic</span>
                                <span class="message">8 pm</span>
                            </div>
                            <div class="search">
                                <div class="field">
                                    <input type="text" class="span12" placeholder="Search for something...">
                                    <a href="#" class="button-turquoise"><img src="img/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="user-configuration" align="center">
                            <a href="#"><img src="img/icon/14x14/header/messages.png" alt=""></a>
                            <a href="#"><img src="img/icon/14x14/header/settings.png" alt=""></a>
                            <a href="#"><img src="img/icon/14x14/header/notification.png" alt=""></a>
                            <a href="#"><img src="img/icon/14x14/header/out.png" alt=""></a>
                        </div>
                    </div>
                </div> 
                <ul class="mainNav">
                    <li class="active"><a href="index.html"><span><img src="img/icon/mainNav/dashboard.png"> Dashboard</span></a></li>
                    <li class="dropdown"><a href="#"><span><img src="img/icon/mainNav/forms.png"> Forms</span></a>
                        <ul>
                            <li><a href="forms.html"><span></span> Form elements</a></li>
                            <li><a href="form-wizards.html"><span></span> Form wizards</a></li>
                            <li><a href="forms-validate.html"><span></span> Form validate</a></li>
                            <li><a href="input-grid.html"><span></span> Input grid</a></li>
                        </ul>
                    </li>
                    <li><a href="charts.html"><span><img src="img/icon/mainNav/chart.png"> Charts</span></a></li>
                    <li class="dropdown"><a href="#"><span><img src="img/icon/mainNav/ui.png"> UI elements</span></a>
                        <ul>
                            <li><a href="ui.html"><span></span> Main UI elements</a></li>
                            <li><a href="buttons.html"><span></span> Buttons</a></li>
                            <li><a href="typography.html"><span></span> Typography</a></li>
                            <li><a href="gallery.html"><span></span> Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="chat.html"><span><img src="img/icon/mainNav/chat.png"> Chat</span></a></li>
                    <li class="dropdown"><a href="#"><span><img src="img/icon/mainNav/tables.png"> Tables</span></a>
                        <ul>
                            <li><a href="standard-tables.html"><span></span> Standard tables</a></li>
                            <li><a href="dynamic-tables.html"><span></span> Dynamic tables</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span><img src="img/icon/mainNav/error.png"> Errors</span></a>
                        <ul>
                            <li><a href="403.html"><span></span> 403</a></li>
                            <li><a href="404.html"><span></span> 404</a></li>
                            <li><a href="405.html"><span></span> 405</a></li>
                            <li><a href="500.html"><span></span> 500</a></li>
                            <li><a href="502.html"><span></span> 502</a></li>
                            <li><a href="offline.html"><span></span> Offline</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span><img src="img/icon/mainNav/other.png"> Other</span></a>
                        <ul>
                            <li><a href="inbox.html"><span></span> Inbox template</a></li>
                            <li><a href="inbox_template.html"><span></span> Inbox template v2</a></li>
                            <li><a href="profile.html"><span></span> Profile page</a></li>
                            <li><a href="search-result.html"><span></span> Search result</a></li>
                            <li><a href="file-manager.html"><span></span> File manager</a></li>
                            <li><a href="invoice.html"><span></span> Invoice</a></li>
                            <li><a href="search-result.html"><span></span> Search results</a></li>
                            <li><a href="tabbed-page.html"><span></span> Tabbed page</a></li>
                            <li><a href="login.html"><span></span> Login</a></li>
                            <li><a href="loginv2.html"><span></span> Login v2</a></li>
                            <li><a href="#.html"><span></span> Third menu <div class="subchild-arrow"></div></a>
                                <ul>
                                    <li><a href="#"><span></span> Third child link</a></li>
                                    <li><a href="#"><span></span> Third child link 2</a></li>
                                    <li><a href="#"><span></span> Third child link 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <div class="nav-widget" align="center">
                        <div class="chart" id="sales-current"></div>
                        <h4>$52.384 <span><a href="#">March 2013</a></span></h4>
                    </div>

                    <div class="nav-widget">
                        <h5>Diskspace usage:</h5>
                        <div class="progress diskspace progress-info thin progress-striped">
                            <div class="bar"></div>
                        </div>
                        <h5>Monthly bandwidth:</h5>
                        <div class="progress bandwidth progress-danger thin progress-striped">
                            <div class="bar"></div>
                        </div>
                        <h5>Sql databases:</h5>
                        <div class="progress sql progress-success thin progress-striped">
                            <div class="bar"></div>
                        </div>
                    </div>

                    <div class="nav-widget" align="center">
                        <div class="chart" id="sales-current2"></div>
                        <h4>$352.384 <span><a href="#">April 2013</a></span></h4>
                    </div>

                    <div class="nav-widget" align="center">
                        <a href="#" class="mainNav-button"><img src="img/icon/24x24/cog.png" alt=""></a>
                        <a href="#" class="mainNav-button"><img src="img/icon/24x24/calendar.png" alt=""></a>
                        <a href="#" class="mainNav-button"><img src="img/icon/24x24/folder.png" alt=""></a>
                        <a href="#" class="mainNav-button"><img src="img/icon/24x24/plus.png" alt=""></a>
                    </div>

                    <div class="nav-widget">
                        <div class="flexslider-nav">
                            <ul class="slides">
                                <li>
                                    <div class="download-report">
                                        <img src="img/icon/icon_PDF.png" alt="">
                                        <span>April 2013</span>
                                        <a href="#">Download</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="download-report">
                                        <img src="img/icon/table-excel-icon.png" alt="">
                                        <span>March 2013</span>
                                        <a href="#">Download</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="download-report">
                                        <img src="img/icon/word.png" alt="">
                                        <span>February 2013</span>
                                        <a href="#">Download</a>
                                    </div>
                                </li>
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>
                    </div>
                </ul>
                <div class="submenus">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/icon_PDF.png" alt="">
                                    <span>April 2013</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/table-excel-icon.png" alt="">
                                    <span>March 2013</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/word.png" alt="">
                                    <span>February 2013</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/word.png" alt="">
                                    <span>January 2013</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/table-excel-icon.png" alt="">
                                    <span>December 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/icon_PDF.png" alt="">
                                    <span>November 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/icon_PDF.png" alt="">
                                    <span>October 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/word.png" alt="">
                                    <span>September 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/icon_PDF.png" alt="">
                                    <span>August 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/table-excel-icon.png" alt="">
                                    <span>October 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/icon_PDF.png" alt="">
                                    <span>September 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/icon_PDF.png" alt="">
                                    <span>August 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/icon_PDF.png" alt="">
                                    <span>October 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/table-excel-icon.png" alt="">
                                    <span>September 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/word.png" alt="">
                                    <span>August 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/icon_PDF.png" alt="">
                                    <span>October 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/word.png" alt="">
                                    <span>September 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="download-report">
                                    <img src="img/icon/icon_PDF.png" alt="">
                                    <span>August 2012</span>
                                    <a href="#">Download</a>
                                </div>
                            </li>
                            <!-- items mirrored twice, total of 12 -->
                        </ul>
                    </div>

                    <div id="quick-report" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <div class="status-widget clearfix">
                                    <div class="status">
                                        <div class="chart" id="sales"></div>
                                        <span class="total">$52.452</span>
                                        <span class="month">April 2013</span>
                                    </div>
                                    <div class="status">
                                        <div class="chart" id="sales2"></div>
                                        <span class="total">$72.336</span>
                                        <span class="month">March 2013</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="status-widget clearfix">
                                    <div class="status">
                                        <div class="chart" id="sales3"></div>
                                        <span class="total">$22.658</span>
                                        <span class="month">February 2013</span>
                                    </div>
                                    <div class="status">
                                        <div class="chart" id="sales4"></div>
                                        <span class="total">$38.171</span>
                                        <span class="month">January 2013</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel nav -->
                        <ol class="carousel-indicators">
                            <li data-target="#quick-report" data-slide-to="0" class="active"></li>
                            <li data-target="#quick-report" data-slide-to="1"></li>
                        </ol>
                    </div>

                    <div class="divider"><span><i></i></span></div>

                    <div class="widget-holder">
                        <input name="tags" id="tags" value="admin, responsive, mobile, tablet, bootstrap, modern, fresh, gallery grid, charts, ui design, sidebar" />
                    </div>

                    <div class="divider"><span><i></i></span></div>

                    <div class="space" align="center">
                        <div class="inline-circle">
                            <div class="circle-stats" align="center">
                                <div class="chart2" data-percent="72"><img src="img/icon/14x14/light/file.png" alt=""></div>
                            </div>
                            <h5>File count</h5>
                        </div>

                        <div class="inline-circle">
                            <div class="circle-stats" align="center">
                                <div class="chart3" data-percent="68"><img src="img/icon/14x14/light/drawers.png" alt=""></div>
                            </div>
                            <h5>Space usage</h5>
                        </div>
                    </div>

                    <div class="space" align="center" style="margin-bottom: -10px;">
                        <div class="inline-circle">
                            <div class="circle-stats" align="center">
                                <div class="chart5" data-percent="43"><img src="img/icon/14x14/light/cog2.png" alt=""></div>
                            </div>
                            <h5>RAM usage</h5>
                        </div>

                        <div class="inline-circle">
                            <div class="circle-stats" align="center">
                                <div class="chart4" data-percent="25"><img src="img/icon/14x14/light/folder2.png" alt=""></div>
                            </div>
                            <h5>CPU overload</h5>
                        </div>
                    </div>

                    <div class="divider"><span><i></i></span></div>

                    <div class="widget-holder">
                        <div id="datePicker"></div>
                    </div>

                    <div class="divider"><span><i></i></span></div>

                    <div class="widget-holder">
                        <div class="progress thin progress-striped">
                            <div class="bar" style="width: 97%;"></div>
                        </div>

                        <div class="progress progress-success thin progress-striped">
                            <div class="bar" style="width: 77%;"></div>
                        </div>

                        <div class="progress progress-danger thin progress-striped">
                            <div class="bar" style="width: 57%;"></div>
                        </div>

                        <div class="progress progress-info thin progress-striped">
                            <div class="bar" style="width: 37%;"></div>
                        </div>

                        <div class="progress progress-warning thin progress-striped">
                            <div class="bar" style="width: 17%;"></div>
                        </div>
                    </div>

                    <div class="divider"><span><i></i></span></div>

                    <div class="widget-holder">
                        <a href="#" class="button button-turquoise small-button">Block button</a>
                        <a href="#" class="button button-yellow small-button">Another block button</a>
                    </div>

                    <div class="divider"><span><i></i></span></div>

                    <div class="widget-holder">
                        <span class="head">Add new user:</span>
                        <label class="field-name">Name:</label>
                        <input type="text" placeholder="First name">

                        <label class="field-name">Username:</label>
                        <input type="text" placeholder="Choose username">

                        <label class="field-name">Password:</label>
                        <input type="password" placeholder="Type password">

                        <div class="row-fluid">
                            <div class="actions">
                                <span class="span6">
                                    <a href="#" class="button button-blue small-button">Add</a>
                                </span>
                                <span class="span6">
                                    <a href="#" class="button button-red small-button">Reset</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="divider"><span><i></i></span></div>

                    <div class="widget-holder">
                        <div class="upload-files">
                            <div class="uploading-files">
                                <div class="uploading-header">
                                    <span>File uploader</span>
                                </div>
                                <div class="drag-drop">
                                    <span>Drag and drop files</span>
                                </div>
                                <div class="uploading">
                                    <div class="media-type">
                                        <img src="img/icon/14x14/light/picture1.png" alt="">
                                        <span>photo_0323.jpg</span>
                                    </div>
                                    <div class="action">
                                        <a href="#" data-toggle="n-tooltip" title="Pause upload"><img src="img/icon/14x14/light/pause.png" alt=""></a>
                                    </div>
                                    <div class="file-info">
                                        <div class="progress thin progress-striped">
                                            <div class="bar" style="width: 17%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uploading">
                                    <div class="media-type">
                                        <img src="img/icon/14x14/light/file1.png" alt="">
                                        <span>files.zip</span>
                                    </div>
                                    <div class="action">
                                        <a href="#" data-toggle="n-tooltip" title="Pause upload"><img src="img/icon/14x14/light/pause.png" alt=""></a>
                                    </div>
                                    <div class="file-info">
                                        <div class="progress thin progress-success progress-striped">
                                            <div class="bar" style="width: 70%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uploading">
                                    <div class="media-type">
                                        <img src="img/icon/14x14/light/picture1.png" alt="">
                                        <span>photo_01453.jpg</span>
                                    </div>
                                    <div class="action">
                                        <img src="img/icon/14x14/light/random.png" alt="">
                                    </div>
                                    <div class="file-info">
                                        <div class="progress thin progress-warning progress-striped">
                                            <div class="bar" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uploading">
                                    <div class="media-type">
                                        <img src="img/icon/14x14/light/folder2.png" alt="">
                                        <span>new_template.rar</span>
                                    </div>
                                    <div class="action">
                                        <img src="img/icon/14x14/light/random.png" alt="">
                                    </div>
                                    <div class="file-info">
                                        <div class="progress thin progress-danger progress-striped">
                                            <div class="bar" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uploading">
                                    <div class="media-type">
                                        <img src="img/icon/14x14/light/video-camera.png" alt="">
                                        <span>images.zip</span>
                                    </div>
                                    <div class="action">
                                        <img src="img/icon/14x14/light/random.png" alt="">
                                    </div>
                                    <div class="file-info">
                                        <div class="progress thin progress-success progress-striped">
                                            <div class="bar" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uploading-footer">
                                    <span>3/5 Files Uploaded</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider"><span><i></i></span></div>

                    <div class="widget-holder">
                        <span class="head">File tree:</span>
                        <div id="file-tree" class="filetree" style="width: 100%;"></div>
                    </div>

                    <div class="divider"><span><i></i></span></div>

                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="top-bar">
            <div class="breadcrumbs fLeft">
                <ul class="breadcrumb">
                    <li class="active"><img src="img/icon/14x14/light/home5.png" alt=""> Dashboard</li>
                </ul>
            </div>

            <ul class="bar-actions">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="img/icon/14x14/light/plus.png" alt=""> Monthly invoices <img class="arrow" src="img/arrow-down.png" alt=""></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><img src="img/icon/14x14/light/download4.png" alt=""> Download statistic</a></li>
                        <li><a href="#"><img src="img/icon/14x14/light/plus.png" alt=""> Make new report</a></li>
                        <li class="last-child"><a href="#"><img src="img/icon/14x14/light/trash.png" alt=""> Delete all</a></li>
                    </ul>
                </li>
                <li><a href="#"><img src="img/icon/14x14/light/box2.png" alt=""> New orders</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="img/icon/14x14/light/download4.png" alt=""> Monthly reports <img class="arrow" src="img/arrow-down.png" alt=""></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><img src="img/icon/14x14/light/download4.png" alt=""> Download statistic</a></li>
                        <li><a href="#"><img src="img/icon/14x14/light/plus.png" alt=""> Make new report</a></li>
                        <li class="last-child"><a href="#"><img src="img/icon/14x14/light/trash.png" alt=""> Delete all</a></li>
                    </ul>
                </li>
                <li class="range"><a id="reportrange" href="#"><img src="img/icon/14x14/light/calendar.png" alt=""> <span></span></a></li>
            </ul>
        </div>

        <div class="page-info clearfix">
            <img src="img/icon/32x32/Desktop.png" alt="">
            <h5>Dashboard</h5>

            <ul class="quick-actions">
                <li><a class="sidebar" data-toggle="n-tooltip" title="Hide/show sidebar" href="#"><img src="img/icon/14x14/light/random5.png" alt=""></a></a></li>
                <li><a data-toggle="n-tooltip" title="Homepage refresh" href="#"><img src="img/icon/14x14/light/home5.png" alt=""></a></li>
                <li><a data-toggle="n-tooltip" title="Change some settings" href="#"><img src="img/icon/14x14/light/cog2.png" alt=""></a></li>
                <li class="active"><a data-toggle="n-tooltip" title="Charts auto-refresh" href="#"><img src="img/icon/14x14/light/refresh2.png" alt=""></a></li>
                <li><a data-toggle="n-tooltip" title="Add something" href="#"><img src="img/icon/14x14/light/plus.png" alt=""></a></li>
            </ul>

            <img src="point/point01.png" alt="" class="point" style="float: right; margin-top: 8px;">
        </div>

        <div class="alert alert-info noMargin">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Information!</strong> You have changed personal info, but some input fields are still empty.
        </div>

        <div class="inner-content">
            <div class="row-fluid">
                <div class="span9">
                    <h5>Quick actions</h5>
                    <ul class="dashboard-actions clearfix">
                        <li>
                            <a href="#" data-toggle="n-tooltip" title="Manage media files">
                                <div class="dashboard-action">
                                    <img src="img/icon/32x32/Pictures.png" alt="">
                                    <h5>Media</h5>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="n-tooltip" title="Check reports">
                                <div class="dashboard-action">
                                    <img src="img/icon/32x32/System Activity Monitor.png" alt="">
                                    <h5>Reports</h5>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="n-tooltip" title="Create new page">
                                <div class="dashboard-action">
                                    <img src="img/icon/32x32/Document 2 Add.png" alt="">
                                    <h5>New page</h5>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="n-tooltip" title="Check events">
                                <div class="dashboard-action">
                                    <img src="img/icon/32x32/Calendar.png" alt="">
                                    <h5>Events</h5>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="n-tooltip" title="Website settings">
                                <div class="dashboard-action">
                                    <img src="img/icon/32x32/System Preferences.png" alt="">
                                    <h5>Settings</h5>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="n-tooltip" title="Check your mail">
                                <div class="dashboard-action">
                                    <img src="img/icon/32x32/Mail.png" alt="">
                                    <h5>Check mail</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="span3">
                    <h5>Server usage</h5>
                    <div class="widget user-statistic">
                        <div class="widget-content" align="center">
                            <div class="circle-stats">
                                <div class="chart3" data-percent="68"><img src="img/icon/14x14/light/drawers.png" alt=""></div>
                            </div>

                            <div class="circle-stats">
                                <div class="chart4" data-percent="68"><img src="img/icon/14x14/light/cog2.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider"><span><i></i></span></div>

            <div align="center">
                <ul class="color-status">
                    <li>
                        <span>Disk Space Usage</span>
                        <div class="circle-stats noIcon">
                            <div class="chart1" data-percent="73">73</div>
                        </div>
                        <span class="bottom">37 745 MB / 150 000 MB</span>
                    </li>
                    <li class="orange">
                        <span>MySQL Databases</span>
                        <div class="sparkline sparkline7"></div>
                        <span class="bottom">18 created / 2 available</span>
                    </li>
                    <li class="red">
                        <span>Pending Approval</span>
                        <div class="circle-stats noIcon">
                            <div class="chart1" data-percent="36">36</div>
                        </div>
                        <span class="bottom">#110 comments so far</span>
                    </li>
                    <li class="turquoise">
                        <span>Monthly visits</span>
                        <div class="chart" id="sales5"></div>
                        <span class="bottom">#3456 unique visitors</span>
                    </li>
                </ul>
            </div>

            <div class="divider"><span><i></i></span></div>

            <div class="row-fluid">
                <div class="widget">
                    <div class="widget-header">
                        <h5>Chart and statistics</h5>
                        <ul class="widget-nav">
                            <li id="reportrangechart"><img src="img/icon/14x14/light/calendar.png" alt=""> <span></span></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="img/icon/14x14/light/cog.png" alt=""></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><img src="img/icon/14x14/light/download4.png" alt=""> Download statistic</a></li>
                                    <li><a href="#"><img src="img/icon/14x14/light/plus.png" alt=""> Make new report</a></li>
                                    <li class="last-child"><a href="#"><img src="img/icon/14x14/light/trash.png" alt=""> Delete all</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="img/icon/14x14/light/printer2.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <div class="row-fluid">
                            <div class="span8">
                                <div class="widget-content">
                                    <div class="chart-range-picker clearfix">
                                        <div class="datePick">
                                            <input type="text" id="from" placeholder="From">
                                            <img src="img/icon/14x14/light/calendar.png" alt="">
                                        </div>
                                        <div class="datePick">
                                            <input type="text" id="to" placeholder="To">
                                            <img src="img/icon/14x14/light/calendar.png" alt="">
                                        </div>

                                        <div class="btn-group" data-toggle="buttons-radio">
                                            <button type="button" class="button small-button button-turquoise">Last 7 days</button>
                                            <button type="button" class="button small-button button-turquoise">Last month</button>
                                            <button type="button" class="button small-button button-turquoise">Last 3 months</button>
                                        </div>

                                        <div class="submitDate">
                                            <a href="#" class="button small-button button-blue">Submit date</a>
                                        </div>
                                    </div>
                                    <div id="chartLine01" style="height: 250px;"></div>
                                </div>
                            </div>

                            <div class="span4">
                                <div class="widget-content no-padding">
                                    <ul class="statistic unstyled">
                                        <li><span class="sparkline sparkLine1"></span> Total visits <span class="total">2145</span></li>
                                        <li><span class="sparkline sparkLine2"></span> Unique visits <span class="total">1756</span></li>
                                        <li><span class="sparkline sparkLine3"></span> Orders in last 24h <span class="total">325</span></li>
                                        <li><span class="sparkline sparkLine4"></span> New orders <span class="total">21</span></li>
                                        <li><span class="sparkline sparkLine5"></span> Shipped orders <span class="total">13</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget">
                <div class="widget-header">
                    <h5>Latest added images</h5>
                </div>
                <div class="widget-content">
                    <div id="gallery-container">
                        <div class="gallery-item">
                            <a href="preview/img01.png" rel="fancybox"><img src="preview/img01.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img02.png" rel="fancybox"><img src="preview/img02.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img03.png" rel="fancybox"><img src="preview/img03.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img04.png" rel="fancybox"><img src="preview/img04.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img05.png" rel="fancybox"><img src="preview/img05.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img06.png" rel="fancybox"><img src="preview/img06.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img07.png" rel="fancybox"><img src="preview/img07.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img08.png" rel="fancybox"><img src="preview/img08.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img09.png" rel="fancybox"><img src="preview/img09.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img01.png" rel="fancybox"><img src="preview/img01.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img02.png" rel="fancybox"><img src="preview/img02.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img03.png" rel="fancybox"><img src="preview/img03.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img04.png" rel="fancybox"><img src="preview/img04.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img05.png" rel="fancybox"><img src="preview/img05.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img06.png" rel="fancybox"><img src="preview/img06.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img07.png" rel="fancybox"><img src="preview/img07.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img08.png" rel="fancybox"><img src="preview/img08.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img09.png" rel="fancybox"><img src="preview/img09.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img01.png" rel="fancybox"><img src="preview/img01.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img02.png" rel="fancybox"><img src="preview/img02.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img03.png" rel="fancybox"><img src="preview/img03.png"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="preview/img04.png" rel="fancybox"><img src="preview/img04.png"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span8">
                    <div class="widget">
                        <div class="widget-header">
                            <h5>Calendar</h5>
                        </div>
                        <div class="widget-content no-padding">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="widget">
                        <div class="widget-header">
                            <h5>Drag & drop calendar events</h5>
                        </div>
                        <div class="widget-content no-padding">
                            <div class="calendar-event-list">
                                <div class="external-event">Celebrate your birthday</div>
                                <div class="external-event">Contact agents</div>
                                <div class="external-event">Publish template</div>
                            </div>
                            <div class="add-event">
                                <div class="row-fluid">
                                    <span class="span8">
                                        <input type="text" class="span12" placeholder="Enter your event description">
                                    </span>
                                    <span class="span4">
                                        <a href="#" class="button btn-block small-button button-turquoise">Add event</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="upload-files">
                            <div class="uploading-files">
                                <div class="uploading-header">
                                    <span>File uploader</span>
                                </div>
                                <div class="drag-drop">
                                    <span>Drag and drop files</span>
                                </div>
                                <div class="uploading">
                                    <div class="media-type">
                                        <img src="img/icon/14x14/light/picture1.png" alt="">
                                        <span>photo_0323.jpg</span>
                                    </div>
                                    <div class="action">
                                        <a href="#" data-toggle="n-tooltip" title="Pause upload"><img src="img/icon/14x14/light/pause.png" alt=""></a>
                                    </div>
                                    <div class="file-info">
                                        <div class="progress thin progress-striped">
                                            <div class="bar" style="width: 17%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uploading">
                                    <div class="media-type">
                                        <img src="img/icon/14x14/light/file1.png" alt="">
                                        <span>files.zip</span>
                                    </div>
                                    <div class="action">
                                        <a href="#" data-toggle="n-tooltip" title="Pause upload"><img src="img/icon/14x14/light/pause.png" alt=""></a>
                                    </div>
                                    <div class="file-info">
                                        <div class="progress thin progress-success progress-striped">
                                            <div class="bar" style="width: 70%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uploading">
                                    <div class="media-type">
                                        <img src="img/icon/14x14/light/picture1.png" alt="">
                                        <span>photo_01453.jpg</span>
                                    </div>
                                    <div class="action">
                                        <img src="img/icon/14x14/light/random.png" alt="">
                                    </div>
                                    <div class="file-info">
                                        <div class="progress thin progress-warning progress-striped">
                                            <div class="bar" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uploading">
                                    <div class="media-type">
                                        <img src="img/icon/14x14/light/folder2.png" alt="">
                                        <span>new_template.rar</span>
                                    </div>
                                    <div class="action">
                                        <img src="img/icon/14x14/light/random.png" alt="">
                                    </div>
                                    <div class="file-info">
                                        <div class="progress thin progress-danger progress-striped">
                                            <div class="bar" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uploading-footer">
                                    <span>2/4 Files Uploaded</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="widget">
                    <form class="form-horizontal">
                        <div class="widget-header">
                            <h5>WYSIWYG CLEditor</h5>
                        </div>
                        <div class="widget-content no-padding">
                            <div class="form-row">
                                <label class="field-name" for="standard">Page name:</label>
                                <div class="field">
                                    <input type="text" class="span12" name="standard" id="standard">
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="field-name" for="standard">Page tags:</label>
                                <div class="field">
                                    <input type="text" class="span12" name="standard" id="standard">
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="field-name" for="standard">Page category:</label>
                                <div class="field">
                                    <input type="text" class="span12" name="standard" id="standard">
                                </div>
                            </div>
                            <textarea id="cleditor" name="cleditor"></textarea>
                            <div class="form-row" align="right">
                                <a href="#" class="button button-red">Cancel</a>
                                <a href="#" class="button button-blue">Publish</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span6">
                    <div class="widget">
                        <div class="widget-header">
                            <h5><a href="#">Bernad Delic</a></h5>
                            <ul class="widget-nav">
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="img/icon/14x14/light/cog.png" alt=""></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><img src="img/icon/14x14/light/download4.png" alt=""> Download chat</a></li>
                                        <li><a href="#"><img src="img/icon/14x14/light/plus.png" alt=""> Report this chat</a></li>
                                        <li class="last-child"><a href="#"><img src="img/icon/14x14/light/trash.png" alt=""> Delete chat</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <span class="label fRight label-warning">New message recieved...</span>
                        </div>
                        <div class="widget-content">
                            <div class="messages-container">
                                <div class="message">
                                    <a class="message-avatar" href="#"><img src="img/avatar_02.png" alt=""></a>
                                    <div class="message-content">
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet...</p>
                                        </div>
                                        <p class="from">from <a href="#">Bernad Delic</a> - 09:32pm, 23.03.2013</p>
                                    </div>
                                </div>
                                <div class="message">
                                    <a class="message-avatar" href="#"><img src="img/avatar_04.png" alt=""></a>
                                    <div class="message-content">
                                        <div class="text">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                        </div>
                                        <p class="from">from <a href="#">me</a> - 09:32pm, 23.03.2013</p>
                                    </div>
                                </div>
                                <div class="message">
                                    <a class="message-avatar" href="#"><img src="img/avatar_03.png" alt=""></a>
                                    <div class="message-content">
                                        <div class="text">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                        </div>
                                        <p class="from">from <a href="#">Bernad Delic</a> - 09:32pm, 23.03.2013</p>
                                    </div>
                                </div>
                                <div class="message">
                                    <a class="message-avatar" href="#"><img src="img/avatar.png" alt=""></a>
                                    <div class="message-content">
                                        <div class="text">
                                            <p>Sed ut perspiciatis unde.</p>
                                        </div>
                                        <p class="from">from <a href="#">Bernad Delic</a> - 09:32pm, 23.03.2013</p>
                                    </div>
                                </div>
                            </div>

                            <div class="enter-message clearfix">
                                <textarea name="enter-message" class="auto" rows="3" cols="1" placeholder="Your message here..." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 64px;"></textarea>
                                <div class="message-actions clearfix">
                                    <div class="type">
                                        <img src="img/typing.gif" alt="">
                                        Bernad Delic is typing...
                                    </div>
                                    <div class="send-button">
                                        <a href="#" class="button small-button button-red">Send message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="span6">
                    <div class="widget">
                        <div class="widget-header">
                            <ul class="nav nav-tabs task-container">
                                <li class="active"><a data-toggle="tab" href="#tab5">General</a></li>
                                <li><a data-toggle="tab" href="#tab6">Orders <span class="label label-important">61</span></a></li>
                                <li><a data-toggle="tab" href="#tab7">Notifications <span class="label label-warning">38</span></a></li>
                            </ul>

                            <ul class="widget-nav">
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="img/icon/14x14/light/plus.png" alt=""></a></li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="img/icon/14x14/light/cog2.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="widget-content no-padding">
                            <div class="tabbable">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <ul class="tasks panel1">
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">You have 3 new orders</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority important"><img src="img/important-task.png" alt=""></div>
                                                <span class="title">5 new support tickets opened</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority success"><img src="img/success-task.png" alt=""></div>
                                                <span class="title">Updated website settings</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority success"><img src="img/success-task.png" alt=""></div>
                                                <span class="title">Finished scheduled system back-up</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority error"><img src="img/error-task.png" alt=""></div>
                                                <span class="title">Database informations are incorrect</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">You are reaching disk-space limit</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">It's recommended that you back-up all data</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority important"><img src="img/important-task.png" alt=""></div>
                                                <span class="title">Update your template to new version</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority success"><img src="img/success-task.png" alt=""></div>
                                                <span class="title">New plugin accepted</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority success"><img src="img/success-task.png" alt=""></div>
                                                <span class="title">New plugin accepted</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority error"><img src="img/error-task.png" alt=""></div>
                                                <span class="title">Some users request help</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">Ship your orders in next 24 hours</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">Tamplte is published</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">You have 3 new orders</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority important"><img src="img/important-task.png" alt=""></div>
                                                <span class="title">5 new support tickets opened</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority success"><img src="img/success-task.png" alt=""></div>
                                                <span class="title">Updated website settings</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority success"><img src="img/success-task.png" alt=""></div>
                                                <span class="title">Finished scheduled system back-up</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority error"><img src="img/error-task.png" alt=""></div>
                                                <span class="title">Database informations are incorrect</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">You are reaching disk-space limit</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">It's recommended that you back-up all data</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority important"><img src="img/important-task.png" alt=""></div>
                                                <span class="title">Update your template to new version</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority success"><img src="img/success-task.png" alt=""></div>
                                                <span class="title">New plugin accepted</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority success"><img src="img/success-task.png" alt=""></div>
                                                <span class="title">New plugin accepted</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority error"><img src="img/error-task.png" alt=""></div>
                                                <span class="title">Some users request help</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">Ship your orders in next 24 hours</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">Tamplte is published</span>
                                                <span class="info"><a href="#">View details</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab6">
                                        <ul class="tasks panel2">
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#45635</a>, <i>20 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#32556</a>, <i>25 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#24267</a>, <i>29 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#86543</a>, <i>31 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#23467</a>, <i>36 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority error"><img src="img/error-task.png" alt=""></div>
                                                <span class="title">Order has been deleted</span>
                                                <span class="info">ID: <a href="#">#65432</a>, <i>40 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#45635</a>, <i>20 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#32556</a>, <i>25 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#24267</a>, <i>29 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#86543</a>, <i>31 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#23467</a>, <i>36 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority error"><img src="img/error-task.png" alt=""></div>
                                                <span class="title">Order has been deleted</span>
                                                <span class="info">ID: <a href="#">#65432</a>, <i>40 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#45635</a>, <i>20 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#32556</a>, <i>25 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#24267</a>, <i>29 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#86543</a>, <i>31 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority info"><img src="img/info-task.png" alt=""></div>
                                                <span class="title">New order recieved</span>
                                                <span class="info">ID: <a href="#">#23467</a>, <i>36 minutes ago</i>.</span>
                                            </li>
                                            <li>
                                                <div class="priority error"><img src="img/error-task.png" alt=""></div>
                                                <span class="title">Order has been deleted</span>
                                                <span class="info">ID: <a href="#">#65432</a>, <i>40 minutes ago</i>.</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab7">
                                        <ul class="tasks panel2">
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_03.png" alt="">
                                                </div> 
                                                <span class="title">New user <a href="#">Bernad Delic</a> registered...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_02.png" alt="">
                                                </div> 
                                                <span class="title"><a href="#">Bernad Delic</a> uploaded new profile image...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_02.png" alt="">
                                                </div> 
                                                <span class="title"><a href="#">Bernad Delic</a> added 3 new friends...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_04.png" alt="">
                                                </div> 
                                                <span class="title">New user <a href="#">Bernad Delic</a> registered...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_03.png" alt="">
                                                </div> 
                                                <span class="title">New user <a href="#">Bernad Delic</a> registered...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_02.png" alt="">
                                                </div> 
                                                <span class="title"><a href="#">Bernad Delic</a> uploaded new profile image...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_02.png" alt="">
                                                </div> 
                                                <span class="title"><a href="#">Bernad Delic</a> added 3 new friends...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_04.png" alt="">
                                                </div> 
                                                <span class="title">New user <a href="#">Bernad Delic</a> registered...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_03.png" alt="">
                                                </div> 
                                                <span class="title">New user <a href="#">Bernad Delic</a> registered...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_02.png" alt="">
                                                </div> 
                                                <span class="title"><a href="#">Bernad Delic</a> uploaded new profile image...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_02.png" alt="">
                                                </div> 
                                                <span class="title"><a href="#">Bernad Delic</a> added 3 new friends...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_04.png" alt="">
                                                </div> 
                                                <span class="title">New user <a href="#">Bernad Delic</a> registered...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_03.png" alt="">
                                                </div> 
                                                <span class="title">New user <a href="#">Bernad Delic</a> registered...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_02.png" alt="">
                                                </div> 
                                                <span class="title"><a href="#">Bernad Delic</a> uploaded new profile image...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_02.png" alt="">
                                                </div> 
                                                <span class="title"><a href="#">Bernad Delic</a> added 3 new friends...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_04.png" alt="">
                                                </div> 
                                                <span class="title">New user <a href="#">Bernad Delic</a> registered...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_03.png" alt="">
                                                </div> 
                                                <span class="title">New user <a href="#">Bernad Delic</a> registered...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_02.png" alt="">
                                                </div> 
                                                <span class="title"><a href="#">Bernad Delic</a> uploaded new profile image...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_02.png" alt="">
                                                </div> 
                                                <span class="title"><a href="#">Bernad Delic</a> added 3 new friends...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                            <li>
                                                <div class="avatar">
                                                    <img src="img/avatar_04.png" alt="">
                                                </div> 
                                                <span class="title">New user <a href="#">Bernad Delic</a> registered...</span>
                                                <span class="info"><a href="#">View profile</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/admin/jquery-1.8.3.js"></script>
    <script src="/js/admin/ui/jquery-ui-1.9.2.custom.js"></script>

    <script src="/js/admin/uniform/jquery.uniform.js"></script>

    <script src="/js/admin/flot/excanvas.min.js"></script>
    <script src="/js/admin/flot/jquery.flot.js"></script>    
    <script src="/js/admin/flot/jquery.flot.pie.min.js"></script>
    <script src="/js/admin/flot/jquery.flot.resize.js"></script>
    <script src="/js/admin/flot/jquery.flot.orderBars.js"></script>

    <script src="/js/admin/sparkline/jquery.sparkline.js"></script>

    <script src="/js/admin/full-calendar/fullcalendar.js"></script>

    <script src="/js/admin/mouse-wheel/jquery.mousewheel.js"></script>

    <script src="/js/admin/file-tree/jqueryFileTree.js"></script>

    <script src="/js/admin/easy-pie-chart/jquery.easy-pie-chart.js"></script>

    <script src="/js/admin/cleditor/jquery.cleditor.js"></script>

    <script src="/js/admin/jquery-splitter/splitter.js"></script>

    <script src="/js/admin/cookie/jquery.cookie.js"></script>

    <script src="/js/admin/masonry/jquery.masonry.js"></script>

    <script src="/js/admin/masked/jquery.maskedinput.js"></script>

    <script src="/js/admin/powertip/jquery.powertip.js"></script>

    <script src="/js/admin/range-picker/daterangepicker.js"></script>
    <script src="/js/admin/range-picker/date.js"></script>

    <script src="/js/admin/fancybox/jquery.fancybox.js"></script>

    <script src="/js/admin/flexslider/jquery.flexslider.js"></script>

    <script src="/js/admin/tags-input/jquery.tagsinput.js"></script>

    <script src="/js/admin/form-validate/jquery.validate.js"></script>

    <script src="/js/admin/scrollbar/jquery.mCustomScrollbar.js"></script>

    <script src="/js/admin/debounced/debounced.js"></script>

    <script src="/js/admin/ibutton/jquery.ibutton.js"></script>

    <script src="/js/admin/password-meter/password_strength.js"></script>

    <script src="/js/admin/gritter/jquery.gritter.min.js"></script>

    <script src="/js/admin/bootstrap-wizards/jquery.bootstrap.wizard.js"></script>

    <script src="/js/admin/rating/jquery.rating.js"></script>

    <script src="/js/admin/bootstrap.js"></script>

    <script src="/js/admin/chosen/chosen.jquery.js"></script>

    <script src="/js/admin/main.js"></script>
    <script src="/js/admin/dashboard.js"></script>

    <script>
        $(window).load(function() {
            $('.loading').hide();
        });

        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 70,
                itemMargin: 0,
                minItems: 3,
                directionNav: false,
            });
            $.gritter.add({
                image: 'http://themes.tehnoremont-ds.com/infinite/img/avatar_04.png',
                // (string | mandatory) the heading of the notification
                title: 'This is a regular notice!!',
                // (string | mandatory) the text inside the notification
                text: 'This will fade out after a certain amount of time. Cum sociis natoque penatibus et magnis dis...',
                time: 4000,
            });

            $.gritter.add({
                image: 'http://themes.tehnoremont-ds.com/infinite/img/avatar_03.png',
                // (string | mandatory) the heading of the notification
                title: 'This is a sticky!!',
                // (string | mandatory) the text inside the notification
                text: 'This will not fade out untill you close it. Vivamus eget tincidunt velit.',
                position: 'bottom-right',
                sticky: true
            });

            $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'No image!!',
                // (string | mandatory) the text inside the notification
                text: 'Notifications without image.',
                position: 'bottom-right',
                sticky: true
            });
        });
    </script>

</body>
</html>


















<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 9]><html class="no-js ie9"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"><!--<![endif]-->
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        <head>
            <title><?php echo $page_title . $page_title_split . $site_name ?></title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

            <link rel="icon" href="/favicon.ico" type="image/x-icon" />
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
            <link href="<?php echo URL::base(); ?>css/main-admin.css" rel="stylesheet" type="text/css" />
            <!--[if IE 6]>
            <link href="<?php echo URL::base(); ?>css/htmls-ie.css" rel="stylesheet" type="text/css" />
            <![endif]-->
            <?php if (ViewHead::hasStyles()): ?>
                <?php while ($headStyle = ViewHead::getNextStyle()): ?>
                    <link href="<?php echo URL::base() ?>css/<?php echo $headStyle ?>" rel="stylesheet" type="text/css" />
                <?php endwhile; ?>
            <?php endif; ?>
            <script type="text/javascript">
                var baseurl = '<?php echo URL::base(); ?>';
            </script>
            <?php if (ViewHead::hasScripts()): ?>
                <?php while ($headScript = ViewHead::getNextScript()): ?>
                    <script type="text/javascript" src="<?php echo URL::base() ?>js/<?php echo $headScript ?>"></script>
                <?php endwhile; ?>
            <?php endif; ?>


        </head>
        <body onload="initScrollLayer();">
            <div id="container">
                <div id="page_holder-inner" style="width: 1125px;">
                    <!--Start Logo Holder -->
                    <!-- <div id="inside_logo_holder" style="padding-top: 80px;">
                         <img src="<?php echo URL::base(); ?>images/inside-logo.png" alt="<?php echo __("Floor Stand UK"); ?>" width="968" height="288" />
                     </div>-->
                    <!--End Logo Holder -->

                    <!--Start Navigation Block -->
                    <div id="navigation_block">
                        <div id="nav">
                            <?php if (Request::instance()->controller != "login"): ?>
                                <ul id="dropmenu">
                                    <!--li>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider1.gif" />
                                        </span>
                                        <a href="javascript:void(0);" <?php echo ($cname == "spare") ? "class='active'" : ""; ?>><?php echo __("Spare"); ?></a>
                                    </li-->
                                    <li>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider1.gif" />
                                        </span>
                                        <a href="<?php echo URL::base(); ?>admin" <?php echo ($cname == "home") ? "class='active'" : ""; ?>><?php echo __("Главная"); ?></a>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider.gif" />
                                        </span>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0);" href="<?php echo URL::base(); ?>admin/menu" <?php echo ($cname == "menu") ? "class='active'" : ""; ?>><?php echo __("Меню"); ?></a>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider.gif" />
                                        </span>
                                        <ul>
                                            <li><a href="<?php echo URL::base(); ?>admin/topmenu"><?php echo __("Верхнее Меню"); ?></a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/mainmenu"><?php echo __("Основное Меню"); ?></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" <?php echo ($cname == "services") ? "class='active'" : ""; ?>><?php echo __("FloorSand Services"); ?></a>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider.gif" />
                                        </span>
                                        <ul>
                                            <li><a href="<?php echo URL::base(); ?>admin/postcodes"><?php echo __("Sandman offices"); ?></a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/quotation"><?php echo __("Online quotation"); ?></a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/maintenance"><?php echo __("Maintenance contract"); ?></a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/bookingshedule"><?php echo __("Booking schedule"); ?></a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/confirmedbooking"><?php echo __("Confirmed booking"); ?></a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/onlinediary"><?php echo __("Online Diary"); ?></a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/testimonials"><?php echo __("Testimonials"); ?></a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/promocodes"><?php echo __("Promocodes"); ?></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" <?php echo ($cname == "pages") ? "class='active'" : ""; ?>><?php echo __("Страницы"); ?></a>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider.gif" />
                                        </span>
                                        <ul>
                                            <li><a href="<?php echo URL::base(); ?>admin/meta">Edit Meta Tags</a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/pages">Страницы</a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/products">Услуги</a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/categorys">Категории</a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/slider">Слайдер</a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/servicesworksamples">Edit work samples</a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/videoofusworking">Edit video of us working</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo URL::base(); ?>admin/internal" <?php echo ($cname == "iusers") ? "class='active'" : ""; ?>><?php echo __("Роли"); ?></a>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider.gif" />
                                        </span>
                                    </li>
                                    <li>
                                        <a href="<?php echo URL::base(); ?>admin/contacts" <?php echo ($cname == "contacts") ? "class='active'" : ""; ?>><?php echo __("Контакты"); ?></a>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider.gif" />
                                        </span>
                                    </li>
                                    <!-- Floorsanding agents -->
                                    <!--   <li>
                                           <a href="javascript:void(0);" <?php echo ($cname == "fagents") ? "class='active'" : ""; ?>><?php echo __("Floor Sanding Agents"); ?></a>
                                           <span class="divider">
                                               <img src="<?php echo URL::base(); ?>images/nav-divider1.gif" />
                                           </span>
                                       </li>
                                    <!-- customer profiles -->
                                    <li>
                                        <a href="<?php echo URL::base(); ?>admin/response" <?php echo ($cname == "contacts") ? "class='active'" : ""; ?>><?php echo __("Отзывы"); ?></a>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider.gif" />
                                        </span>
                                    </li>
                                    <!-- Sales -->
                                    <li>
                                        <a href="javascript:void(0);" <?php echo ($cname == "sales") ? "class='active'" : ""; ?>><?php echo __("Продажи"); ?></a>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider1.gif" />
                                        </span>
                                        <ul>
                                            <li><a href="<?php echo URL::base(); ?>admin/sales">Единичные</a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/manysales">Множественные</a></li>                                           
                                        </ul>

                                    </li>
                                    <li>
                                        <a href="<?php echo URL::base(); ?>admin/callback" <?php echo ($cname == "callback") ? "class='active'" : ""; ?>><?php echo __("Звонки"); ?></a>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider.gif" />
                                        </span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" <?php echo ($cname == "sales") ? "class='active'" : ""; ?>><?php echo __("Письма"); ?></a>
                                        <span class="divider">
                                            <img src="<?php echo URL::base(); ?>images/nav-divider1.gif" />
                                        </span>
                                        <ul>
                                            <li><a href="<?php echo URL::base(); ?>admin/emails">Шаблоны</a></li>
                                            <li><a href="<?php echo URL::base(); ?>admin/vitalpoints">База клиентов</a></li>                                           
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo URL::base(); ?>admin/logout"><?php echo __("Выйти"); ?></a>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--End Navigation Block -->

                    <!--Start Container Area -->
                    <div id="inside_container_18">
                        <br />
                        <?php echo $content; ?>
                    </div>
                    <div id="user-info">
                        <?php if (isset(Auth::instance()->get_user()->username)) { ?>
                            Работает: <b><?php print_r(Auth::instance()->get_user()->username); ?>&nbsp;&nbsp;&nbsp;&nbsp;</b>
                        <?php } ?>
                    </div>
                </div>
                <!--End COntainer Area -->
                <!--Start Footer -->
                <div id="footer-main-inner">
                    &nbsp;
                </div>
                <!--End footer -->
            </div>
        </body>
    </html>-->
    
    
    <!------------------------------------------------------------->
    
    
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Административная панель</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $page_title . $page_title_split . $site_name ?></title>
        <!-- Le styles -->
        <link href="/css/admin/bootstrap.css" rel="stylesheet">
        <link href="/css/admin/bootstrap-responsive.css" rel="stylesheet">
        <link href="/css/admin/main.css" rel="stylesheet">
       <!-- <link href="<?php echo URL::base(); ?>css/main-admin.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::base(); ?>css/main-admin.css" rel="stylesheet" type="text/css" />-->
        <!--[if IE 6]>
        <link href="<?php echo URL::base(); ?>css/htmls-ie.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <?php if (ViewHead::hasStyles()): ?>
            <?php while ($headStyle = ViewHead::getNextStyle()): ?>
                <link href="<?php echo URL::base() ?>css/<?php echo $headStyle ?>" rel="stylesheet" type="text/css" />
            <?php endwhile; ?>
        <?php endif; ?>
        <script type="text/javascript">
            var baseurl = '<?php echo URL::base(); ?>';
        </script>
        <?php if (ViewHead::hasScripts()): ?>
            <?php while ($headScript = ViewHead::getNextScript()): ?>
                <script type="text/javascript" src="<?php echo URL::base() ?>js/<?php echo $headScript ?>"></script>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <link href="/css/admin/ie.css" rel="stylesheet">
        <![endif]-->
    </head>

    <body>
        <?php if (Request::instance()->controller != "login") { ?>
        
        
        
       <?php  } ?>
        <div class="loading"><img src="/images/admin/loaders/loader01.gif" alt=""></div>

        <header>
           <!-- <a href="#" class="logo"><img src="/images/admin/logoImage.png" alt=""></a>-->

            <span id="mobileNav"><img src="/images/admin/mobile-icon.png" alt=""></span>
            <span id="phoneNav"><img src="/images/admin/mobile-icon.png" alt=""></span>

            <div class="phone-menu">
                <ul>
                    <li class="active"><a href="index.html"><span></span> Dashboard</a></li>
                    <li><a href="#"><span></span> Forms <div class="subchild-arrow"></div></a>
                        <ul>
                            <li><a href="forms.html"><span></span> Form elements</a></li>
                            <li><a href="form-wizards.html"><span></span> Form wizards</a></li>
                            <li><a href="forms-validate.html"><span></span> Form validate</a></li>
                            <li><a href="input-grid.html"><span></span> Input grid</a></li>
                        </ul>
                    </li>
                    <li><a href="index.html"><span></span> Charts</a></li>
                    <li><a href="#"><span></span> UI elements <div class="subchild-arrow"></div></a>
                        <ul>
                            <li><a href="ui.html"><span></span> Main UI elements</a></li>
                            <li><a href="buttons.html"><span></span> Buttons</a></li>
                            <li><a href="typography.html"><span></span> Typography</a></li>
                            <li><a href="gallery.html"><span></span> Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="index.html"><span></span> Chat</a></li>
                    <li><a href="#"><span></span> Tables <div class="subchild-arrow"></div></a>
                        <ul>
                            <li><a href="standard-tables.html"><span></span> Standard tables</a></li>
                            <li><a href="dynamic-tables.html"><span></span> Dynamic tables</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span></span> Errors <div class="subchild-arrow"></div></a>
                        <ul>
                            <li><a href="403.html"><span></span> 403</a></li>
                            <li><a href="404.html"><span></span> 404</a></li>
                            <li><a href="405.html"><span></span> 405</a></li>
                            <li><a href="500.html"><span></span> 500</a></li>
                            <li><a href="502.html"><span></span> 502</a></li>
                            <li><a href="offline.html"><span></span> Offline</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span></span> Other <div class="subchild-arrow"></div></a>
                        <ul>
                            <li><a href="inbox.html"><span></span> Inbox template</a></li>
                            <li><a href="inbox_template.html"><span></span> Inbox template v2</a></li>
                            <li><a href="profile.html"><span></span> Profile page</a></li>
                            <li><a href="search-result.html"><span></span> Search result</a></li>
                            <li><a href="file-manager.html"><span></span> File manager</a></li>
                            <li><a href="invoice.html"><span></span> Invoice</a></li>
                            <li><a href="search-result.html"><span></span> Search results</a></li>
                            <li><a href="tabbed-page.html"><span></span> Tabbed page</a></li>
                            <li><a href="login.html"><span></span> Login</a></li>
                            <li><a href="loginv2.html"><span></span> Login v2</a></li>
                        </ul>
                    </li>
                </ul> 
            </div>
        </header>

        <div class="mainNavigation">
            <div class="innerNavigation">
                <div class="profile clearfix">
                    <a href="#"><img src="/images/logo.png" alt="Profile image"></a>
                </div> 
                <ul class="mainNav">
                    <li <?php echo ($cname == "home") ? "class='active'" : ""; ?>><a href="/admin"><span><img src="/images/admin/icon/mainNav/dashboard.png"> Главная</span></a></li>
                    <li class="dropdown"><a href="#"><span><img src="/images/admin/icon/mainNav/forms.png"> Меню</span></a>
                        <ul>                           
                            <li><a href="/admin/topmenu"><span></span> Верхнее меню</a></li>
                            <li><a href="/admin/mainmenu"><span></span> Основное меню</a></li>                            
                        </ul>
                    </li>
                    <!--<li><a href="charts.html"><span><img src="/images/admin/icon/mainNav/chart.png"> Страницы</span></a></li>-->
                    <li class="dropdown"><a href="#"><span><img src="/images/admin/icon/mainNav/ui.png"> Страницы</span></a>
                        <ul>
                            <li><a href="/admin/pages"><span></span> Страницы</a></li>
                            <li><a href="/admin/products"><span></span> Услуги</a></li>
                            <li><a href="/admin/categorys"><span></span> Категории</a></li>
                            <li><a href="/admin/slider"><span></span> Слайдер</a></li>
                        </ul>
                    </li>
                    <li><a href="/admin/internal"><span><img src="/images/admin/icon/mainNav/chat.png"> Роли</span></a></li>
                    <li><a href="/admin/response"><span><img src="/images/admin/icon/mainNav/chat.png"> Отзывы</span></a></li>
                    <li class="dropdown"><a href="#"><span><img src="/images/admin/icon/mainNav/tables.png"> Продажи</span></a>
                        <ul>
                            <li><a href="/admin/sales"><span></span> Единичные</a></li>
                            <li><a href="/admin/manysales"><span></span> Множественные</a></li>
                        </ul>
                    </li>
                    <li><a href="/admin/callback"><span><img src="/images/admin/icon/mainNav/chat.png"> Звонки</span></a></li>
                    <li><a href="/admin/logout"><span><img src="/images/admin/icon/mainNav/chat.png"> Выйти</span></a></li>
                    <!--<li class="dropdown"><a href="#"><span><img src="/images/admin/icon/mainNav/error.png"> Errors</span></a>
                        <ul>
                            <li><a href="403.html"><span></span> 403</a></li>
                            <li><a href="404.html"><span></span> 404</a></li>
                            <li><a href="405.html"><span></span> 405</a></li>
                            <li><a href="500.html"><span></span> 500</a></li>
                            <li><a href="502.html"><span></span> 502</a></li>
                            <li><a href="offline.html"><span></span> Offline</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span><img src="/images/admin/icon/mainNav/other.png"> Other</span></a>
                        <ul>
                            <li><a href="inbox.html"><span></span> Inbox template</a></li>
                            <li><a href="inbox_template.html"><span></span> Inbox template v2</a></li>
                            <li><a href="profile.html"><span></span> Profile page</a></li>
                            <li><a href="search-result.html"><span></span> Search result</a></li>
                            <li><a href="file-manager.html"><span></span> File manager</a></li>
                            <li><a href="invoice.html"><span></span> Invoice</a></li>
                            <li><a href="search-result.html"><span></span> Search results</a></li>
                            <li><a href="tabbed-page.html"><span></span> Tabbed page</a></li>
                            <li><a href="login.html"><span></span> Login</a></li>
                            <li><a href="loginv2.html"><span></span> Login v2</a></li>
                            <li><a href="#.html"><span></span> Third menu <div class="subchild-arrow"></div></a>
                                <ul>
                                    <li><a href="#"><span></span> Third child link</a></li>
                                    <li><a href="#"><span></span> Third child link 2</a></li>
                                    <li><a href="#"><span></span> Third child link 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->



                </ul>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="top-bar">
            <div class="breadcrumbs fLeft">
                <ul class="breadcrumb">
                    <li class="active"><img src="/images/admin/icon/14x14/light/home5.png" alt=""> Административная панель</li>
                </ul>
            </div>


        </div>

        <div class="page-info clearfix">
            <img src="/images/admin/icon/32x32/Desktop.png" alt="">
            <h5>Dashboard</h5>
        </div>

        <div class="alert alert-info noMargin" style='display:none'>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Information!</strong> You have changed personal info, but some input fields are still empty.
        </div>

        <div class="inner-content">
             <?php echo $content; ?>
        </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/admin/jquery-1.8.3.js"></script>
    <script src="/js/admin/ui/jquery-ui-1.9.2.custom.js"></script>

    <script src="/js/admin/uniform/jquery.uniform.js"></script>

    <script src="/js/admin/flot/excanvas.min.js"></script>
    <script src="/js/admin/flot/jquery.flot.js"></script>    
    <script src="/js/admin/flot/jquery.flot.pie.min.js"></script>
    <script src="/js/admin/flot/jquery.flot.resize.js"></script>
    <script src="/js/admin/flot/jquery.flot.orderBars.js"></script>

    <script src="/js/admin/sparkline/jquery.sparkline.js"></script>

    <script src="/js/admin/full-calendar/fullcalendar.js"></script>

    <script src="/js/admin/mouse-wheel/jquery.mousewheel.js"></script>

    <script src="/js/admin/file-tree/jqueryFileTree.js"></script>

    <script src="/js/admin/easy-pie-chart/jquery.easy-pie-chart.js"></script>

    <script src="/js/admin/cleditor/jquery.cleditor.js"></script>

    <script src="/js/admin/jquery-splitter/splitter.js"></script>

    <script src="/js/admin/cookie/jquery.cookie.js"></script>

    <script src="/js/admin/masonry/jquery.masonry.js"></script>

    <script src="/js/admin/masked/jquery.maskedinput.js"></script>

    <script src="/js/admin/powertip/jquery.powertip.js"></script>

    <script src="/js/admin/range-picker/daterangepicker.js"></script>
    <script src="/js/admin/range-picker/date.js"></script>

    <script src="/js/admin/fancybox/jquery.fancybox.js"></script>

    <script src="/js/admin/flexslider/jquery.flexslider.js"></script>

    <script src="/js/admin/tags-input/jquery.tagsinput.js"></script>

    <script src="/js/admin/form-validate/jquery.validate.js"></script>

    <script src="/js/admin/scrollbar/jquery.mCustomScrollbar.js"></script>

    <script src="/js/admin/debounced/debounced.js"></script>

    <script src="/js/admin/ibutton/jquery.ibutton.js"></script>

    <script src="/js/admin/password-meter/password_strength.js"></script>

    <script src="/js/admin/gritter/jquery.gritter.min.js"></script>

    <script src="/js/admin/bootstrap-wizards/jquery.bootstrap.wizard.js"></script>

    <script src="/js/admin/rating/jquery.rating.js"></script>

    <script src="/js/admin/bootstrap.js"></script>

    <script src="/js/admin/chosen/chosen.jquery.js"></script>

    <script src="/js/admin/main.js"></script>
    <script src="/js/admin/dashboard.js"></script>

    <script>
        $(window).load(function() {
            $('.loading').hide();
        });

        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 70,
                itemMargin: 0,
                minItems: 3,
                directionNav: false,
            });
//            $.gritter.add({
//                image: 'http://themes.tehnoremont-ds.com/infinite//images/admin/avatar_04.png',
//                // (string | mandatory) the heading of the notification
//                title: 'This is a regular notice!!',
//                // (string | mandatory) the text inside the notification
//                text: 'This will fade out after a certain amount of time. Cum sociis natoque penatibus et magnis dis...',
//                time: 4000,
//            });
//
//            $.gritter.add({
//                image: 'http://themes.tehnoremont-ds.com/infinite//images/admin/avatar_03.png',
//                // (string | mandatory) the heading of the notification
//                title: 'This is a sticky!!',
//                // (string | mandatory) the text inside the notification
//                text: 'This will not fade out untill you close it. Vivamus eget tincidunt velit.',
//                position: 'bottom-right',
//                sticky: true
//            });
//
//            $.gritter.add({
//                // (string | mandatory) the heading of the notification
//                title: 'No image!!',
//                // (string | mandatory) the text inside the notification
//                text: 'Notifications without image.',
//                position: 'bottom-right',
//                sticky: true
//            });
        });
    </script>

</body>
</html>















