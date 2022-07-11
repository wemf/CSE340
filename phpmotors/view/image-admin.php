<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Image Management | PHP Motors</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div id="wrapper">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/header.php" ?>
            </header>
            <nav>
                <?php echo $navList; ?>
            </nav>
            <main>
                <h1>Image Management Here</h1>
                <p>Choose one of the options below:</p>
                <h2>Add New Vehicle Image</h2>
                <?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } ?>
                <form action="/phpmotors/uploads/" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="upload">
                    <div class="field">
                        <label for="invId">Vehicle</label><br/>
                        <?php echo $prodSelect; ?>
                    </div>
                    <div class="field">
                        <label for="file1">Upload Image:</label><br/>
                        <input type="file" name="file1" id="file1">
                    </div>
                    <button class="btn btn--primary" type="submit">Upload</button>
                </form>
                <hr>
                <h2>Existing Images</h2>
                <p class="notice">If deleting an image, delete the thumbnail too and vice versa.</p>
                <?php if (isset($imageDisplay)) { echo $imageDisplay; } ?>
            </main>
            <hr>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
            </footer>
        </div>
    </body>
</html>