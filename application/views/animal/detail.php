<div class="container">
    <h2 class="mb-4">Animal Details</h2>

    <?php if ($animal): ?>
        <div class="card">
            <div class="card-header">
                Details of <?= $animal['name'] ?>
            </div>
            <div class="card-body">
                <p class="card-text">Name: <?= $animal['name'] ?></p>
                <p class="card-text">Class: <?= $animal['class'] ?></p>
                <p class="card-text">Legs: <?= $animal['legs'] ?></p>
                <div class="text-center mt-4">
                    <a href="<?= site_url('animal') ?>" class="btn btn-danger">Back to List</a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-danger">
            Animal not found!
        </div>
        <a href="<?= site_url('animal') ?>" class="btn btn-primary">Back to List</a>
    <?php endif; ?>
</div>