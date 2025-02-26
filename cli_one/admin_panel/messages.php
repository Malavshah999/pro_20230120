<?php
if (session_id() == '') {
    session_start();
}
if (!isset($_SESSION['usr'])) {
    header("Location: index.php");
    die();
}

if (isset($_SESSION['them'])) {
    $them = $_SESSION['them'] . ".php";
    include $them;
}

include 'db.php';

$result = mysqli_query($conn, "select * from `contact`");
$no = 1;
?>

<input type="hidden" id="page_name" value="contact">
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">
                    Messages
                </a>
            </li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Messages
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 13px;">
                        <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Reply</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $subject = $row['subject'];
                            $message = $row['message'];
                            $status = $row['status'];
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $subject; ?></td>
                                <td><?php echo $message; ?></td>
                                <td><a href="message.php?eid=<?php echo $id; ?>" style="color: <?php if($status == 'Replied'){echo 'green';}elseif($status == 'Read'){echo 'orange';}else{echo 'red';} ?>;"><?php echo $status; ?></p></td>
                                <td><a href="mailto:<?php echo $email; ?>" style="color:green;"><i class="fas fa-fw fa-envelope" style="color: green; width: 10; height: 10; align: center;"></i></a></td>
                            </tr>

                            <?php
                            $no++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->


</div>


<?php
include 'footer.php';
?>