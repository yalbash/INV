<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php foreach ($data['departments'] as $department): ?>
        <tr>
            <td><?php echo $department['id'] ?></td>
            <td><?php echo $department['name'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>