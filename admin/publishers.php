<!DOCTYPE html>

<head>

    <?php
    include "../components/layout/html.php";
    ?>
    <title>AcademiX | All Courses</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/admin.css">
    <link rel="stylesheet" href="../styles/components/search-bar.css">

</head>

<body>


    <?php
    include "../components/layout/header.php";
    ?>


    <body>
        <div class="container">
            <nav class="sidebar">
                <ul>
                    <li><a href="/admin/users.php">Users</a></li>
                    <li><a href="/admin/courses.php">Courses</a></li>
                    <li><a href="/admin/publishers.php">Publisher</a></li>
                </ul>
            </nav>

            <main>


                <h1 class="heading">
                    Administrator Dasboard <span style="color: var(--app-text);">Publishers</span>
                </h1>

                <div class="search-bar search-bar-margin">
                    <form action="" method="GET">
                        <input type="text" name="search" placeholder="Search Courses...">
                        <button id="search-button">Search</button>
                    </form>
                </div>

                <div class="user-list">
                    <div class="user-box">
                        <div class="user-item">

                            <div>
                                <p class="user-title">Publisher 1</p>
                            </div>
                            <div class="user-container">
                                <button class="view">View</button>
                                <button class="edit">Edit</button>
                                <button class="delete">Delete</button>
                            </div>
                        </div>
                    </div>

                    <div class="user-box">
                        <div class="user-item">

                            <div>
                                <p class="user-title">Publisher 2</p>
                            </div>
                            <div class="user-container">
                                <button class="view">View</button>
                                <button class="edit">Edit</button>
                                <button class="delete">Delete</button>
                            </div>
                        </div>
                    </div>

                    <div class="user-box">
                        <div class="user-item">

                            <div>
                                <p class="user-title">Publisher 3</p>
                            </div>
                            <div class="user-container">
                                <button class="view">View</button>
                                <button class="edit">Edit</button>
                                <button class="delete">Delete</button>
                            </div>
                        </div>
                    </div>

                </div>
            </main>


        </div>

        <?php
        include "../components/layout/footer.php";
        ?>

    </body>

    </html>