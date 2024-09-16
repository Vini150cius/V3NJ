<!DOCTYPE html>
<html lang="pt br">

<head>
    <?php include_once 'head.php'; ?>
</head>

<body style="background-color: #1b1a18;">

    <?php include_once 'nav.php'; ?>
    <main class="indexMain">
        <?php
        $pagina = filter_input(INPUT_GET, 'p');

        if (empty($pagina)) {
            include_once 'homePage.php';
        } else {
            if (file_exists($pagina . '.php')) {
                include_once $pagina . '.php';
            } else {
                include_once 'erro404page.php';
            }
        }
        ?>
        <?php include_once 'scripts.php'; ?>
        <script src="./js/script.js"></script>
    </main>

</body>

</html>