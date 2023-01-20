<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php if(isset($templateParams["title"])) { ?>
        <title><?php global $templateParams; echo $templateParams["title"] ?></title>
    <?php } ?>
    <link rel="icon" type="image/x-icon" href="../icons/logo.png">
    <!--Bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../javascript/javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<?php if(isset($templateParams["user"])) { ?>
    <div id="page-user" style="display: none"><?php echo $templateParams["user"] ?></div>
<?php }
    if(isset($templateParams["page"])) {
    require $templateParams["page"];
} ?>
<footer>
    <div class="d-flex justify-content-start flex-column">
        <nav>
            <ul class="row text-center">
                <li class="col-2"><a href="./feed.html"><img src="../icons/home_icon.png" alt="home"></a></li>
                <li class="col-2"><a href="./explore.html"><img src="../icons/search_icon.png" alt="explore"></a></li>
                <li class="col-2"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="../icons/write_icon.png" alt="write"></a></li>
                <li class="col-2"><a href="./notifications.html"><img src="../icons/notification_icon.png" alt="notifications"></a></li>
                <li class="col-2"><a href="./searchusers.html"><img src="../icons/users_icon.png" alt="search users"></a></li>
                <li class="col-2"><a href="./profile.html"><img src="../profile_pics/jaaack.jpg" alt="my profile"></a></li>
            </ul>
        </nav>
        <div></div>
    </div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="recipient-title">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Content:</label>
                        <textarea class="form-control" rows="4" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="post" class="btn btn-primary" onclick="createPost()">Post</button>
            </div>
        </div>
    </div>
</div>
</body>
<?php
if(isset($templateParams["js"])):
    foreach($templateParams["js"] as $script):
        ?>
        <script src="<?php echo $script; ?>"></script>
    <?php
    endforeach;
endif;
?>
</html>
