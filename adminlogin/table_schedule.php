<?php
$searchname = $_GET["iddata"];
?>
<style type="text/css">
    div.table-responsive::-webkit-scrollbar,
    div.table-responsive::-webkit-scrollbar {
        width: 10px;
        height: 2px;
    }

    ::-webkit-scrollbar {
        width: 10px;
        height: 7px;
    }

    ::-webkit-scrollbar-button {
        width: 0px;
        height: 0px;
    }

    ::-webkit-scrollbar-thumb {
        background: #CACACA;
        border: 0px none #CACACA;
        border-radius: 50px;
    }

    ::-webkit-scrollbar-thumb:active {
        background: #000000;
    }

    .wrap_schedule_control {
        margin: auto;
        max-width: 1174px;
    }

    .wrap_schedule {
        cursor: grab;
        /* margin:auto; */
        max-width: 1174px;
    }

    .time_schedule {
        font-size: 12px;
    }

    .day_schedule {
        font-size: 12px;
    }



    .day_schedule_text {
        width: 80px;
        font-size: 12px;
        padding: 10px 5px;
    }

    .day-head-label {
        position: relative;
        right: 10px;
        top: 0;
    }

    .time-head-label {
        position: relative;
        left: 10px;
        bottom: 0;
    }

    .diagonal-cross {
        border-bottom: 2px solid #dee2e6;
        /* -webkit-transform: translateY(20px) translateX(5px) rotate(26deg); */
        position: relative;
        top: -20px;
        left: 0;
        transform: translateY(20px) translateX(0px) rotate(20deg);
    }

    .sc-detail {
        font-size: 11px;
        background-color: #A9C7FF;
        color: #FFFFFF;
    }

    .sc-detail a {
        color: #1d2124;
        font-size: 14px;
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #dee2e6;
    }

    .table td,
    .table th {
        padding: 0.75rem;
        vertical-align: top;
    }

    .bg-light {
        background-color: #f8f9fa !important;
        border-top: 1px solid #dee2e6;
    }

    .table .thead-light th {
        color: #495057;
        background-color: #A8DADC;
        border-color: #dee2e6;
    }
</style>

<?php
// ส่วนของตัวแปรสำหรับกำหนด
$dayTH = array("วันจันทร์", "วันอังคาร", "วันพุธ", "วันพฤหัสบดี", "วันศุกร์", "วันเสาร์", "วันอาทิตย์");
$monthTH = array(
    "", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
    "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
);
$monthTH_brev = array(
    "", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."
);
function thai_date_short($time)
{   // 19  ธ.ค. 2556
    global $dayTH, $monthTH_brev;
    $thai_date_return = date("j", $time);
    $thai_date_return .= " " . $monthTH_brev[date("n", $time)];
    $thai_date_return .= " " . (date("Y", $time) + 543);
    return $thai_date_return;
}


////////////////////// ส่วนของการจัดการตารางเวลา /////////////////////
$sc_startTime = date("Y-m-d 08:00:00");  // กำหนดเวลาเริ่มต้ม เปลี่ยนเฉพาะเลขเวลา
$sc_endtTime = date("Y-m-d 20:00:00");  // กำหนดเวลาสื้นสุด เปลี่ยนเฉพาะเลขเวลา
$sc_t_startTime = strtotime($sc_startTime);
$sc_t_endTime = strtotime($sc_endtTime);
$sc_numStep = "60"; // ช่วงช่องว่างเวลา หน่ายนาที 60 นาที = 1 ชั่วโมง
$num_dayShow = 7;  // จำนวนวันที่โชว์ 1 - 7
$sc_timeStep = array();
$sc_numCol = 0;
$hour_block_width = 90;
////////////////////// ส่วนของการจัดการตารางเวลา /////////////////////


