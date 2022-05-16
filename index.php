<?php

    session_start();

    ini_set('display_errors', 1); 
    require 'includes/database-connection.php'; 
    require 'includes/auth.php'; 

    $connection = getDB();
    $sql = "SELECT * FROM article"; 
    try {
        $result = mysqli_query($connection, $sql); 
        if ($result) {
            $articles = mysqli_fetch_all($result, MYSQLI_ASSOC); 
        } else {
            echo "DB did not return a value: " . mysqli_error($connection); 
        }
    } catch (Exception $e) {
        echo "ERROR: " . $e; 
    }

?>

<?php require 'includes/header.php'; ?>
<body>
    <h1>Blog</h1>

    <?php if(isLoggedIn()): ?>
        You are Logged In! <a href="./logout.php">Logout<br></a>
        <p><a href="./new-article.php">New Article</a></p>
    <?php else: ?>
        You are Logged Out! <a href="./login.php">Login<br></a>
    <?php endif; ?>    

    <?php if (empty($articles)) : ?>
        <h2> No articles found! </h2>
    <?php else: ?>    
        <ol>
            <?php foreach($articles as $article): ?>
            <li>
                <h3>Title:</h3>
                <a href="single-article.php?id=<?=$article['id']?>"><?= htmlspecialchars($article['title']); ?></a>
                <h3>Content:</h3>
                <?= htmlspecialchars($article['content']); ?>
            </li>
            <?php endforeach; ?>
        </ol>
    <?php endif; ?>    
</body>

</html>