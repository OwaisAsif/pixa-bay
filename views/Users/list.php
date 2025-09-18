<link rel="stylesheet" href="../../assets/css/list.css">
<?php
require_once __DIR__ . "../../../views/layout/header.php";
require_once __DIR__ . "../../../views/layout/nav.php";
require_once __DIR__. "../../../views/layout/sidebar.php";
?>



<div class="main">
  <div class="bread-crumb">
    <h3 class="heading-text text-primary fw-bold">👱🏿 Users List</h3>
  </div>

  <div class="table-container shadow-sm rounded-3 p-3">

    <div class="d-flex justify-content-between align-items-center mb-3">
      <button style="position:relative;left:920px; top:50px; z-index:999;"type="button" class="btn btn-primary btn-sm px-4 shadow"
        data-bs-toggle="modal" data-bs-target="#AddUser">
        ADD USER
      </button>
    </div>

    <table id="userTable" class="table table-dark table-striped table-hover align-middle mb-0">
      <thead class="bg-primary text-white">
        <tr>
          <th>ID</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>Email</th>
          <th>Password</th>
          <th>Phone</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>

  </div>
</div>






<?php
require_once __DIR__ . "../../../views/_partials/users/AddUserModal.php";
require_once __DIR__ . "../../../views/_partials/users/EditUserModel.php";
require_once __DIR__ . "../../../views/layout/scripts.php";
?>

<script src="../../assets/js/users/list.js"></script>
<script src="../../assets/js/users/add_users.js"></script>
<script src="../../assets/js/users/delete_users.js"></script>
<script src="../../assets/js/users/edit_users.js"></script>
<?php
require_once __DIR__ . "../../../views/layout/footer.php";
?>