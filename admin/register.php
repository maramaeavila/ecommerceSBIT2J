<?php
include "connection.php";
include('header.php');
include('navbar.php');
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
      <form action="product.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label> Product </label>
            <input type="text" name="productname" class="form-control" placeholder="Enter Product Name">
          </div>
          <div class="form-group">
            <label>Cat Gender</label>
            <select class="form-select" name="catgender" aria-label="Default select example">
              <option value="Men" selected>Men</option>
              <option value="Women">Women</option>
              <option value="Kids">Kids</option>
            </select>
          </div>
          <div class="form-group">
            <label>Category</label>
            <select class="form-select" name="category" aria-label="Default select example">
              <option value="T-Shirt" selected>T-Shirt</option>
              <option value="Jeans">Jeans</option>
              <option value="Jackets">Jackets</option>
              <option value="Sweatpants">Sweatpants</option>
              <option value="Dress">Dress</option>
              <option value="Undergarments">Undergarments</option>
            </select>
          </div>
          <div class="form-group">
            <label>Size</label>
            <select class="form-select" name="size" aria-label="Default select example">
              <option value="Small" selected>Small</option>
              <option value="Medium">Medium</option>
              <option value="Large">Large</option>
            </select>
          </div>
          <div class="form-group">
            <label> Price </label>
            <input type="text" name="productprice" class="form-control" placeholder="Enter Product Price">
          </div>
          <div class="form-group">
            <label> Description </label>
            <textarea name="productdescription" class="form-control" placeholder="Enter Product Description"></textarea>
          </div>
          <div class="form-group">
            <label> Image </label>
            <input type="file" name="productimage" class="form-control">
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

<div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="editproduct.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" name="xproductid" id="xproductid" class="form-control">
            <label> Product </label>
            <input type="text" name="xproductname" id="xproductname" class="form-control" placeholder="Enter Product Name">
          </div>
          <div class="form-group">
            <label>Cat Gender</label>
            <select class="form-select" name="xcatgender" id="xcatgender" aria-label="Default select example">
              <option value="Men" selected>Men</option>
              <option value="Women">Women</option>
              <option value="Kids">Kids</option>
            </select>
          </div>
          <div class="form-group">
            <label>Category</label>
            <select class="form-select" name="xcategory" id="xcategory" aria-label="Default select example">
              <option value="T-Shirt" selected>T-Shirt</option>
              <option value="Jeans">Jeans</option>
              <option value="Jackets">Jackets</option>
              <option value="Sweatpants">Sweatpants</option>
              <option value="Dress">Dress</option>
              <option value="Undergarments">Undergarments</option>
            </select>
          </div>
          <div class="form-group">
            <label>Size</label>
            <select class="form-select" name="xsize" id="xsize" aria-label="Default select example">
              <option value="Small" selected>Small</option>
              <option value="Medium">Medium</option>
              <option value="Large">Large</option>
            </select>
          </div>
          <div class="form-group">
            <label> Price </label>
            <input type="text" name="xproductprice" id="xproductprice" class="form-control" placeholder="Enter Product Price">
          </div>
          <div class="form-group">
            <label> Description </label>
            <textarea name="xproductdescription" id="xproductdescription" class="form-control" placeholder="Enter Product Description"></textarea>
          </div>
          <div class="form-group">
            <label> Image </label>
            <input type="file" name="xproductimage" class="form-control">
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

<div class="modal fade" id="deleteproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="deleteproduct.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="xproductidx" id="xproductidx" class="form-control">
            <label>Are you sure you want to delete this product?<span id="productName"></span></label>
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
                      <td width= 10%>{$row['PROD_ID']}</td>
                      <td>{$row['PROD_NAME']}</td>
                      <td>{$row['PROD_PRICE']}</td>
                      <td width = 15%>
                        <button type='button' class='btn btn-success edit-btn' data-product-id='{$row['PROD_ID']}' data-toggle='modal' data-target='#editproduct'>Edit</button>
                        <button type='button' class='btn btn-danger edit-btn' data-product-id='{$row['PROD_ID']}' data-toggle='modal' data-target='#deleteproduct'>Delete</button>
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
include('scripts.php');
include('footer.php');
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.edit-btn').click(function() {
      var prod_id = $(this).data('product-id');

      $.ajax({
        url: 'fetch_product.php',
        type: 'POST',
        data: {
          prod_id: prod_id
        },
        dataType: 'json',
        success: function(response) {
          console.log(response);

          $('#xproductid').val(response.PROD_ID);
          $('#xproductname').val(response.PROD_NAME);
          $('#xcatgender').val(response.PROD_CATGENDER);
          $('#xcategory').val(response.PROD_CATEGORY);
          $('#xsize').val(response.PROD_SIZE);
          $('#xproductprice').val(response.PROD_PRICE);
          $('#xproductdescription').val(response.PROD_DESCRIPTION);
          $('#xproductidx').val(response.PROD_ID);
          $('#productName').text(response.PROD_NAME);

          $('#editproduct').modal('show');
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    });
  });
</script>