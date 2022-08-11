<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="/news/update" method="post">
    <?= csrf_field() ?>

    <label for="title" class="form-check-label">Title</label>
    <input type="input" name="title"  class="form-control" value="<?= $news['title'] ?>" placeholder="Enter header" /><br />

    <label for="slug" class="form-check-label">Slug</label>
    <input type="input" name="slug"  class="form-control" value="<?= $news['slug'] ?>" placeholder="enter-slug-here" /><br />

    <label for="body" class="form-check-label">Text</label>
    <textarea name="body" cols="45" rows="4" class="form-control" placeholder="<?= $news['body'] ?>"><?= $news['body'] ?></textarea><br />

    <button type="submit" name="submit" class="btn btn-primary" >Update</button>
</form>