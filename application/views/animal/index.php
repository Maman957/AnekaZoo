<div class="container">
    <h2 class="mb-4">Animal List</h2>
    <a href="<?= site_url('animal/create') ?>" class="btn btn-primary mb-3">Add New Animal</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Legs</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animals as $animal): ?>
                <tr>
                    <td><?= $animal['name'] ?></td>
                    <td><?= $animal['class'] ?></td>
                    <td><?= $animal['legs'] ?></td>
                    <td>
                        <a href="<?= site_url('animal/detail/' . $animal['id']) ?>" class="btn btn-info btn-sm">View</a>
                        <a href="<?= site_url('animal/edit/' . $animal['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('animal/delete/' . $animal['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this animal?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>