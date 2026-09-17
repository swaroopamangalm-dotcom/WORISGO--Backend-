<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Platform</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h2>Simple Blog</h2>

    <form method="POST" action="add.php">
        <input type="text" name="title" class="form-control my-2"
               placeholder="Title" required>

        <textarea name="content" class="form-control my-2"
                  placeholder="Content" required></textarea>

        <button class="btn btn-primary">Post</button>
    </form>

    <hr>

    <?php
    $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");

    while ($row = $result->fetch_assoc()):
    ?>

    <div class="card my-3">
        <div class="card-body">
            <h5><?php echo $row['title']; ?></h5>
            <p><?php echo $row['content']; ?></p>
            <small><?php echo $row['created_at']; ?></small><br>

            <a href="delete.php?id=<?php echo $row['id']; ?>"
               class="btn btn-danger btn-sm">Delete</a>
        </div>
    </div>

    <?php endwhile; ?>

</body>
</html>
