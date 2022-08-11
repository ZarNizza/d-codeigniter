<h2><?= esc($news['title']) ?></h2>
<p><?= esc($news['body']) ?></p>
<hr>
  <div class="row justify-content-start">
    <div class="col">
      <a href="/news/edit/<?= $news['slug'] ?>" /><button type="button" class="btn btn-info">Edit</button></a>
    </div>
    <div class="col">
      <form action="/news/delete/<?= $news['id'] ?>" method="get">
        <button type="submit" class="btn btn-outline-danger">Delete</button>
      </form>
    </div>
    <div class="col-10"></div>
  </div>

