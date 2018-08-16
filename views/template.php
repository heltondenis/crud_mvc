<html>
<head>
    <meta charset="utf-8" />
    <title>MVC</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</head>
<body>
TEMPLATE <hr>
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

</body>
</html>