// ส่วนของการกำหนดวัน สามารถนำไปประยุกต์กรณีทำตารางเวลาแบบ เลื่อนดูแต่ละสัปดาห์ได้
$now_day = date("Y-m-d"); // วันปัจจุบัน ให้แสดงตารางที่มีวันปัจจุบัน เมื่อแสดงครั้งแรก
if (isset($_GET['uts']) && $_GET['uts'] != "") { // เมื่อมีการเปลี่ยนสัปดาห์
    $now_day = date("Y-m-d", trim($_GET['uts'])); // เปลี่ยนวันที่ แปลงจากค่าวันจันทร์ที่ส่งมา
    $now_day = date("Y-m-d", strtotime($now_day . " monday this week"));
}
// หาตัวบวก หรือลบ เพื่อหาวันที่ของวันจันทร์ในสัปดาห์
$start_weekDay = date("Y-m-d", strtotime("monday this week")); // หาวันจันทร์ของสัปดาห์
if (isset($_GET['uts']) && $_GET['uts'] != "") { // ถ้ามีส่งค่าเปลี่ยนสัปดาห์มา
    $start_weekDay = $now_day; // ให้ใช้วันแรก เป็นวันที่ส่งมา
}
// หววันที่วันอาทิตย์ของสัปดาห์นั้นๆ
$end_weekDay = date("Y-m-d", strtotime($start_weekDay . " +7 day"));
$timestamp_prev = strtotime($start_weekDay . " -7 day"); // ค่าวันจันทร์ของอาทิตย์ก่อหน้า
$timestamp_next = strtotime($start_weekDay . " +7 day"); // ค่าวันจันทร์ของอาทิตย์ถัดไป
while ($sc_t_startTime <= $sc_t_endTime) {
    $sc_timeStep[$sc_numCol] = date("H:i", $sc_t_startTime);
    $sc_t_startTime = $sc_t_startTime + ($sc_numStep * 60);
    $sc_numCol++;    // ได้จำนวนคอลัมน์ที่จะแสดง
}

