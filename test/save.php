<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pageName = $_POST['pageName'];
    $pageContent = $_POST['pageContent'];

    if (!empty($pageName) && !empty($pageContent)) {
        $fileName = str_replace(' ', '-', strtolower($pageName)) . '.html';
        $filePath = $_SERVER['DOCUMENT_ROOT'] . '/' . $fileName;
        $fileHandle = fopen($filePath, 'w');
        fwrite($fileHandle, $pageContent);
        fclose($fileHandle);
        header('Location: /' . $fileName);
        exit;
    }
}
?>