<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>


<div class="container-fluid">
    <h1><i class="fa fa-plus"></i> This is the home</h1>
</div>
<?php if (isset($data['rows']) && is_array($data['rows'])): ?>
        <ul>
            <?php foreach ($data['rows'] as $row): ?>
                <li><?php echo htmlspecialchars($row->name); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No users found.</p>
    <?php endif; ?>

<?php $this->view('includes/footer') ?>