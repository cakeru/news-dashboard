<!-- article.php -->
<?php include 'header.php'; ?>

<div class="wrapper">
  <div class="container-fluid">
    <div class="row">
      <?php include 'sidebar.php'; ?>

      <!-- Main content -->
      <main class="col-md-9 ms-sm-auto col-lg-10">
        <h1 class="mt-4">Create Article</h1>
        
        <form action="script/process_article.php" method="post">
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>
          
          <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
          </div>
          <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </main>
    </div>
  </div>
</div>

<!-- Include CKEditor library -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<!-- Initialize CKEditor on the 'content' textarea -->
<script>
  CKEDITOR.replace('content');
</script>

<?php include 'footer.php'; ?>
