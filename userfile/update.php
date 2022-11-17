<?php
include '../functions/functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
        $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $created_at = isset($_POST['created_at']) ? $_POST['created_at'] : '';
        $updated_at = isset($_POST['updated_at']) ? $_POST['updated_at'] : date('Y-m-d H:i:s');
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE user SET id = ?, first_name = ?, last_name = ?,email = ?, status = ?, created_at,updated_at,password = ? WHERE id = ?');
        $stmt->execute([$id, $first_name, $last_name,$email,$status,$created_at, $updated_at, $_GET['id'],$password]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM user  WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>

<?=template_header('Read')?>

<div class="content update">
	<h2>Update Contact #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="first_name">first_name</label>
        <input type="text" name="id" placeholder="1" value="<?=$contact['id']?>" id="id">
        <input type="text" name="first_name" placeholder=" type your first_name" value="<?=$contact['first_name']?>" id="name">
        <label for="last_name">last_name</label>
        <label for="email">Email</label>
        <input type="text" name="last_name" placeholder="last_name." value="<?=$contact['last_name']?>" id="email">
        <input type="email" name="email" placeholder="johndoe@example.com" value="<?=$contact['email']?>" id="email">
        <label for="email">status</label>
        <label for="title">Created</label>
        <input type="text" name="status" placeholder="status." value="<?=$contact['status']?>" id="email">
        <input type="text" name="created" value="<?=$contact['created_at']?>" id="created">
        <input type="datetime-local" name="Updated" value="<?=date('Y-m-d\TH:i', strtotime($contact['updated_at']))?>" id="created">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>