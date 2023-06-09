<?php
require_once "bootstrap.php";
global $dbh, $error;

if (isset($_POST["comment"]) && isset($_POST["post"])) {
    $comment = $_POST["comment"];
    $post = $_POST["post"];
    $dbh->addComment($comment, $post);
} else {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data["title"]) && isset($data["content"]) && $data["action"] == "create") {
        $title = $data["title"];
        $content = $data["content"];
        $dbh->addPost($title, $content);
    } elseif (isset($data["rating"]) && $data["action"] == "addRating") {
        $rating = $data["rating"];
        $post = $data["post"];
        $dbh->addRating($rating, $post);
    } elseif (isset($data["rating"]) && $data["action"] == "changeRating") {
        $newRating = $data["rating"];
        $post = $data["post"];
        $dbh->changeRating($newRating, $post);
    } elseif (isset($data["id"]) && $data["action"] == "delete") {
        $id = $data["id"];
        $dbh->deletePost($id);
    } elseif (isset($data["id"]) && $data["action"] == "edit") {
        $id = $data["id"];
        $title = $data["title"];
        $content = $data["content"];
        $dbh->editPost($id, $title, $content);
    } else {
        throw new $error;
    }
}
?>
