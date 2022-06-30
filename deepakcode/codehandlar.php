<div class="title fs-2">

    Add Analytics Code

</div>

<?php

include './config.php';

$code = mysqli_query($conn,"select code from header_code where code_id = 1");

$codes = mysqli_fetch_assoc($code);

?>

<form action="./action_page.php" method="post">

<div class="add-code my-5">

    <div class="mb-3">

        <label for="exampleFormControlTextarea1" class="form-label">Add Code to all header of the website</label>

        <textarea class="form-control textarea-control" id="exampleFormControlTextarea1" rows="10" name="codehandlar"><?php echo $codes['code']?></textarea>

    </div>

    <button class="btn btn-primary p-2">Add Code in header to all pages</button>

</div>

</form>