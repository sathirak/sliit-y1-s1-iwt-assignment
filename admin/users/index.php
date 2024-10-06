<?php
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
        header("Location: ../sign-in");
    }

?>
<!DOCTYPE html>

<head>

    <?php
    include "../../components/html.php";
    include "../../utils/db.php";

    $search_query = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

    if (!empty($search_query)) {
        $sql = "SELECT * FROM user
        WHERE first_name LIKE '%$search_query%' 
        OR last_name LIKE '%$search_query%' 
        OR email LIKE '%$search_query%'";
    } else {
        $sql = "SELECT * FROM user";
    }

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
    <link rel="stylesheet" href="../../styles/components/loader.css">
</head>

<body>

    <?php
    include "../../components/header.php";
    ?>

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

            <form action="" method="GET" class="search-bar search-bar-margin">
                <input type="text" id="search-input" name="search" placeholder="Search Courses..." value="<?= $search_query ?>">
                <button id="search-button" type="submit">Search</button>
            </form>

            <div class="loading-spinner" id="loading-spinner"></div>

            <div class="search-list" id="search-list">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class='user-box'>
                            <div class='user-item'>
                                <div>
                                    <p class='user-title'><?= $row['first_name'] . " " . $row['last_name'] ?></p>
                                </div>
                                <div class='user-container'>
                                    <form action="delete.php" method="POST" class="delete-form" style="display:inline;">
                                        <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>">
                                        <button type="submit" class="delete">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No users found for your search.</p>
                <?php endif; ?>
            </div>

        </main>

    </div>

    <?php
    include "../../components/footer.php";
    ?>
    <script src="../../scripts/search.js"></script>
</body>

</html>