
<div class="main-website-info mt-2 ml-3">
    <div class="conatiner">
        <a href="assets/csv_format.csv">
            <Button class="btn btn-success"><i class="icon dripicons-download"></i> Download CSV Format</Button>
        </a>
    </div>
    <hr>

    <form action="csv_action.php" method="POST" enctype="multipart/form-data">
       
            
                <label for="state-name" class="form-label">Select CSV:</label>
                <div class="row g-3 mb-3">
                    <div class="col-md-5">
                        <input type="file" class="form-control" name="csv_upload" id="csv_upload" accept=".csv" required>
                        <footer class="blockquote-footer">Upload CSV with all city and details it will auto generate all pages</footer>
                    </div>
                    <div class="col-md-4">
                        <input type="submit" value="Upload" name="csv_submit" class="btn btn-primary"  >
                    </div>  
                </div>
    </form>

    


	
</div>