function getduration($datetime1, $datetime2)
{
    $datetime1 = (preg_match('/-/', $datetime1)) ? (int)strtotime($datetime1) : (int)$datetime1;
    $datetime2 = (preg_match('/-/', $datetime2)) ? (int)strtotime($datetime2) : (int)$datetime2;
    $duration = ($datetime2 >= $datetime1) ? $datetime2 - $datetime1 : $datetime1 - $datetime2;
    return $duration;
}
function timeblock($time, $sc_numCol, $sc_timeStep)
{
    global $sc_numStep;
    $time = (preg_match('/:/', $time)) ? (int)strtotime($time) : (int)$time;
    for ($i_time = 0; $i_time < $sc_numCol - 1; $i_time++) {
        if ($time >= strtotime($sc_timeStep[$i_time]) && $time < strtotime($sc_timeStep[$i_time + 1])) {
            if ($time > strtotime($sc_timeStep[$i_time])) {
                $duation = getduration($time, strtotime($sc_timeStep[$i_time]));
                $float_duration = ((($duation / 60) * 100) / $sc_numStep) * 0.01;
                return $i_time + $float_duration;
            } else {
                return $i_time;
            }
        }
    }
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php

$data_schedule = array();
if (isset($_GET['sec'])) {
    echo 'ค้นหากลุ่มการเรียน : '. $_GET['sec'];
    $sec = "and dc.data6 = '$_GET[sec]'";
    echo "<script type='text/javascript'>
    $(window).load(function() {
        $('html, body').animate({
          scrollTop: $('#cuar_reply_0').offset().top
        }, 1000);
      });
      </script>";
} else {
    echo 'ค้นหากลุ่มการเรียน : ทั้งหมด';
    $sec = '';
}
///////////////// ตัวอย่างรูปแบบข้อมูล //////////////////

$demo_year_month = date("Y-m");
for ($i_day = 0; $i_day < $num_dayShow; $i_day++) {
    $dayInSchedule_chk = date("Y-m-d", strtotime($start_weekDay . " +" . $i_day . " day"));
    $dayKeyChk = date("D", strtotime($start_weekDay . " +" . $i_day . " day"));
    //    $dayInSchedule_show=date("d-m-Y",strtotime($start_weekDay." +".$i_day." day"));
    $dayInSchedule_show = thai_date_short(strtotime($start_weekDay . " +" . $i_day . " day"));
    $day_id = $i_day + 1;

    if ($i_day == 0) {
        $sql = "SELECT dc.iddata,dc.pk,dd.pk as day_id ,dd.name as day_name ,dts.name as time_start,dte.name as end_time,
		dc.data4, dc.data5 , dc.data6 
			FROM data_class as dc
			left join dropday as dd ON dd.pk = dc.data1
			left join droptime as dts ON dts.pk = dc.data2 
			left join droptime as dte ON dte.pk = dc.data3 
			where  dd.pk = '$day_id' $sec and dc.iddata = '" . $_SESSION["showclassdata"] . "' order by pk desc ";
        $query = mysqli_query($con, $sql);
        while ($objResult = mysqli_fetch_array($query)) {
            $time_start = str_replace(".", ":", $objResult["time_start"]);
            $end_time = str_replace(".", ":", $objResult["end_time"]);
            $showdata4 = $objResult["data4"];
            $showdata5 = $objResult["data5"];
            $showdata6 = $objResult["data6"];


            $data_schedule[] = array(
                "id" => 1,
                "start_date" => "{$dayInSchedule_chk}", // รุปแบบ 0000-00-00
                "end_date" => "{$dayInSchedule_chk}",
                "start_time" => $time_start,
                "end_time" => $end_time,
                "repeat_day" => array(1, 2, 3, 4, 5, 6, 7),
                "data4" => $showdata4,
                "data5" => $showdata5,
                "data6" => $showdata6,
                "title" => $time_start . "-" . $end_time
            );
        }
    } elseif ($i_day == 1) {
        $sql = "SELECT dc.iddata,dc.pk,dd.pk as day_id ,dd.name as day_name ,dts.name as time_start,dte.name as end_time,
		dc.data4, dc.data5, dc.data6   FROM data_class as dc
        left join dropday as dd ON dd.pk = dc.data1
        left join droptime as dts ON dts.pk = dc.data2 
        left join droptime as dte ON dte.pk = dc.data3 
        where  dd.pk = '$day_id' $sec and dc.iddata = '" . $_SESSION["showclassdata"] . "'  order by pk desc ";
        $query = mysqli_query($con, $sql);
        while ($objResult = mysqli_fetch_array($query)) {
            $time_start = str_replace(".", ":", $objResult["time_start"]);
            $end_time = str_replace(".", ":", $objResult["end_time"]);
            $showdata4 = $objResult["data4"];
            $showdata5 = $objResult["data5"];
            $showdata6 = $objResult["data6"];

            $data_schedule[] = array(
                "id" => 1,
                "start_date" => "{$dayInSchedule_chk}", // รุปแบบ 0000-00-00
                "end_date" => "{$dayInSchedule_chk}",
                "start_time" => $time_start,
                "end_time" => $end_time,
                "repeat_day" => array(1, 2, 3, 4, 5, 6, 7),
                "data4" => $showdata4,
                "data5" => $showdata5,
                "data6" => $showdata6,
                "title" => $time_start . "-" . $end_time
            );
        }
    } elseif ($i_day == 2) {
        $sql = "SELECT dc.iddata,dc.pk,dd.pk as day_id ,dd.name as day_name ,dts.name as time_start,dte.name as end_time,
		dc.data4, dc.data5, dc.data6   FROM data_class as dc
        left join dropday as dd ON dd.pk = dc.data1
        left join droptime as dts ON dts.pk = dc.data2 
        left join droptime as dte ON dte.pk = dc.data3 
        where  dd.pk = '$day_id' $sec and dc.iddata = '" . $_SESSION["showclassdata"] . "' order by pk desc ";
        $query = mysqli_query($con, $sql);
        while ($objResult = mysqli_fetch_array($query)) {
            $time_start = str_replace(".", ":", $objResult["time_start"]);
            $end_time = str_replace(".", ":", $objResult["end_time"]);
            $showdata4 = $objResult["data4"];
            $showdata5 = $objResult["data5"];
            $showdata6 = $objResult["data6"];

            $data_schedule[] = array(
                "id" => 1,
                "start_date" => "{$dayInSchedule_chk}", // รุปแบบ 0000-00-00
                "end_date" => "{$dayInSchedule_chk}",
                "start_time" => $time_start,
                "end_time" => $end_time,
                "repeat_day" => array(1, 2, 3, 4, 5, 6, 7),
                "data4" => $showdata4,
                "data5" => $showdata5,
                "data6" => $showdata6,
                "title" => $time_start . "-" . $end_time
            );
        }
    } elseif ($i_day == 3) {
        $sql = "SELECT dc.iddata,dc.pk,dd.pk as day_id ,dd.name as day_name ,dts.name as time_start,dte.name as end_time,
		dc.data4, dc.data5, dc.data6   FROM data_class as dc
        left join dropday as dd ON dd.pk = dc.data1
        left join droptime as dts ON dts.pk = dc.data2 
        left join droptime as dte ON dte.pk = dc.data3 
        where  dd.pk = '$day_id' $sec and dc.iddata = '" . $_SESSION["showclassdata"] . "' order by pk desc ";
        $query = mysqli_query($con, $sql);
        while ($objResult = mysqli_fetch_array($query)) {
            $time_start = str_replace(".", ":", $objResult["time_start"]);
            $end_time = str_replace(".", ":", $objResult["end_time"]);
            $showdata4 = $objResult["data4"];
            $showdata5 = $objResult["data5"];
            $showdata6 = $objResult["data6"];

            $data_schedule[] = array(
                "id" => 1,
                "start_date" => "{$dayInSchedule_chk}", // รุปแบบ 0000-00-00
                "end_date" => "{$dayInSchedule_chk}",
                "start_time" => $time_start,
                "end_time" => $end_time,
                "repeat_day" => array(1, 2, 3, 4, 5, 6, 7),
                "data4" => $showdata4,
                "data5" => $showdata5,
                "data6" => $showdata6,
                "title" => $time_start . "-" . $end_time
            );
        }
    } elseif ($i_day == 4) {
        $sql = "SELECT dc.iddata,dc.pk,dd.pk as day_id ,dd.name as day_name ,dts.name as time_start,dte.name as end_time,
		dc.data4, dc.data5, dc.data6   FROM data_class as dc
        left join dropday as dd ON dd.pk = dc.data1
        left join droptime as dts ON dts.pk = dc.data2 
        left join droptime as dte ON dte.pk = dc.data3 
        where  dd.pk = '$day_id' $sec and dc.iddata = '" . $_SESSION["showclassdata"] . "' order by pk desc ";
        $query = mysqli_query($con, $sql);
        while ($objResult = mysqli_fetch_array($query)) {
            $time_start = str_replace(".", ":", $objResult["time_start"]);
            $end_time = str_replace(".", ":", $objResult["end_time"]);
            $showdata4 = $objResult["data4"];
            $showdata5 = $objResult["data5"];
            $showdata6 = $objResult["data6"];

            $data_schedule[] = array(
                "id" => 1,
                "start_date" => "{$dayInSchedule_chk}", // รุปแบบ 0000-00-00
                "end_date" => "{$dayInSchedule_chk}",
                "start_time" => $time_start,
                "end_time" => $end_time,
                "repeat_day" => array(1, 2, 3, 4, 5, 6, 7),
                "data4" => $showdata4,
                "data5" => $showdata5,
                "data6" => $showdata6,
                "title" => $time_start . "-" . $end_time
            );
        }
    } elseif ($i_day == 5) {
        $sql = "SELECT dc.iddata,dc.pk,dd.pk as day_id ,dd.name as day_name ,dts.name as time_start,dte.name as end_time,
		dc.data4, dc.data5, dc.data6   FROM data_class as dc
        left join dropday as dd ON dd.pk = dc.data1
        left join droptime as dts ON dts.pk = dc.data2 
        left join droptime as dte ON dte.pk = dc.data3 
        where  dd.pk = '$day_id' $sec and dc.iddata = '" . $_SESSION["showclassdata"] . "' order by pk desc ";
        $query = mysqli_query($con, $sql);
        while ($objResult = mysqli_fetch_array($query)) {
            $time_start = str_replace(".", ":", $objResult["time_start"]);
            $end_time = str_replace(".", ":", $objResult["end_time"]);
            $showdata4 = $objResult["data4"];
            $showdata5 = $objResult["data5"];
            $showdata6 = $objResult["data6"];

            $data_schedule[] = array(
                "id" => 1,
                "start_date" => "{$dayInSchedule_chk}", // รุปแบบ 0000-00-00
                "end_date" => "{$dayInSchedule_chk}",
                "start_time" => $time_start,
                "end_time" => $end_time,
                "repeat_day" => array(1, 2, 3, 4, 5, 6, 7),
                "data4" => $showdata4,
                "data5" => $showdata5,
                "data6" => $showdata6,
                "title" => $time_start . "-" . $end_time
            );
        }
    } elseif ($i_day == 6) {
        $sql = "SELECT dc.iddata,dc.pk,dd.pk as day_id ,dd.name as day_name ,dts.name as time_start,dte.name as end_time,
		dc.data4, dc.data5, dc.data6  
		FROM data_class as dc
        left join dropday as dd ON dd.pk = dc.data1
        left join droptime as dts ON dts.pk = dc.data2 
        left join droptime as dte ON dte.pk = dc.data3 
        where  dd.pk = '$day_id' $sec and dc.iddata = '" . $_SESSION["showclassdata"] . "' order by pk desc ";
        $query = mysqli_query($con, $sql);
        while ($objResult = mysqli_fetch_array($query)) {
            $time_start = str_replace(".", ":", $objResult["time_start"]);
            $end_time = str_replace(".", ":", $objResult["end_time"]);
            $showdata4 = $objResult["data4"];
            $showdata5 = $objResult["data5"];
            $showdata6 = $objResult["data6"];

            $data_schedule[] = array(
                "id" => 1,
                "start_date" => "{$dayInSchedule_chk}", // รุปแบบ 0000-00-00
                "end_date" => "{$dayInSchedule_chk}",
                "start_time" => $time_start,
                "end_time" => $end_time,
                "repeat_day" => array(1, 2, 3, 4, 5, 6, 7),
                "data4" => $showdata4,
                "data5" => $showdata5,
                "data6" => $showdata6,
                "title" => $time_start . "-" . $end_time
            );
        }
    }
}
///////////////// ตัวอย่างรูปแบบข้อมูล //////////////////
?>


<?php
////////////////////// ส่วนของการจัดรูปแบบข้อมูลก่อนแสดงในตารางเวลา  ///////////////////////
$data_day_schedule = [];
$checkDayKey = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
if (isset($data_schedule) && count($data_schedule) > 0) {
    foreach ($data_schedule as $row) {
        if ((strtotime($row['start_date']) >= strtotime($start_weekDay) && strtotime($row['start_date']) < strtotime($end_weekDay))
            || (strtotime($start_weekDay) > strtotime($row['start_date']) && strtotime($row['end_date']) < strtotime($end_weekDay)
                && strtotime($row['end_date']) >= strtotime($start_weekDay))
            || (strtotime($start_weekDay) > strtotime($row['start_date']) && strtotime($end_weekDay) < strtotime($row['end_date'])
                && strtotime($row['end_date']) >= strtotime($start_weekDay))
        ) {
            if (isset($row['repeat_day']) && count($row['repeat_day']) > 0) { // have day repeat
                for ($i = 0; $i < $num_dayShow; $i++) {
                    if (strtotime($start_weekDay . " +{$i} day") >= strtotime($row['start_date']) && strtotime($start_weekDay . " +{$i} day") <= strtotime($row['end_date'])) {
                        $dayKey = date("D", strtotime($start_weekDay . " +{$i} day"));
                        if (in_array($i + 1, $row['repeat_day'])) {
                            $data_day_schedule[$dayKey][] = [
                                "start_time" => $row['start_time'],
                                "end_time" => $row['end_time'],
                                "duration" => getduration(strtotime($row['start_time']), strtotime($row['end_time'])),
                                "timeblock" => timeblock($row['start_time'], $sc_numCol, $sc_timeStep),
                                "title" => $_SESSION["showclasscode"] . "  <Br> (" . $_SESSION["showclasscode2"] . ")  " . $row["data6"] . "," . $row["data5"] . " <br> " . $row["data4"] . "   "
                                // "title" => $row['title']. " <Br> (3) 15 WBA <br> (ห้อง.)   " 
                            ];
                        }
                    }
                }
            } else { // else repeat all day
                for ($i = 0; $i < $num_dayShow; $i++) {
                    if (strtotime($start_weekDay . " +{$i} day") >= strtotime($row['start_date']) && strtotime($start_weekDay . " +{$i} day") <= strtotime($row['end_date'])) {
                        $dayKey = date("D", strtotime($start_weekDay . " +{$i} day"));
                        $data_day_schedule[$dayKey][] = [
                            "start_time" => $row['start_time'],
                            "end_time" => $row['end_time'],
                            "duration" => getduration(strtotime($row['start_time']), strtotime($row['end_time'])),
                            "timeblock" => timeblock($row['start_time'], $sc_numCol, $sc_timeStep),
                            "title" => $_SESSION["showclasscode"] . "  <Br> (" . $_SESSION["showclasscode2"] . ")  " . $row["data6"] . "," . $row["data5"] . " <br> " . $row["data4"] . "   "
                        ];
                    }
                }
            }
        }
    }
}
////////////////////// ส่วนของการจัดรูปแบบข้อมูลก่อนแสดงในตารางเวลา  ///////////////////////
?>

<div class="table-responsive wrap_schedule">
    <table class="table  table-bordered">
        <thead class="thead-light">
            <tr class="time_schedule">
                <th class="p-0">
                    <div class="day-head-label text-right">
                        เวลา
                    </div>
                    <div class="diagonal-cross"></div>
                    <div class="time-head-label text-left">
                        วัน
                    </div>
                </th>
                <?php
                for ($i_time = 0; $i_time < $sc_numCol - 1; $i_time++) {
                ?>
                    <th class="px-0 text-nowrap th-time">
                        <div class="time_schedule_text text-center" style="width: <?= $hour_block_width ?>px;">
                            <?= $sc_timeStep[$i_time] ?> - <?= $sc_timeStep[$i_time + 1] ?>
                        </div>
                    </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // วนลูปแสดงจำนวนวันตามที่กำหนด
            for ($i_day = 0; $i_day < $num_dayShow; $i_day++) {
                $dayInSchedule_chk = date("Y-m-d", strtotime($start_weekDay . " +" . $i_day . " day"));
                $dayKeyChk = date("D", strtotime($start_weekDay . " +" . $i_day . " day"));
                //    $dayInSchedule_show=date("d-m-Y",strtotime($start_weekDay." +".$i_day." day"));
                $dayInSchedule_show = thai_date_short(strtotime($start_weekDay . " +" . $i_day . " day"));
            ?>
                <tr>
                    <td class="p-0 text-center table-active">
                        <div class="day_schedule_text text-nowrap" style="min-height: 80px;padding-top: 20px;">

                            <?= $dayTH[$i_day] ?>
                            <br>
                        </div>
                    </td>
                    <td class="p-0 position-relative" colspan="10">
                        <div class="position-absolute">
                            <div class="d-flex align-content-stretch" style="min-height: 80px;">
                                <?php for ($i = 1; $i < $sc_numCol; $i++) { ?>
                                    <div class="bg-light text-center border-right" style="width: <?= $hour_block_width ?>px;margin-left: 1px;">
                                        &nbsp;
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="position-absolute" style="z-index: 100;">
                            <?php
                            if (isset($data_day_schedule[$dayKeyChk]) && count($data_day_schedule[$dayKeyChk]) > 0) {
                                foreach ($data_day_schedule[$dayKeyChk] as $row_day) {
                                    $sc_width = ($row_day['duration'] / 60) * ($hour_block_width / $sc_numStep) + 1;
                                    $sc_start_x = $row_day['timeblock'] * $hour_block_width + (int)$row_day['timeblock'];
                            ?>
                                    <div class="position-absolute text-center sc-detail" style="
        width: <?= $sc_width ?>px;;
        margin-left: <?= $sc_start_x ?>px;
        min-height: 80px;
        padding-top: 10px;
        font-weight: bold;">
                                        <a href="#"><?= $row_day['title'] ?></a><br>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#select_date').datetimepicker({
            useCurrent: false,
            locale: 'th',
            format: 'YYYY-MM-DD'
        });
        $('#select_date').on('change.datetimepicker', function(e) {
            window.location = 'demo_schedule.php?uts=' + e.date.format("X");
        });

    });
</script>
</body>

</html>