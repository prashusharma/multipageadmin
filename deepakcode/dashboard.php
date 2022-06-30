<div class="title fs-2">
    Dashboard View
</div>
<div class="row mt-5">
    <?php
    include './config.php';
        
    $active = mysqli_query($conn, "select count(*) as num from partners_detail where status = 1");
    $active = mysqli_fetch_assoc($active);

    $inactive = mysqli_query($conn, "select count(*) as num from partners_detail where status = 2");
    $inactive = mysqli_fetch_assoc($inactive);

    $deleted = mysqli_query($conn, "select count(*) as num from partners_detail where status = 3");
    $deleted = mysqli_fetch_assoc($deleted); 
    ?>

    <div class="activity-block col-md-4 text-center">
        <div class="console-panel grid-stack-item-content console-no-header">
            <div class="console-panel-body align-center">
                <div class="console-stats">
                    <h5>Total Active Pages</h5>
                    <span class="sparklines" data-sparkType="bar" data-sparkBarColor="#6794dc" data-sparkBarWidth="10"
                        data-sparkHeight="50"><?php echo "0,"; $i=1; while($i<=$active['num']){ echo ",".$i; $i++;}?></span>
                    <div class="stats-num"><?php echo $active['num']?> </div>
                </div>
            </div>
        </div>
        <span class="fs-1 mt-2" style="display: inline-block;">Total Active Pages</span>
    </div>

    <div class="activity-block col-md-4 text-center">
        <div class="console-panel grid-stack-item-content console-no-header">
            <div class="console-panel-body align-center">
                <div class="console-stats">
                    <h5>Total Not Active Pages</h5>
                    <span class="sparklines" data-sparkType="bar" data-sparkBarColor="#eed202" data-sparkBarWidth="10"
                        data-sparkHeight="50"> <?php echo "0,"; $i=1; while($i<=$inactive['num']){ echo ",".$i; $i++;}?> </span>
                    <div class="stats-num"><?php echo $inactive['num']?> </div>
                </div>
            </div>
        </div>
        <span class="fs-1 mt-2"  style="display: inline-block;">Not Active Pages</span>
    </div>
    <div class="activity-block col-md-4 text-center">
        <div class="console-panel grid-stack-item-content console-no-header">
            <div class="console-panel-body align-center">
                <div class="console-stats">
                    <h5>Total Deleted Pages</h5>
                    <span class="sparklines" data-sparkType="bar" data-sparkBarColor="#df4759" data-sparkBarWidth="10"
                        data-sparkHeight="50"> <?php echo "5,"; $i=1; while($i<=$deleted['num']){ echo ",".$i; $i+=5;}?> </span>
                    <div class="stats-num"><?php echo $deleted['num']?></div>
                </div>
            </div>
        </div>
        <span class="fs-1 mt-2" style="display: inline-block;">Deleted</span>
    </div>
    <!-- <div class="col-12 mt-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30451.34790154377!2d78.48655964999999!3d17.439673000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1636571699574!5m2!1sen!2sin"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="text-center my-2 fs-1">
            Cities Locations marked on map
        </div>
    </div> -->
</div>