<?php
include "connection.php";
include('header.php');
include('navbar.php');
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username </th>
                            <th>Usertype </th>
                            <th>Email </th>
                            <th>Address </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM useraccount";
                        $statement = oci_parse($conn, $sql);
                        oci_execute($statement);
                        while ($row = oci_fetch_assoc($statement)) {
                            echo "<tr>
                                <td>{$row['USERNAME']}</td>
                                <td>";

                            if ($row['USERTYPE'] == 1) {
                                echo 'Admin';
                            } elseif ($row['USERTYPE'] == 2) {
                                echo 'Customer';
                            } else {
                                echo 'Unknown';
                            }

                            echo "</td>
                                <td>{$row['EMAIL']}</td>
                                <td>{$row['ADDRESS']}</td>
                                </tr>";
                        } ?>
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