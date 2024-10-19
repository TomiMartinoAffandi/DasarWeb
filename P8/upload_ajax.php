<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif");

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        @$file_ext = strtolower("".end(explode('.', $_FILES['files']['name'][$key]))."");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "$file_name: Hanya file gambar yang diperbolehkan (JPG, JPEG, PNG, GIF).";
        }

        if ($file_size > 2097152) {
            $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB.";
        }

        if (empty($errors) === true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "$file_name berhasil diunggah.<br>";
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
?>