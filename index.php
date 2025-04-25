<?php
//Include header file and add config file.
include 'includes/header.php';

$sql = "SELECT * FROM images ORDER BY upload_date DESC";
$stmt = $pdo->query($sql);

$images = $stmt->fetchAll();

?>


<div class="my-4">
    <h1>Photo Gallery</h1>
</div>
<div class="row">

    <?php
    if (count($images) > 0) {
        foreach ($images as $image) {
    ?>
            <!-- image show add 10px space between image -->
            <div class="card" style="width: 18rem; margin: 10px;">
                <img src="assets/images/<?php echo $image['filename'] ?>" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $image['title'] ?></h5>
                    <p class="card-text">
                        <?php echo date('M, D, Y', strtotime($image['upload_date'])) ?>
                    </p>
                </div>
            </div>
        <?php
        }
    } else { ?>
        <!-- Set warnig if not found any image. -->
        <div class="alert alert-info" role="alert">
            No images found.
        </div>
    <?php } ?>

</div>

<?php
include 'includes/footer.php';
?>