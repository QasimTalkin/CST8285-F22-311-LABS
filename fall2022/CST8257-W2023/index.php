<?php

// process image upload
  // if (isset($_FILES["fileToUpload"])) {
  //   $fileName = $_FILES["fileToUpload"]["name"];
  //   $fileTempLoc = $_FILES["fileToUpload"]["tmp_name"];
  //   $fileType = $_FILES["fileToUpload"]["type"];
  //   $fileSize = $_FILES["fileToUpload"]["size"];
  //   $fileErrorMsg = $_FILES["fileToUpload"]["error"];

  //   if(!$fileTempLoc) {
  //     echo "ERROR!! NO FILE SUBMITTED";
  //   }
  //   $moveFile = move_uploaded_file($fileTempLoc, "./uploads/$fileName");
  // }


 include("./common/header.php");
//  print_r(phpinfo());
?>
<div class="container">
    <h1>Welcome!</h1>

    <?php
      beautify_asso_array(getimagesize("./sas_cat.jpeg"));
    ?>
    <h2>Normal image</h2>
    <img src="./sas_cat.jpeg" alt="SAS Cat" width="70%"/>

    <?php
    echo "<h2>Rotated image</h2>";
        $image = imagecreatefromjpeg("./sas_cat.jpeg");
        $imageRotated = imagerotate($image, 180, 0);
        imagejpeg($imageRotated, "./sas_cat_rotate.jpeg", 10);
        echo "<img src='./sas_cat_rotate.jpeg' alt='SAS Cat' width='70%' />";


    echo "<h2>Resized image</h2>";
    $image = imagecreatefromjpeg("./sas_cat.jpeg");
    $imageResized = imagescale($image, 40, 40);
    imagejpeg($imageResized, "./sas_cat_resized.jpeg", 100);
    echo "<img src='./sas_cat_resized.jpeg' alt='SAS Cat'/>";


    // echo "<h2>Cropping image</h2>";
    // $image = imagecreatefromjpeg("./sas_cat.jpeg");
    // $center_x_of_image = imagesx($image) / 2;
    // $center_y_of_image = imagesy($image) / 2;
    // $imageCropped = imagecrop($image, ['x' => $center_x_of_image, 'y' => $center_y_of_image, 'width' => 600, 'height' => 600]);
    // imagejpeg($imageCropped, "./sas_cat_cropped.jpeg", 100);
    // echo "<img src='./sas_cat_cropped.jpeg' alt='SAS Cat'/>";

    echo "<h2>Watermark image</h2>";
    $image = imagecreatefromjpeg("./sas_cat.jpeg");
    // // create an image with watermark text qasim save it as watermark.png
    $watermark = imagecreatetruecolor(200, 200);
    $textColor = imagecolorallocate($watermark, 255, 255, 255);
    imagestring($watermark, 15, 4, 5, "Qasim", $textColor);
    imagejpeg($watermark, "./watermark.png", 100);

    $watermark = imagecreatefrompng("./watermark.png");
    $imageWatermarked = imagecopy($image, $watermark, 0, 0, 0, 0, imagesx($watermark), imagesy($watermark));
    imagejpeg($imageWatermarked, "./sas_cat_watermarked.jpeg", 100);
    echo "<img src='./sas_cat_watermarked.jpeg' alt='SAS Cat'/>";


    // $imageSize = getimagesize("./sas_cat.jpeg");
    // beutify_asso_array($imageSize);

    // upload image form
    // echo "<h2>Upload image</h2>";
    // echo "<form action='./' method='post' enctype='multipart/form-data'>";
    // echo "<input type='file' name='fileToUpload' id='fileToUpload'>";
    // echo "<input type='submit' value='Upload Image' name='submit'>";
    // echo "</form>";



    function beautify_asso_array($array) {
      echo "<pre>";
      foreach ($array as $key => $value) {
        echo "<b>$key</b> => $value <br>";
      }
      echo "</pre>";
    }

    ?>
</div>
<?php include('./common/footer.php'); ?>
