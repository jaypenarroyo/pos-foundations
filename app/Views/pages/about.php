<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<section class="page-heading">
    <p class="eyebrow">About the project</p>
    <h1>Built to demonstrate CodeIgniter foundations</h1>
    <p class="lead">
        POS Foundations is a beginner-friendly application that demonstrates URL routing,
        controllers, views, navigation, and passing structured data to a page.
    </p>
</section>

<section class="content-section">
    <h2>Current scope</h2>
    <p>
        This version does not connect to a database. Customer and staff records are kept in
        static PHP arrays inside their controllers and displayed in views with foreach loops.
    </p>
</section>
<?= $this->endSection() ?>
