<!-- contact.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $data = [
        date('Y-m-d H:i:s'),
        $name,
        $email,
        $message
    ];

    $file = fopen('contacts.csv', 'a');
    fputcsv($file, $data);
    fclose($file);

    header('Location: thank_you.html');
    exit();
}
?>
