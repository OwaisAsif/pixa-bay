<link rel="stylesheet" href="../../assets/css/create.css">
<?php
require_once __DIR__ . "../../../views/layout/header.php";
require_once __DIR__ . "../../../views/layout/nav.php";
require_once __DIR__. "../../../views/layout/sidebar.php";
?>


<link rel="stylesheet" href="../../Assets/css/add-image.css">

  <section class="add-image-form">
    <h2>Add New Image</h2>
    <form id="addImageForm" enctype="multipart/form-data">
      
      <div class="form-group">
        <label for="name">Image Name</label>
        <input type="text" id="name" name="name" placeholder="Enter image name" required>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="4" placeholder="Enter image description" required></textarea>
      </div>

      <div class="form-group">
        <label for="category">Category</label>
        <select id="category" name="category" required>
          <option value="">-- Select Category --</option>
          <option value="nature">Nature</option>
          <option value="animals">Animals</option>
          <option value="people">People</option>
          <option value="food">Food</option>
          <option value="travel">Travel</option>
          <option value="technology">Technology</option>
          <option value="other">Other</option>
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
  </section>



<?php
require_once __DIR__ . "../../../views/layout/scripts.php";
?>

<script src="../../assets/js/create.js"></script>
<script src="../../assets/js/users/add_images.js"></script>


<?php
require_once __DIR__ . "../../../views/layout/footer.php";
?>