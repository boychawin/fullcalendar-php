<?php
include 'conn.php'; // เรียกใช้งานไฟล์เชื่อมต่อกับฐานข้อมูล
include './thai_date.php';
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปฏิทินผู้มาใช้บริการ | boychawin.com </title>
    <?php include './head.php'; ?>
</head>

<body>

    <?php

    $sql = "SELECT * FROM tb_booking WHERE id ='" . $_GET['id'] . "'  ";
    $result = $mysqli->query($sql);
    $rs = $result->fetch_object();

    if ($rs->action == 'accept') {
        $status =
            "<button class='btn btn-success btn-sm'>" .
            "<i class='fa fa-check pr-2'></i> อนุมัติ </button>";
    } elseif ($rs->action == 'reject') {
        $status =
            "<button class='btn btn-danger btn-sm'>" .
            "<i class='fa fa-remove pr-2'></i> ไม่อนุมัติ</button>";
    } else {
        $status =
            "<button class='btn btn-warning btn-sm'>" .
            "<i class='fa fa-refresh pr-2'></i>  รออนุมัติ</button>";
    }

    if ($rs->status == 'accept') {
        $status2 =
            "<button class='btn btn-success btn-sm'>" .
            "<i class='fa fa-check pr-2'></i> เข้าใช้งานแล้ว </button>";
    } elseif ($rs->status == 'reject') {
        $status2 =
            "<button class='btn btn-danger btn-sm'>" .
            "<i class='fa fa-remove pr-2'></i> อนุมัติ / ยกเลิก</button>";
    } elseif ($rs->status == 'Suspend') {
        $status2 =
            "<div class='btn btn-danger btn-sm'>" .
            "<i class='fa fa-remove pr-2'></i> อนุมัติ / ยกเลิก</div>";
    } else {
        $status2 =
            "<button class='btn btn-primary btn-sm'>" .
            "<i class='fa fa-refresh pr-2'></i>  อนุมัติ / รอใช้</button>";
    }
    ?>


    <div id="wrapper">

        <div class="row">

            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        รายละเอียดการขอใช้บริการ
                    </div>
                    <div class="panel-body">
                        <button class="btn btn-default btn-sm "> ผู้ขอใช้ </button>
                        <div class="alert alert-success">
                            <?php echo $rs->staff_name; ?>
                        </div>
                        <button class="btn btn-default btn-sm"> วัน-เวลาใช้ห้อง </button>
                        <div class="alert alert-info">
                            เริ่ม <?php echo thai(
                                        $rs->booking_start_date
                                    ); ?> - <?php echo thai($rs->booking_end_date); ?>
                        </div>

                        <button class="btn btn-default btn-sm"> จุดประสงค์การเข้าใช้งาน </button>
                        <div class="alert alert-info">
                            <?php echo $rs->purpose; ?>
                        </div>
                        <button class="btn btn-default btn-sm"> ห้อง/โต๊ะ </button>
                        <div class="alert alert-success">
                            <?php echo $rs->booking_type; ?>
                        </div>

                        <button class="btn btn-default btn-sm"> สถานะ </button>
                        <!--                            
                                <?php
                                echo $status;
                                echo '&nbsp;';
                                echo $status2;
                                ?>  -->

                        <?php if ($rs->action == 'accept') {
                            echo $status2;
                        } else {
                            echo $status;
                        } ?>
                    </div><!-- .panel-body -->

                </div> <!-- panel panel-default -->
            </div> <!-- col-lg-8 -->


        </div><!-- row -->
    </div>
</body>

</html>