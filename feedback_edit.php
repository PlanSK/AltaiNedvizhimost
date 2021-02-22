<?php
require('templates/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Service Web Site</title>
    <link rel="stylesheet" href="styles/css_feedback.css">
</head>
<body>
<?php
if (isset($_POST['action']) and $_POST['action'] == 'add') {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $service = $_POST['service'];
    $text = $_POST['text'];
    $id = $_POST['member'];
    $query = "INSERT INTO feedbacks (name, date, service, text, id_member) VALUES ('{$name}', '{$date}', '{$service}', '{$text}', {$id})";
    if ($connect->query($query)) {
        echo "Feedback added in DB succesfuly.";
    }
    else { 
        echo "Error of feedback add!"; 
    }
} elseif (isset($_GET['action']) and $_GET['action'] == 'delete') {
    $query = "DELETE FROM feedbacks WHERE id = {$_GET['id']}";
    if ($connect->query($query)) {
        echo "Feedback number {$_GET['id']} deleted.";
    }
    else { 
        echo "Error of feedback delete!"; 
    }
}
?>
    <h3>Работа с отзывами на сайте</h3>
    <table class="iksweb">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Service</th>
                <th>Text</th>
                <th>ID Member</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $table = $connect->query("SELECT * FROM feedbacks");
    while($m = $table->fetch_assoc()) : ?>
        <tr>
            <td><?php echo $m['id'] ?></td>
            <td><?php echo $m['name'] ?></td>
            <td><?php echo $m['date'] ?></td>
            <td><?php echo $m['service'] ?></td>
            <td><?php echo $m['text'] ?></td>
            <td><?php echo $m['id_member'] ?></td>
            <td><a href="?action=delete&id=<?php echo $m['id']?>" onclick="return confirm('Удалить отзыв?')">Delete</a></td>
        </tr>
    <?php       
    endwhile;
    ?>
        </tbody>
    </table>
    <hr>
    <h3>Добавление отзыва на сайт</h3>
    <div class="form">
    <form action="/feedback_edit.php" method="post">
        <div class="subform">
            <p>Имя автора отзыва:</p>
            <input type="text" name="name" size="30" required><br>
            <p>Услуга:</p>
            <input type="text" name="service" size="30" required><br>
            <p>Дата:</p>
            <input type="date" name="date" required>
            <p>Специалист:</p>
            <select name="member">
                <?php
                    $table = $connect->query("SELECT * FROM members");
                    while($m = $table->fetch_assoc()) : ?>
                        <option value="<?php echo($m['id'])?>"><?php echo($m['name']) ?></option>
                <?php
                    endwhile;
                ?>
            </select><br>
        </div>
        <div class="subform">
            <p>Текст отзыва:</p>
            <textarea name="text" id="" cols="50" rows="13" required></textarea>
            <br>
            <input type="hidden" name="action" value="add">
            <input type="submit" value="Add">
            <input type="reset" value="Reset">
        </div>
    </form>
    </div>
</body>
</html>

<?php
    $connect->close();
?>