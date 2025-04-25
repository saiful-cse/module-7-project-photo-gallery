<?php
//Include header file and add config file.
include_once 'includes/header.php';

$error = '';
$success = '';
//Check method 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    if (empty($title) || empty($description)) {
        $error = 'Please fill in all fields';
    } else {
        $target_dir = 'assets/images/';

        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file = $image['name'];
        $new_name = uniqid() . $file;

        $target_file = $target_dir . $new_name;

        //Check image size, limit 5 MB
        if ($image['size'] > 5000000) {
            $error = 'File size is too large. Max size is 5MB';
        } else {

            //Image move to assets folder
            if (move_uploaded_file($image['tmp_name'], $target_file)) {
                $sql = "INSERT INTO images (title, description, filename) VALUES (:title, :description, :filename)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':title' => $title,
                    ':description' => $description,
                    ':filename' => $new_name
                ]);

                $success = "Image uploaded successfully";
                $title = "";
                $description = "";
            } else {
                $error = "Error uploading image";
            }
        }
    }
}
?>



<div class="my-4">
    <h1>Photo Gallery</h1>
</div>

<!-- Warnign show in alert view -->
<?php if ($success): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $success; ?>
    </div>
<?php endif; ?>

<?php if ($error): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php endif; ?>

<!-- Divdied by row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="description"> </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Select Image</label>
                        <input type="file" class="form-control" name="image" />
                    </div>
                    <button type="submit" class="btn btn-primary">Upload Photo</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include footer -->
<?php
include_once 'includes/footer.php';
?>