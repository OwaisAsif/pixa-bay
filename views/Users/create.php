<link rel="stylesheet" href="../../assets/css/create.css">
<?php
require_once __DIR__ . "../../../views/layout/header.php";
require_once __DIR__ . "../../../views/layout/nav.php";
require_once __DIR__. "../../../views/layout/sidebar.php";
?>
<div class="add-image-form" style="max-width: 600px; margin: 40px auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background: #fff;">
  <h2 style="text-align:center; margin-bottom:20px;">Add New Image</h2>
  
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    
    <div style="margin-bottom:15px;">
      <label for="name" style="display:block; font-weight:600; margin-bottom:5px;">Name</label>
      <input type="text" id="name" name="name" required 
             style="width:100%; padding:10px; border:1px solid #ccc; border-radius:5px;">
    </div>
    
    <div style="margin-bottom:15px;">
      <label for="description" style="display:block; font-weight:600; margin-bottom:5px;">Description</label>
      <textarea id="description" name="description" rows="4" required
                style="width:100%; padding:10px; border:1px solid #ccc; border-radius:5px;"></textarea>
    </div>
    
    <!-- Category -->
    <div style="margin-bottom:15px;">
      <label for="category" style="display:block; font-weight:600; margin-bottom:5px;">Category</label>
      <select id="category" name="category" required
              style="width:100%; padding:10px; border:1px solid #ccc; border-radius:5px;">
        <option value="">-- Select Category --</option>
        <option value="Animals">Animals</option>
        <option value="Nature">Nature</option>
        <option value="People">People</option>
        <option value="Food">Food</option>
        <option value="Business">Business</option>
        <option value="Technology">Technology</option>
      </select>
    </div>
    
    <!-- Upload -->
    <div style="margin-bottom:20px;">
      <label for="image" style="display:block; font-weight:600; margin-bottom:5px;">Upload Image</label>
      <input type="file" id="image" name="image" accept="image/*" required
             style="width:100%; padding:8px; border:1px solid #ccc; border-radius:5px;">
    </div>
    
    <!-- Submit -->
    <div style="text-align:center;">
      <button type="submit" 
              style="padding:12px 25px; background:#4CAF50; color:white; border:none; border-radius:5px; cursor:pointer; font-size:16px;">
        Add Image
      </button>
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