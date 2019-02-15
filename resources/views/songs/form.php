<form action="" method="post">

    <?= csrf_field() ?>

    <input type="text" name="name" value="<?= htmlspecialchars($song->name) ?>"><br>
    <input type="text" name="code" value="<?= htmlspecialchars($song->code) ?>"><br>
    <input type="submit" name="submit">
    

</form>