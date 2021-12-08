<a href="index.php?page=user.php&action=add-new">Them moi</a>
<table class="user-list" border="1">
    <tr class="header-user-list">
        <td>STT</td>
        <td>Ten</td>
        <td>Email</td>
        <td>Anh</td>
    </tr>
    <?php foreach ($users as $key => $user): ?>
    <tr>
        <td>
            <?php echo $key + 1 ?>
        </td>
        <td>
            <?php echo $user['name']?>
        </td>
        <td>
            <?php echo $user['email'] ?>
        </td>
        <td>
            <img src="" alt="">
        </td>
    </tr>
    <?php endforeach; ?>

</table>