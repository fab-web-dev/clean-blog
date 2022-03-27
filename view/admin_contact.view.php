<?php include("view/layout/nav.inc.php"); ?>
<?php include("view/layout/header.inc.php"); ?>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            <?php foreach ($data as $onedata) { ?>
                <ul class="list-group">
                    <li class="list-group-item">
                        ID:
                        <?= $onedata["contact_ID"] ?>
                        | Name:
                        <?= $onedata["contact_name"] ?>
                        | Email:
                        <?= $onedata["contact_email"] ?>
                        | Phone:
                        <?= $onedata["contact_phone"] ?>
                        | Message:
                        <?= $onedata["contact_message"] ?>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
</div>

<?php include("view/layout/footer.inc.php"); ?>