<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<section class="page-heading">
    <p class="eyebrow">POS access</p>
    <h1>User Accounts</h1>
    <p class="lead">Staff records supplied by a static PHP array in the Users controller.</p>
</section>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Full name</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><code><?= esc($user['username']) ?></code></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><span class="role-badge"><?= esc($user['role']) ?></span></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
