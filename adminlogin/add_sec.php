<?php
session_start();
$_SESSION["load"] = "3";
include('header.php');
include("../db_config.php");

?>
<style>
    /* The container */
    .container2 {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container2 input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 22px;
        width: 22px;
        background-color: #FFFFFF;
        border-radius: 5px;
        border: 2px solid #707070;
    }

    /* On mouse-over, add a grey background color */
    .container2:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container2 input:checked~.checkmark {
        background-color: #707070;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container2 input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container2 .checkmark:after {
        left: 7px;
        top: 3px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>

<?php

$sql = "SELECT * FROM classdata Where  pk = '" . $_GET["CusID"] . "' ";
$query = mysqli_query($objCon, $sql);
while ($objResult = mysqli_fetch_array($query)) {
    $data1 = $objResult["data1"];
    $data2 = $objResult["data2"];
} ?>



<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- page content -->
<div class="right_col" role="main" style="background-color: #F5FBFD; ">

    <div class="page-title">
        <div class=" ">
            <div class=" col-lg-12 " style="background-color: #A9C7FF;   margin-top: 20px;  " align="left">
                <font color="#000000" size="4px" class="serif2">
                    <div style="margin-top: 10px;">

                        <b> จัดการ Section รายวิชา &nbsp; <?php echo $data1  . " " . $data2 ?></b>
                    </div>
                </font>
            </div>
        </div>
    </div>

    <div class="clearfix">

    </div>
    <div class="row">
        <div class=" col-lg-12 ">
            <div class="x_panel" style="background-color: #FFFFFF; ">
                <div class="col-lg-12">
                    <div class="col-12">
                        <a style="color:red" href="dataclass.php?CusID=<?php echo $_GET['CusID'] ?>&page=1" class="btn btn-secoundary">
                            < กลับ</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ">
                            <table width="50%" border="1">
                                <?php
                                $sql_sec = "SELECT * FROM classdata_section
                                LEFT JOIN section_type on section_type.section_type_id = classdata_section.section_type_id
                                 where classdata_pk = $_GET[CusID] ";
                                $query_sec = mysqli_query($objCon, $sql_sec);
                                while ($objResult_sec = mysqli_fetch_array($query_sec)) {
                                ?>
                                    <tr></tr>
                                    <td width="25%" align="center">
                                        <font color="black" size="3px" class="serif"> กลุ่มปฎิบัติงาน </font>
                                    </td>
                                    <td width="25%" align="center">
                                        <font color="black" size="3px" class="serif"> โครงการ </font>
                                    </td>
                                    <td width="25%" align="center">

                                        <font color="black" size="3px" class="serif"> ระดับ </font>
                                    </td>
                                    <td width="25%" align="center">
                                        <font color="black" size="3px" class="serif"> จำนวนผู้ช่วยสอน </font>
                                    </td>





                                    <!-- <td rowspan="3" class="text-center"><a href="add_section.php" class="btn btn-outline-secondary ml-2"  >+</a></td> -->

                                    </tr>
                                    <tr>
                                        <td rowspan="2">
                                            <input disabled type="text" name="data14" id="data14" class="form-control " value="<?php echo $objResult_sec['data14']; ?>" placeholder=" กลุ่มที่ " autocomplete="off" style=" border-radius: 0px; ">
                                        </td>
                                        <td rowspan="2">
                                            <select class="form-control" disabled>
                                                <option value="<?php echo $objResult_sec["section_type_id"]; ?>"><?php echo $objResult_sec["section_type_name"]; ?></option>

                                            </select>

                                        </td>
                                        <td>
                                            <font color="black" size="3px" class="serif"> &nbsp; ปริญญาตรี </font>
                                        </td>
                                        <td>
                                            <input disabled type="text" name="data15" id="data15" class="form-control " value="<?php echo $objResult_sec['data15']; ?>" autocomplete="off" style=" border-radius: 0px; ">
                                        </td>
                                        

                                    </tr>
                                    <tr>
                                        <td>
                                            <font color="black" size="3px" class="serif"> &nbsp; ปริญญาโท-เอก </font>
                                        </td>
                                        <td>

                                            <input disabled type="text" name="data16" id="data16" class="form-control " value="<?php echo $objResult_sec['data16'];; ?>" autocomplete="off" style=" border-radius: 0px; ">

                                        </td>


                                    </tr>
                                <?php
                                }

                                ?>
                                <tr>
                                    <td colspan="4" class="text-center" style="color: green;background-color:#707070"> กรอกข้อมูลด้านล่าง </td>
                                </tr>

                                <form action="./add_sec.php" method="post">

                                    <tr>
                                        <td width="25%" align="center">
                                            <font color="black" size="3px" class="serif"> กลุ่มปฎิบัติงาน </font>
                                            <input hidden type="number" value="<?php echo $_GET['CusID'] ?>" name="classdata_pk" id="classdata_pk" class="form-control " autocomplete="off" style=" border-radius: 0px; ">

                                        </td>
                                        <td width="25%" align="center">
                                            <font color="black" size="3px" class="serif"> ระดับ </font>
                                        </td>
                                        <td width="25%" align="center">
                                            <font color="black" size="3px" class="serif"> จำนวนผู้ช่วยสอน </font>
                                        </td>
                                        <td width="25" align="center">
                                            <font color="black" size="3px" class="serif"> โครงการ </font>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td rowspan="2">
                                            <input required min="1" type="number" name="data14s" id="data14s" class="form-control " placeholder=" กลุ่มที่ " autocomplete="off" style=" border-radius: 0px; ">
                                        </td>
                                        <td rowspan="2" width="25%">
                                            <!-- <input required min="1" type="number" name="data14s" id="data14s" class="form-control " placeholder=" กลุ่มที่ " autocomplete="off" style=" border-radius: 0px; "> -->
                                            <select class="form-control" id=" " name="section_type_id" style=" border-radius: 10px;  " required>


                                                <?php

                                                $sql = "SELECT * FROM section_type order by section_type_id asc  ";
                                                $query = mysqli_query($objCon, $sql);
                                                while ($objResult = mysqli_fetch_array($query)) {

                                                ?>
                                                    <option value="<?php echo $objResult["section_type_id"]; ?>"><?php echo $objResult["section_type_name"]; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <font color="black" size="3px" class="serif"> &nbsp; ปริญญาตรี </font>
                                        </td>
                                        <td>
                                            <input required type="number" name="data15s" id="data15s" class="form-control " autocomplete="off" style=" border-radius: 0px; " min="0">
                                        </td>
                                        

                                    </tr>
                                    <tr>

                                        <td>
                                            <font color="black" size="3px" class="serif"> &nbsp; ปริญญาโท-เอก </font>
                                        </td>
                                        <td>

                                            <input required type="number" name="data16s" id="data16s" class="form-control " autocomplete="off" style=" border-radius: 0px; " min="0">

                                        </td>


                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center"><button type="submit" class="btn btn-outline-secondary mx-3 mt-3">+ เพิ่มข้อมูล</button></td>
                                    </tr>
                                </form>


                            </table>

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>



    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $data14 = $_POST['data14s'];
        $data15 = $_POST['data15s'];
        $data16 = $_POST['data16s'];
        $classdata_pk = $_POST['classdata_pk'];
        $section_type = $_POST['section_type_id'];


        $sql_ins = "INSERT INTO `classdata_section` (classdata_pk, data14, data15, data16,section_type_id) VALUES ($classdata_pk , $data14 , $data15 ,$data16,$section_type )";
        // $objQuery = mysqli_query($objCon, $sql_ins);
        if ($objCon->query($sql_ins) === TRUE) {
            echo "<script> location.href='add_sec.php?CusID=" . $classdata_pk . "'; </script>";
        } else {
            echo "Error: " . $sql_ins . "<br>" . $objCon->error;
        }





        // header('Location: add_sec.php?CusID='.$CusID);

    }
    ?>


    <?php
    include('footer2.php');
    ?>