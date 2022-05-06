<h2>
    Artikel des Users <?php echo $data['articles'] ?>
</h2>
<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Kategorie</th>
        </tr>
        <?php foreach ($data['articles'] as $articles): ?>
        <tr>
            <td><?php echo $articles['articleId'] ?></td>
            <td><?php echo $articles['articleName'] ?></td>
            <td><?php echo $articles['articleCategory'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>