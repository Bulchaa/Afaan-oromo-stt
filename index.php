<?php
// Handle file upload (optional)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['audio'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["audio"]["name"]);
    move_uploaded_file($_FILES["audio"]["tmp_name"], $targetFile);
    echo json_encode(['status' => 'success']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afaan Oromo Transcriber</title>
    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- UI Content Here (See Step 3) -->

    <!-- Bootstrap JS -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- TensorFlow.js or Coqui STT -->
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@3.18.0/dist/tf.min.js"></script>
    <script src="js/stt.js"></script> <!-- Coqui STT client -->
    <script src="js/app.js"></script>
</body>
</html>
