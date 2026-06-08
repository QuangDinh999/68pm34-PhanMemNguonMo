<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title ?? 'Trang quản lý'); ?></title>
</head>
<body>
    <?php require_once '../app/views/layouts/partial/header.php'; ?>

    <main class="content" style="padding: 20px;">
        <?php require_once '../app/views/' . $view . '.php'; ?>
    </main>

    <?php require_once '../app/views/layouts/partial/footer.php'; ?>
</body>
</html>