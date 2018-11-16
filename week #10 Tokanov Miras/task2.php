<?php
if(isset($_POST['button'])){
    $year = (int)($_POST['years']);
    if(isset($_POST['add1'])){
    $add1 = $_POST['add1'];}
        if(isset($_POST['additional2'])){
    $add2 = $_POST['add2'];}
        if(isset($_POST['add3'])){
    $add3 = $_POST['add3'];}
    if(isset($add1)){
    if($add1!='yes'){
        $add1 = 'no';
    }}
    else{
    $add1 = 'no';
    }
        if(isset($additional2)){
    if($add2!='yes'){
        $add2 = 'no';
    }}
    else{
    $add2 = 'no';
    }
            if(isset($add3)){
    if($add3!='yes'){
        $add3 = 'no';
    }}
    else{
    $add3='no';
    }
    echo 'You added new item <strong>' . $_POST['makers'] . ' </strong></br>';
    echo 'produced in ' . $year . ' ('.(2018 - $year).' years old) with ' . $_POST['engine'] . ' engine </br>' ;
    echo 'Tax payed : ' . $add1 . '</br>';
    echo 'Technical check passed : ' . $add2 . '</br>';
    echo 'Doesnt require investment : ' . $add3 . '</br>';
    echo 'price: '.$_POST['price'];
}
?>
<html>
<head>
    <style>
select{
  width:100%;
  background:grey;
  padding:6px;
  border-radius:4px;
  color:#444411;
}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr td{
  padding:3px;
}
</style>
</head>
<form action="task2.php" method="post">
    <select name="makers" id="makers">
         <option>Toyota</option>
         <option>BMW</option>
         <option>Mercedes</option>
    </select>
    <select name="years" id="years">
        <?php
        for($i=2018;$i>1990;$i--){
          echo '<option>' . ($i) . '</option>';
        }
      ?>
    </select>
    <input type="text" name="model">
    <input type="radio" name="engine" value="gas">gas<br>
    <input type="radio" name="engine" value="diesel">diesel<br>
    <input type="radio" name="engine" value="petroleum"> petroleum<br>
    <input type="text" name="price">
    <input type="checkbox" name="add1" value="yes"> tax payed<br>
    <input type="checkbox" name="add2" value="yes"> technical check passed<br>
    <input type="checkbox" name="add3" value="yes">doesn't require investment<br>
    <input type="submit" name="button"/>
</form>