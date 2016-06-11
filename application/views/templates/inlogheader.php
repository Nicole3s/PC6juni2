<html>
<head>
    <title>DataDate</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>/assets/css/style.css"/>
</head>
<header>
    <div>
        <div id="HomeLogo"><a href="<?php echo base_url(''); ?>">DataDate</a></div>
        <nav>

            <ul>
                <li><a href = "<?php echo base_url(''); ?>"> Home</a></li>
                <li><?php echo anchor('/like/like/', 'Likes') ?></li>
                <li><?php echo anchor('/like/like/', 'Geliked') ?></li>
                <li><?php echo anchor('/like/like/', 'Matches') ?></li>
                <li><?php echo anchor('/mijngegevens/mijngegevens/', 'Mijn Gegevens: '.ucfirst($_SESSION['nickname'])) ?></li>
                <li><?php echo anchor('/mijnprofiel/logout/', 'Uitloggen') ?> </li>

            </ul>
        </nav>
    </div>
</header>
<body>
<div id="content">
