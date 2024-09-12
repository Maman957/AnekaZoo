<div class="container">
    <h2 class="mb-4">Edit Animal</h2>

    <?php if (isset($error)): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('animal/edit/' . $animal['id']) ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Animal Name</label>
            <input type="text" name="name" class="form-control" value="<?= $animal['name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Animal Class</label>
            <input type="text" name="class" class="form-control" value="<?= $animal['class'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="legs" class="form-label">Number of Legs</label>
            <input type="number" name="legs" class="form-control" value="<?= $animal['legs'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Animal</button>
        <a href="<?= site_url('animal') ?>" class="btn btn-danger">Back to List</a>
    </form>
</div>