<html>
<head>
    <title>DataDate</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/assets/css/style.css"/>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script href="<?php echo base_url(''); ?>/application/views/registeer/registreer.php"></script>
</head>
<header>
    <div>
        <div id="HomeLogo"><a href="<?php echo base_url(''); ?>">DataDate</a></div>
        <nav>

            <ul>

                <li><a href = "<?php echo base_url(''); ?>"> Home</a></li>
                <li><?php echo anchor('/registreer/registreer/', 'Likes') ?></li>
                <li><?php echo anchor('/registreer/registreer/', 'Geliked') ?></li>
                <li><?php echo anchor('/registreer/registreer/', 'Matches') ?></li>
                <li><?php echo anchor('/registreer/test/', 'Test') ?></li>
                <li><?php echo anchor('/registreer/registreer/', 'Registeer') ?></li>
                <li><?php echo anchor('/mijnprofiel/inlog/', 'Login') ?> </li>

            </ul>
        </nav>
    </div>
</header>
<body>
<div id="content">
