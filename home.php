<?php
require_once("include/initialize.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main-container">

        <h2>Welcome, <?php echo $_SESSION['Fname']; ?>!</h2>

        <div class="filter-container">
            <div class="category-head">
                <ul>
                    <div class="category-title active" id="all">
                        <li>All</li>
                        <span><i class="fas fa-border-all"></i></span>
                    </div>
                    <div class="category-title" id="python">
                        <li>Python/R</li>
                        <span><i class="fab fa-python"></i></i></span>
                    </div>
                    <div class="category-title" id="java">
                        <li>Java</li>
                        <span><i class="fab fa-java"></i></span>
                    </div>
                    <div class="category-title" id="php">
                        <li>PHP</li>
                        <span><i class="fab fa-php"></i></i></span>
                    </div>
                    <div class="category-title" id="html">
                        <li>HTML & CSS</li>
                        <span><i class="fas fa-code"></i></i></span>
                    </div>
                    <div class="category-title" id="sql">
                        <li>SQL</li>
                        <span><i class="fas fa-database"></i></span>
                </ul>
            </div>

            <div class="posts-collect">
                <div class="posts-main-container">
                    <!-- single post -->
                    <?php
                    $sql = "SELECT * FROM tbllesson WHERE Category='Python'";
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                    ?>
                        <div class="all python">
                            <div class="post-img">
                                <img src="images/python-3.jpg" alt="post" height="175">
                                <span class="category-name">Python</span>
                            </div>

                            <div class="post-content">
                                <div class="post-content-top">
                                    <?php
                                    echo '<td>' . $result->LessonChapter . '</td>'; ?>
                                </div>
                                <br>
                                <p><?php echo '<td>' . $result->LessonTitle . '</td>'; ?></p>
                            </div>
                            <button type="button" class="read-btn"><?php echo '<a href="index.php?q=playvideo&id=' . $result->LessonID . '" >Read All</a>' ?></button>
                        </div>
                    <?php } ?>
                    <!-- end of single post -->
                    <!-- single post -->

                    <!-- end of single post -->
                    <!-- single post -->
                    <?php
                    $sql = "SELECT * FROM tbllesson WHERE Category='Java'";
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                    ?>
                        <div class="all java">
                            <div class="post-img">
                                <img src="images/java-3.png" alt="post" height="175">
                                <span class="category-name">Java</span>
                            </div>

                            <div class="post-content">
                                <div class="post-content-top">
                                    <?php
                                    echo '<td>' . $result->LessonChapter . '</td>'; ?>

                                    </span>
                                </div>
                                <br>
                                <p><?php
                                    echo '<td>' . $result->LessonTitle . '</td>'; ?></p>
                            </div>
                            <button type="button" class="read-btn"><?php echo '<a href="index.php?q=playvideo&id=' . $result->LessonID . '" >Read All</a>' ?></button>
                        </div>
                    <?php } ?>
                    <!-- end of single post -->

                    <!-- single post -->

                    <!-- end of single post -->
                    <!-- single post -->
                    <?php
                    $sql = "SELECT * FROM tbllesson WHERE Category='PHP'";
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                    ?>
                        <div class="all php">
                            <div class="post-img">
                                <img src="images/php-3.png" alt="post">
                                <span class="category-name">PHP</span>
                            </div>

                            <div class="post-content">
                                <div class="post-content-top">
                                    <?php
                                    echo '<td>' . $result->LessonChapter . '</td>'; ?>

                                </div>
                                <br>
                                <p><?php
                                    echo '<td>' . $result->LessonTitle . '</td>'; ?></p>
                            </div>
                            <button type="button" class="read-btn"><?php echo '<a href="index.php?q=playvideo&id=' . $result->LessonID . '" >Read All</a>' ?></button>
                        </div>
                    <?php } ?>

                    <?php
                    $sql = "SELECT * FROM tbllesson WHERE Category='HTML'";
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                    ?>
                        <div class="all html">
                            <div class="post-img">
                                <img src="images/html-3.jpg" alt="post">
                                <span class="category-name">HTML</span>
                            </div>

                            <div class="post-content">
                                <div class="post-content-top">
                                    <?php
                                    echo '<td>' . $result->LessonChapter . '</td>'; ?>

                                </div>
                                <br>
                                <p><?php
                                    echo '<td>' . $result->LessonTitle . '</td>'; ?></p>
                            </div>
                            <button type="button" class="read-btn"><?php echo '<a href="index.php?q=playvideo&id=' . $result->LessonID . '" >Read All</a>' ?></button>
                        </div>
                    <?php } ?>
                    <!-- end of single post -->


                    <!-- single post -->
                    <?php
                    $sql = "SELECT * FROM tbllesson WHERE Category='Sql'";
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                    ?>
                        <div class="all sql">
                            <div class="post-img">
                                <img src="images/sql-1.jpg" alt="post">
                                <span class="category-name">SQL</span>
                            </div>
                            <div class="post-content">
                                <div class="post-content-top">
                                    <?php
                                    echo '<td>' . $result->LessonChapter . '</td>'; ?>
                                </div>
                                <br>
                                <p><?php
                                    echo '<td>' . $result->LessonTitle . '</td>'; ?></p>
                            </div>
                            <button type="button" class="read-btn"><?php echo '<a href="index.php?q=playvideo&id=' . $result->LessonID . '" >Read All</a>' ?></button>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- JS file -->
    <script src="script.js"></script>
</body>

</html>