<?php

use App\Session;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= BASE_URL ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php require 'templates/partials/favicon.php' ?>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title><?= PROJECT_NAME ?></title>

    <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css?<?= COMMIT_HASH ?>" rel="stylesheet">

    <!-- Site core CSS -->
    <link href="assets/css/main.css?<?= COMMIT_HASH ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js?<?= COMMIT_HASH ?>"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js?<?= COMMIT_HASH ?>"></script>
    <![endif]-->

    <script src="node_modules/jquery/dist/jquery.min.js?<?= COMMIT_HASH ?>"></script>
</head>

<body>
<?php
var_dump($_SESSION);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">pp-extranet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                </li>

            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <?= Session::get('activeCompany')['companyName'] ?>
                    </a>
                    <ul id="companySelector" class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <?php foreach ($companies as $company): ?>
                            <li><a class="dropdown-item"
                                   href="?companyId=<?= $company['companyId'] ?>"><?= $company['companyName'] ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <?php if (!file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/' . $controller . '/' . $controller . '_' . $action . '.php</i> does not exist. Create that file.'); ?>
    <?php @require "views/$controller/{$controller}_$action.php"; ?>

</div>
<!-- /container -->

<?php require 'templates/partials/error_modal.php'; ?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js?<?= COMMIT_HASH ?>"></script>
<script src="assets/js/main.js?<?= COMMIT_HASH ?>"></script>
<script>
</script>
</body>
</html>
<?php require 'system/error_translations.php' ?>
