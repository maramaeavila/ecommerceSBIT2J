<?php
include "connection.php";
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label> Name </label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label>Cat Gender</label>
            <select class="form-select" aria-label="Default select example">
              <option value="Men" selected>Men</option>
              <option value="Women">Women</option>
              <option value="Kids">Kids</option>
            </select>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Product List
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
          Add Product
        </button>
      </h6>
    </div>

    <div class="card-body">

      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID </th>
              <th>Name </th>
              <th>Price </th>
              <th>Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM products";

            $statement = oci_parse($conn, $sql);
            oci_execute($statement);
            while ($row = oci_fetch_assoc($statement)) {
              echo "<tr>
                      <td>{$row['PROD_ID']}</td>
                      <td>{$row['PROD_NAME']}</td>
                      <td>{$row['PROD_PRICE']}</td>
                      <td width = 15%>
                        <button type='submit' name='registerbtn' class='btn btn-success'>Edit</button>
                        <button type='submit' name='registerbtn' class='btn btn-danger'>Delete</button>
                      </td>
                    </tr>";
            }
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>