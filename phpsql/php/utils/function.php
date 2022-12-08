<?php

function convert($img)
{
  $image_data = file_get_contents($_FILES['image']['tmp_name']);
  $base64_image = base64_encode($image_data);
  $image_url = 'data:image/jpg;base64,'.$base64_image;
  return $image_url;
}

?>