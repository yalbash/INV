<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
        </tr>
        <?php foreach ($data['users'] as $users): ?>
        <tr>
            <td><?php echo $users['userId'] ?></td>
            <td><?php echo $users['userName'] ?></td>
            <td><?php echo $users['departmentName'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>