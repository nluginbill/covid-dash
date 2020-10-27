<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>COVID Dashboard</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <h2>COVID Dashboard</h2>        
        
        <?php // var_dump($dResponse) ?>
        
        <h4>Total Deaths: <?php echo $dResponse['death'] ?></h4>
        <h4>Total number of positive cases: <?php echo $dResponse['positive'] ?></h4>
        <a href="index.php?action=loginPage">Login/Register</a>
        <br>
        <br>
        
        <?php if($_SESSION['loginUser'] !== 'defaultUser') { ?>
            <p class="loggedInAs">Logged in as <em><?php echo $_SESSION['loginUser']; ?></em></p>
            <a href="index.php?action=logOut">Log out</a>
        <?php } ?>
    </body>
</html>
