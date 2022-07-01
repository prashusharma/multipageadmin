<div class="col-12 col-md-3 col-lg-3">
    <div class="left-site-menu">
        <ul>
            <?php 
                $pagename = explode("/", $_SERVER["REQUEST_URI"]);
                $pagename = $pagename[count($pagename)-1];
            ?>
            <li class="first-child"><a class="<?=($pagename == "dashboard.php") ? "active" : ""?>" href="dashboard.php">Dashboard</a></li>
            <li><a class="<?=($pagename == "template.php") ? "active" : ""?>" href="template.php">Templates</a></li>
            <li><a class="<?=($pagename == "new-page.php") ? "active" : ""?>" href="new-page.php">New Page</a></li>
            <li><a class="<?=($pagename == "manage-pages.php") ? "active" : ""?>" href="manage-pages.php">Manage Page</a></li>
            <li><a class="<?=($pagename == "contact-form1.php") ? "active" : ""?>" href="contact-form1.php">Contact Forms</a></li>
            <li><a class="<?=($pagename == "contact-form2.php") ? "active" : ""?>" href="contact-form2.php">Script / Code</a></li>
            <li><a class="<?=($pagename == "edit-page.php") ? "active" : ""?>" href="edit-page.php">Edit / Update Page</a></li>

        </ul>
    </div>
</div>