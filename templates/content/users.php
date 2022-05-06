<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th></th>
        </tr>
        <?php foreach ($data['users'] as $users): ?>
        <tr>
            <td><?php echo $users['userId'] ?></td>
            <td><?php echo $users['userName'] ?></td>
            <td><?php echo $users['departmentName'] ?></td>
            <td><a href="/users/edit/?userId=<?php echo $users['userId'] ?>">edit</a></td>
            <td><a href="/users/articles/?userId=<?php echo $users['userId'] ?>">show Inventory</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>