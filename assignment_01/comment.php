<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <title>Comment</title>
</head>
<body>
    <nav>
        <ul>
        <li><a href="hobby.php">Home</a></li>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="comment.php">Comment</a></li>
        <li><a href="photo_gallery.php">Gallery</a></li>
        <li><a href="resource.php">Resource</a> </li>    
        </ul>      
    </nav>
    <br>
    <form>
        <h1>Comment Form</h1>
        <label>Name</label><br>
        <input type="text" placeholder="Name"><br><br>
        <label>Gender</label><br>
        <input type="radio" value="male">Male <input type="radio" value="female">Female<br><br>
        <label>Email</label><br>
        <input type="text" placeholder="Email"><br><br>
        <label>Commment</label><br>
        <textarea name="comment" width=200 height=100>Insert your comment here</textarea><br><br>
        <input type="submit" class="button1">
    </form>
    
</body>

</html>