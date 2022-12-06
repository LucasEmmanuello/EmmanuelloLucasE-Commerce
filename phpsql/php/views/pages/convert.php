<?php
$pageTitle = "convert";

ob_start();
?>

<input type="file" accept="image/*" />

<?php
if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
  $image_data = file_get_contents($_FILES['image']['tmp_name']);
  $base64_image = base64_encode($image_data);
  $image_url = 'data:image/jpg;base64,'.$base64_image;
  echo '<img src="'.$image_url.'"/>';
}

$pageContent = ob_get_clean();