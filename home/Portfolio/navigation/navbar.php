<link rel="stylesheet" href="navigation/navbarStyle.php" media="screen">

<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a href="index.php?page=0" class="navbar-brand "><img src="media/icons/favicon.ico" height="20" id="brandIcon"> Portfolio</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav">

                <?php
                // Output a link for each page listed on the database
                while ($row = $result->fetch_assoc()) {
                    if ($row['id'] != 0) {
                ?>
                    <li class="nav-item">
                        <a href="index.php?page=<?=$row["id"]?>" class=" nav-link <?php isActive($row["id"], 'active') ?>"><?= $row["title"] ?></a>
                    </li>
                <?php
                }}
                ?>
            </ul>
            <div class="navbar-nav ms-auto">
                <?php if ($_GET['page'] == '1') {
                    echo '<a onclick="resetColor()" class="nav-item nav-link">Reset Color</a>';
                } ?>
                <a href="" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </div>
</nav>