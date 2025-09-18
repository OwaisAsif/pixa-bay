<link rel="stylesheet" href="../../assets/css/create.css">
<?php
require_once __DIR__ . "../../../views/layout/header.php";
require_once __DIR__ . "../../../views/layout/nav.php";
require_once __DIR__. "../../../views/layout/sidebar.php";
?>


<link rel="stylesheet" href="../../Assets/css/add-image.css">

<div class="add-image-form">
  <h2>Add New Image</h2>
  
  <form action="../../App/RequestManager/RequestManager.php" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
    </div>
    
    <div class="form-group">
      <label for="description">Description</label>
      <textarea id="description" name="description" rows="4" required></textarea>
    </div>
    
    <div class="form-group">
      <label for="category">Category</label>
      <select id="category" name="category" required>
        <option value="">-- Select Category --</option>
        <option value="Animals">Animals</option>
        <option value="Nature">Nature</option>
        <option value="People">People</option>
        <option value="Food">Food</option>
        <option value="Business">Business</option>
        <option value="Technology">Technology</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="image">Upload Image</label>
      <input type="file" id="image" name="image" accept="image/*" required>
    </div>
    
    <div class="form-actions">
      <button type="submit">Add Image</button>
    </div>
    
  </form>
</div>



<?php
require_once __DIR__ . "../../../views/layout/scripts.php";
?>

<script src="../../assets/js/users/create.js"></script>

<?php
require_once __DIR__ . "../../../views/layout/footer.php";
?>