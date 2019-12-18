<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<style type="text/css">
<!--
.gd {font-family: system}
.style13 {
	color: #FFFFFF;
	font-family: system;
}
.gdd {font-family: system; color: #6D9A00; }
body,td,th {
	font-family: ms Sans Serif;
	font-size: 12px;
	color: #000000;
}
.style15 {font-size: 12px; color: #000000; font-family: tahoma; }
.assss {color: #FFFFFF}
.style16 {
	color: #FF0000;
	font-size: 10;
	font-weight: bold;
}
-->
</style>
<style type="text/css">
<!-- 
#b1 {
color:#000000;background-color:#FFFFFF;
} 
-->
</style>
<?PHP
		// จัดทำโดยสุรชาติ บัวชุม
		// สุ่มจำนวน cluster
		$n=rand(2, 5);
		
		// สุ่ม data set
		$d1=rand(1, 99);
		$d2=rand(1, 99);
		$d3=rand(1, 99);
		$d4=rand(1, 99);
		$d5=rand(1, 99);
		$d6=rand(1, 99);
		$d7=rand(1, 99);
		$d8=rand(1, 99);
		$d9=rand(1, 99);
		$d10=rand(1, 99);
		$d11=rand(1, 99);
		$d12=rand(1, 99);
		$d13=rand(1, 99);
		$d14=rand(1, 99);
		$d15=rand(1, 99);
		$d16=rand(1, 99);
		$d17=rand(1, 99);
		$d18=rand(1, 99);
		$d19=rand(1, 99);
		$d20=rand(1, 99);
?>
<title>K-Means Clustering</title>

<body bgcolor="#FFFFCC"><form name="form1" method="post" action="">
  <table width=100% bgcolor="#999999" border=1 cellspacing=0>
    <tr align="center" valign="middle" bgcolor="#66CC33"> 
      <td height="31" colspan="11"><strong><font size="3">K-Means Clustering</font></strong></td>
    </tr>
    <tr align="center" valign="middle"> 
      <td colspan="10" bgcolor="#BBBBFF"> ชุดข้อมูลทดสอบจำนวน 20 ข้อมูล (สุ่มค่าระหว่าง 
        1-99)</td>
      <td bgcolor="#8888BB">จำนวน Cluster (สุ่ม 
          2-5 Clusters)</td>
    </tr>
    <tr align="center" valign="middle"> 
      <td  bgcolor="#BBBBFF"> 
          <input name="d1" type="text" id="b1"   value="<?PHP echo $d1; ?>" size="4" maxlength="4" readonly="readonly">
        </td>
      <td  bgcolor="#BBBBFF"> 
          <input name="d2" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d2; ?>">
        </td>
      <td  bgcolor="#BBBBFF"> 
          <input name="d3" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d3; ?>">
        </td>
      <td  bgcolor="#BBBBFF"> 
          <input name="d4" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d4; ?>">
        </td>
      <td  bgcolor="#BBBBFF"> 
          <input name="d5" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d5; ?>">
        </td>
      <td  bgcolor="#BBBBFF"> 
          <input name="d6" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d6; ?>">
        </td>
      <td  bgcolor="#BBBBFF"> 
          <input name="d7" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d7; ?>">
        </td>
      <td  bgcolor="#BBBBFF"> 
          <input name="d8" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d8; ?>">
        </td>
      <td  bgcolor="#BBBBFF"> 
          <input name="d9" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d9; ?>">
        </td>
      <td  bgcolor="#BBBBFF"> 
          <input name="d10" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d10; ?>">
        </td>
      <td bgcolor="#8888BB">  
          <input name="n" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $n; ?>">
          clusters </td>
    </tr>
    <tr align="center" valign="middle"> 
      <td bgcolor="#BBBBFF"> 
          <input name="d11" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d11; ?>">
        </td>
      <td bgcolor="#BBBBFF"> 
          <input name="d12" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d12; ?>">
        </td>
      <td bgcolor="#BBBBFF"> 
          <input name="d13" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d13; ?>">
        </td>
      <td bgcolor="#BBBBFF"> 
          <input name="d14" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d14; ?>">
        </td>
      <td bgcolor="#BBBBFF"> 
          <input name="d15" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d15; ?>">
        </td>
      <td bgcolor="#BBBBFF"> 
          <input name="d16" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d16; ?>">
        </td>
      <td bgcolor="#BBBBFF"> 
          <input name="d17" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d17; ?>">
        </td>
      <td bgcolor="#BBBBFF"> 
          <input name="d18" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d18; ?>">
        </td>
      <td bgcolor="#BBBBFF"> 
          <input name="d19" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d19; ?>">
        </td>
      <td bgcolor="#BBBBFF"> 
          <input name="d20" type="text" id="b1" size="4" maxlength="4" disabled   value="<?PHP echo $d20; ?>">
        </td>
      <td bgcolor="#8888BB"> 
          <input type="submit" name="Submit" value=" คลิกเพื่อสุ่มเลือกข้อมูลใหม่ ">
        </td>
    </tr>
  </table>
</form>
ผลลัพธ์ : 
<?PHP
// นำข้อมูลที่ได้จากการสุ่มข้อมูลทดสอบ จัดเก็บในรูปแบบ Array
$data=array($d1, $d2, $d3, $d4,$d5, $d6, $d7, $d8, $d9, $d10, $d11, $d12, $d13, $d14, $d15, $d16, $d17, $d18, $d19, $d20);
$result=(kmeans($data,$n)); // เก็บผลลัพธ์ไว้
print_nice($result); //นำผลลัพธ์ไปแสดง
echo "จัดทำโดย สุรชาติ  บัวชุม (2010) , PHP K-means function by Jose Fonseca (2009) จาก http://code.blip.pt ";


//นำข้อมูลผลลัพธ์แบบ Array ที่ได้ไปแสดงผลแบบมีตารางและมีสี
//นำฟังก์ชั่นมาจาก php.net มาปรับใช้
function print_nice($elem,$max_level=10,$chk=1,$print_nice_stack=array()){ 
    if(is_array($elem) || is_object($elem)){ 
        $max_level--; 
        echo "<table border='1' cellspacing='0' cellpadding='3' width='100%'>"; 
        if(is_array($elem)){ 
			if($chk==1){
            		echo "<tr><td colspan='2' style='background-color:#333333;'><strong><font color='white'>Cluster</font></strong></td></tr>"; 
			}else{
					echo "<tr><td colspan='2' style='background-color:#333333;'><strong><font color='white'>สมาชิก:</font></strong></td></tr>"; 
			}
        }else{ 
            echo "<tr><td colspan='2' style='background-color:#333333;'><strong>"; 
            echo "<font color='white'>OBJECT Type: ".get_class($elem)."</font></strong></td></tr>"; 
        } 
        $color=0; 
        foreach($elem as $k => $v){ 
            if($max_level%2){ 
                $rgb=($color++%2)?'#888888':'#BBBBBB'; 
            }else{ 
                $rgb=($color++%2)?'#8888BB':'#BBBBFF'; 
            } 
            echo "<tr><td valign='top' style='width:40px;background-color:".$rgb.";'".">"; 
			$kk=$k+1;
            echo "<strong>".$kk."</strong></td><td>"; 
            print_nice($v,$max_level,$print_nice_stack); 
            echo "</td></tr>"; 
        } 
        echo "</table>"; 
        return $chk++; 
    } 
    if($elem === null){ 
        echo "<font color='green'>NULL</font>"; 
    }elseif($elem === 0){ 
        echo "0"; 
    }elseif($elem === true){ 
        echo "<font color='green'>TRUE</font>"; 
    }elseif($elem === false){ 
        echo "<font color='green'>FALSE</font>"; 
    }elseif($elem === ""){ 
        echo "<font color='green'>EMPTY STRING</font>"; 
    }else{ 
        echo str_replace("\n","<strong><font color=red>*</font></strong><br>\n",$elem); 
    } 
} 

// #### นำฟังก์ชั่นฟรี มาจาก http://code.blip.pt ####
// ใช้ฟังชั่นต้นแบบเขียนโดย  Jose Fonseca (josefonseca@blip.pt)  
function kmeans($data, $k)
{
        $cPositions = assign_initial_positions($data, $k);
        $clusters = array();
 
        while(true)
        {
                $changes = kmeans_clustering($data, $cPositions, $clusters);
                if(!$changes)
                {
                        return kmeans_get_cluster_values($clusters, $data);
                }
                $cPositions = kmeans_recalculate_cpositions($cPositions, $data, $clusters);
        }
}

//ทำการ Cluster
function kmeans_clustering($data, $cPositions, &$clusters)
{
        $nChanges = 0;
        foreach($data as $dataKey => $value)
        {
                $minDistance = null;
                $cluster = null;
                foreach($cPositions as $k => $position)
                {
                        $distance = distance($value, $position);
                        if(is_null($minDistance) || $minDistance > $distance)
                        {
                                $minDistance = $distance;
                                $cluster = $k;
                        }
                }
                if(!isset($clusters[$dataKey]) || $clusters[$dataKey] != $cluster)
                {
                        $nChanges++;
                }
                $clusters[$dataKey] = $cluster;
        }
        return $nChanges;
}
 
 //คำนวณตำแหน่งใหม่
function kmeans_recalculate_cpositions($cPositions, $data, $clusters)
{
        $kValues = kmeans_get_cluster_values($clusters, $data);
        foreach($cPositions as $k => $position)
        {
                $cPositions[$k] = empty($kValues[$k]) ? 0 : kmeans_avg($kValues[$k]);
        }
        return $cPositions;
}

 // อ่านค่าแต่ละตัว
function kmeans_get_cluster_values($clusters, $data)
{
        $values = array();
        foreach($clusters as $dataKey => $cluster)
        {
                $values[$cluster][] = $data[$dataKey];
        }
        return $values;
}
 
 //คำนวนค่าเฉลี่ยของสมาชิก
function kmeans_avg($values)
{
        $n = count($values);
        $sum = array_sum($values);
        return ($n == 0) ? 0 : $sum / $n;
}
 

// คำนวนค่า ระยะห่างระหว่าง 2 ค่า  คืนค่า 0 เมื่อมีค่าเท่ากัน
function distance($v1, $v2)
{
  return abs($v1-$v2);
}
 
// กำหนดค่าตำแหน่งเริ่มต้นของแต่ละ Clusters
function assign_initial_positions($data, $k)
{
        $min = min($data);
        $max = max($data);
        $int = ceil(abs($max - $min) / $k);
        while($k-- > 0)
        {
                $cPositions[$k] = $min + $int * $k;
        }
        return $cPositions;
}
?>
