<nav>
      <div class="user logged-in">
            <a class="login-user" href="#" title=""><img src="images/logo.png" alt="" /></a>
            <div class="user-detail">
                  <strong>Joyce Cabardo</strong>
                  <i>support@joyce.com</i>
            </div>
      </div>
      <ul class="console-menu">
            <!-- <li class="sidebar-header"><span>Navigation</span></li>
            <li> <a href="#" title=""> <i class="icon dripicons-meter"></i>  <span>Dashboards  <i class="btn-danger">04</i></span></a>
                  <ul>
                        <li> <a data-title="Web Analytics" class="get_pn" href="index.html" title=""><i class="icon dripicons-web"></i> <span>Web Analytics</span></a></li>
                        <li> <a data-title="User Management"  class="get_pn" href="index3.html" title=""> <i class="icon dripicons-user"></i> <span>User Management</span></a> </li>
                        <li> <a data-title="Sales Monitoring" class="get_pn" href="index2.html" title=""> <i class="icon dripicons-graph-line"></i>  <span>Sales Monitoring</span></a> </li>
                        <li> <a data-title="Executive/Saas"  class="get_pn" href="index4.html" title=""> <i class="fa fa-user-tie"></i>  <span>Executive / Saas</span></a> </li>
                  </ul>
            </li> -->

            <li class="sidebar-header"><span>Create Partner Website</span></li>
                  <ul>
                        <li class="<?php echo (isset($_GET['file'])) ? (($_GET['file'] == 'dashboard.php') ? 'clicked' : '') :  ''; ?>"> <a data-title="Dashboard"  class="get_pn <?php echo (isset($_GET['file'])) ? (($_GET['file'] == 'dashboard.php') ? 'text-light' : '') :  ''; ?>" href="../admin/index.php?file=dashboard.php" title=""> <i class="fa fa-user-tie"></i>  <span>Dashboard</span></a> </li>

                        <li class="<?php echo (isset($_GET['file'])) ? (($_GET['file'] == 'addnewpage.php' || $_GET['file'] == 'page_selection.php' || $_GET['file'] == 'csv_upload.php' )  ? 'clicked' : '') : ''; ?>"> <a data-title="Add New Pages" class="get_pn <?php echo (isset($_GET['file'])) ? (($_GET['file'] == 'addnewpage.php' || $_GET['file'] == 'page_selection.php' || $_GET['file'] == 'csv_upload.php')? 'text-light' : '') : ''; ?>" href="../admin/index.php?file=page_selection.php" title=""><i class="icon dripicons-web"></i> <span>Add New Pages</span></a></li>

                        <li class="<?php echo (isset($_GET['file'])) ? (($_GET['file'] == 'managepage.php')? 'clicked' : '') : ''; ?>"> <a data-title="Manage Pages"  class="get_pn <?php echo (isset($_GET['file'])) ? (($_GET['file'] == 'managepage.php')? 'text-light' : '') : ''; ?>" href="../admin/index.php?file=managepage.php" title=""> <i class="icon dripicons-user"></i> <span>Manage Pages</span></a> </li>

                        <li class="<?php echo (isset($_GET['file'])) ? (($_GET['file'] == 'codehandlar.php')? 'clicked' : '') : ''; ?>"> <a data-title="Sales Monitoring" class="get_pn  <?php echo (isset($_GET['file'])) ? (($_GET['file'] == 'codehandlar.php')? 'text-light' : '') : ''; ?>" href="../admin/index.php?file=codehandlar.php" title=""> <i class="icon dripicons-graph-line"></i>  <span>Analytics Code</span></a> </li>
                        
                        <!-- <li class="<?php #echo (isset($_GET['file'])) ? (($_GET['file'] == 'csv_upload.php')? 'clicked' : '') : ''; ?>"> <a data-title="Sales Monitoring" class="get_pn  <?php #echo (isset($_GET['file'])) ? (($_GET['file'] == 'csv_upload.php')? 'text-light' : '') : ''; ?>" href="../admin/index.php?file=csv_upload.php" title=""> <i class="icon dripicons-browser-upload"></i>  <span>Upload CSV</span></a> </li> -->

                  </ul>
            </li>

            <!-- <li class="sidebar-header"><span>UI ELEMENTS</span></li>
            <li> <a href="#" title=""> <i class="icon dripicons-device-desktop"></i>  <span>Basic  <i class="btn-info">08</i></span></a>
                  <ul>
                        <li> <a data-title="Alerts"  class="get_pn" href="alerts.html" title=""> <i class="fa fa-exclamation-triangle"></i>  <span>Alerts <i class="btn-info">New</i> </span></a> </li>
                        <li> <a data-title="Progress Bars"  class="get_pn" href="progress.html" title=""> <i class="icon dripicons-battery-medium"></i>  <span>Progress Bars</span></a> </li>
                        <li> <a data-title="Buttons"  class="get_pn" href="buttons.html" title=""> <i class="icon dripicons-flag"></i>  <span>Buttons</span></a> </li>
                        <li> <a data-title="Tabs"  class="get_pn" href="tabs.html" title=""> <i class="icon dripicons-view-thumb"></i>  <span>Tabs</span></a> </li>
                        <li> <a href="icons.html" title=""><i class="fab fa-fonticons-fi"></i>  <span>Icons <i  class="btn-danger">02</i> </span></a>
                              <ul>
                                    <li> <a data-title="Font Awesome"  class="get_pn" href="icons.html" title=""> <i class="fab fa-font-awesome-alt"></i>  <span>Font Aweseome</span></a></li>
                                    <li> <a data-title="Dripicons"  class="get_pn" href="dripicons.html" title=""> <i class="fa fa-fill-drip"></i>  <span>DripIcons</span></a></li>
                              </ul>
                        </li>
                        <li> <a data-title="Toggles"  class="get_pn" href="toggles.html" title=""> <i class="icon dripicons-toggles"></i>  <span>Toggles</span></a> </li>
                        <li> <a data-title="Modals"  class="get_pn" href="modals.html" title=""> <i class="icon dripicons-article"></i>  <span>Modals</span></a> </li>
                        <li> <a data-title="Lists"  class="get_pn" href="lists.html" title=""> <i class="icon dripicons-checklist"></i>  <span>List</span></a> </li>
                  </ul>
            </li> -->
            <!-- <li> <a href="#" title=""> <i class="icon dripicons-star"></i>  <span>Advanced  <i class="btn-accent">Hot</i></span></a>
                  <ul>
                        <li> <a data-title="Boxes" class="get_pn" href="boxes.html" title=""> <i class="fa fa-boxes"></i>  <span>Boxes </span></a> </li>
                        <li> <a data-title="Calendars" class="get_pn" href="calendars.html" title=""> <i class="icon dripicons-calendar"></i>  <span>Calendars</span></a> </li>
                        <li> <a data-title="Nestable Lists" class="get_pn" href="nestable-list.html" title=""> <i class="fa fa-stream"></i>  <span>Nestable List</span></a> </li>
                        <li> <a data-title="Heirachy" class="get_pn" href="hierarchy.html" title=""> <i class="icon dripicons-network-3"></i>  <span>Heirachy</span></a> </li>
                        <li> <a data-title="Tree View" class="get_pn" href="treeview.html" title=""> <i class="icon dripicons-network-1"></i>  <span>Tree View</span></a> </li>
                        <li> <a data-title="Timeline" class="get_pn" href="timeline.html" title=""> <i class="icon dripicons-pulse"></i>  <span>Timeline</span></a> </li>
                        <li> <a data-title="Live Chat" class="get_pn" href="chat.html" title=""> <i class="icon dripicons-message"></i>  <span>Chat</span></a> </li>
                        <li> <a data-title="Todos" class="get_pn" href="todo.html" title=""> <i class="icon dripicons-to-do"></i>  <span>Todo</span></a> </li>
                  </ul>
            </li> -->

            <!-- <li class="sidebar-header"><span>Forms</span></li>
            <li> <a data-title="Simple Forms" class="get_pn" href="simple-form.html" title=""> <i class="icon dripicons-information"></i>  <span>Simple Forms</span></a> </li>
            <li> <a href="#" title=""> <i class="fa fa-sun"></i>  <span>Form Controls <i class="btn-success">05</i></span></a>
                  <ul>
                        <li> <a data-title="Form Controls" class="get_pn" href="form-controls.html" title=""> <i class="icon dripicons-lightbulb"></i>  <span>Basic <i class="btn-info">New</i> </span></a> </li>
                        <li> <a  data-title="Form Validations" class="get_pn" href="validation.html" title=""><i class="fab fa-wpforms"></i><span>Validations  <i class="btn-info">New</i></span></a> </li>
                        <li> <a data-title="Step Forms" class="get_pn" href="step-form.html" title=""> <i class="icon dripicons-media-shuffle"></i> <span>Step Form</span></a> </li>
                        <li> <a data-title="File/Image Upload" class="get_pn" href="file-upload.html" title=""> <i class="icon dripicons-browser-upload"></i>  <span>File/Image Uploader  <i class="btn-danger">Hot</i></span></a> </li>
                        <li> <a data-title="Text Editor" class="get_pn" href="text-editor.html" title=""> <i class="icon dripicons-flag"></i> <span>Text Editor</span></a> </li>
                  </ul>
            </li> -->

            <!-- <li class="sidebar-header"><span>Tables</span></li>
            <li> <a data-title="Basic Tables" class="get_pn" href="tables.html" title=""> <i class="fa fa-table"></i> <span>Basic</span></a> </li>
            <li> <a data-title="Datatables" class="get_pn" href="datatables.html" title=""> <i class="icon dripicons-pin"></i> <span>DataTables  <i class="btn-danger">Hot</i></span></a> </li>

            <li class="sidebar-header"><span>Extended</span></li>
            <li> <a href="#" title=""> <i class="icon dripicons-vibrate"></i> <span>Authentications  <i class="btn-success">Hot</i></span></a>
                  <ul>
                        <li> <a class="get_pn" href="login.html" title=""> <i class="fas fa-sign-in-alt"></i> <span>Login</span></a> </li>
                        <li> <a class="get_pn" href="register.html" title=""> <i class="fa fa-plus-square"></i> <span>Register</span></a> </li>
                  </ul>
            </li>
            <li> <a data-title="Profile" class="get_pn" href="profile.html" title=""> <i class="icon dripicons-rocket"></i> <span>Profile</span></a> </li>
            <li> <a  data-title="Confirm" class="get_pn" href="confirm.html" title=""> <i class="icon dripicons-warning"></i> <span>Confirm JS  <i class="btn-danger">New</i></span></a> </li>
            <li> <a href="#" title=""><i class="far fa-envelope"></i> <span>Email</span></a>
                  <ul>
                        <li> <a data-title="Inbox" class="get_pn" href="email.html" title=""><i class="fas fa-inbox"></i><span>Inbox</span></a> </li>
                        <li> <a data-title="Compose" class="get_pn" href="compose.html" title=""> <i class="icon dripicons-plus"></i> <span>Compose</span></a> </li>
                        <li> <a data-title="Mail Open" class="get_pn" href="mail-open.html" title=""> <i class="icon dripicons-preview"></i> <span>Mail Open</span></a> </li>
                  </ul>
            </li>
            <li> <a data-title="Blank Page" class="get_pn" href="blank.html" title=""> <i class="icon dripicons-media-stop"></i> <span>Blank Page</span></a> </li>
            <li> <a data-title="Panel Possiblities" class="get_pn" href="panel_possiblities.html" title=""> <i class="icon dripicons-scale"></i> <span>Panel Possiblities</span></a> </li> -->
      </ul>
</nav>
