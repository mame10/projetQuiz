<table>
    <thead>
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Score</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $value) : ?>
            <tr>
                <td><?= $value['prenom'] ?></td>
                <td><?= $value['nom'] ?></td>
                <td><?= $value['score'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>