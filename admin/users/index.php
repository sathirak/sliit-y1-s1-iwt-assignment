<!DOCTYPE html>

<head>

    <?php
    include "../../components/layout/html.php";
    include "../../utils/db.php";

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if (!$result) {
        die("Invalid query: " . $conn->error);
    }
    ?>
    <title>AcademiX | All Courses</title>
    <link rel="stylesheet" href="../../styles/global.css">
    <link rel="stylesheet" href="../../styles/components.css">
    <link rel="stylesheet" href="../../styles/admin.css">
    <link rel="stylesheet" href="../../styles/components/search-bar.css">

</head>

<body>


    <?php
    include "../../components/layout/header.php";
    ?>


    <body>
        <div class="container">
            <nav class="sidebar">
                <ul>
                    <li><a href="/admin/users">Users</a></li>
                    <li><a href="/admin/courses">Courses</a></li>
                    <li><a href="/admin/publishers">Publisher</a></li>
                </ul>
            </nav>

            <main>

                <h1 class="heading">
                    Administrator Dasboard <span style="color: var(--app-text);">Users</span>
                </h1>


                <div class="search-bar search-bar-margin">
                    <form action="" method="GET">
                        <input type="text" name="search" placeholder="Search Courses...">
                        <button id="search-button">Search</button>
                    </form>
                </div>

                <div class="user-list">
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class='user-box'>
                            <div class='user-item'>
                                <div>
                                    <p class='user-title'><?= $row['first_name'] ?> <?= $row['last_name'] ?></p>
                                </div>
                                <div class='user-container'>
                                    <button class='edit'>Edit</button>

                                    <form action="delete.php" method="POST" style="display:inline;">
                                        <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>">
                                        <button type="submit" class="delete">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </main>


        </div>

        <?php
        include "../../components/layout/footer.php";
        ?>

    </body>

    </html>