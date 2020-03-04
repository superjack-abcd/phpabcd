<html>
    <head>
        <title>
            <?php echo "FTP VIEW";?>
        </title>
    </head>
    <body>
        <?php ?>
        <h1><?php echo "FTP";?></h1>
        <h3>My FTP View</h3>
        <ul>
            <?php foreach ($todo_list as $item):?>
                <link/>
                <li>
                    <?php echo $item;?>
                    <a href="<?=$item; ?>"><?=$item;?></a>
                </li>
            <?php endforeach;?>
        </ul>
        <link/>
        <link/>
    </body>
</html>