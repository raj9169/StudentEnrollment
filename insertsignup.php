<?php 
include_once("config.php");
session_start();
if(isset($_POST['submit'])){
  
$first_name         = $_POST['first_name'];

$middle_name        =$_POST['middle_name'];

$last_name          = $_POST['last_name'];

$gender             = $_POST['gender'];
$dob                = $_POST['dob'];
$cast               = $_POST['cast'];
$mob1               = $_POST['mob1'];
$mob2               = $_POST['mob2'];
$email              = $_POST['email'];
$c_email            = $_POST['c_email'];
$clgsession         = $_POST['clgsession'];
$father_name        = $_POST['father_name'];
$father_occuptation =  $_POST['father_occuptation'];
$mother_name        = $_POST['mother_name'];
$mother_occuptation = $_POST['mother_occuptation'];
$guardian_email     = $_POST['guardian_email'];
$parmanent_add      = $_POST['parmanent_add'];
$country            = $_POST['country'];
$state              = $_POST['state'];
$pincode            = $_POST['pincode'];
// High School 
$hs_name            = $_POST['hs_name'];
$hboard             = $_POST['hboard'];
$htotal_marks       = $_POST['htotal_marks'];
$hobtain_marks      = $_POST['hobtain_marks'];
$hpercent           = $_POST['hpercent'];
//Intermediate 
$intermediate_school_name = $_POST['intermediate_school_name'];
$iboard             = $_POST['iboard'];
$itotal_marks       = $_POST['itotal_marks'];
$iobtain_marks      = $_POST['iobtain_marks'];
$ipercent           = $_POST['ipercent'];
//Graduation
$graduation_clg     = $_POST['graduation_clg'];
$gboard             = $_POST['gboard'];
$gtotal_marks       = $_POST['gtotal_marks'];
$gobtain_marks      = $_POST['gobtain_marks'];
$gpercent           = $_POST['gpercent'];
//document 
$location = "upload/";

$aadhr_f1           =$_FILES['aadhr_f1']['name'];
$aadhr_f1_temp      =$_FILES['aadhr_f1']['tmp_name'];

$high_school_f2     = $_FILES['high_school_f2']['name'];
$high_school_f2_temp= $_FILES['high_school_f2']['tmp_name'];

$inter_f3           = $_FILES['inter_f3']['name'];
$inter_f3_temp      = $_FILES['inter_f3']['tmp_name'];

$graduation_f4      = $_FILES['graduation_f4']['name'];
$graduation_f4_temp = $_FILES['graduation_f4']['tmp_name'];
$domicle_f5         = $_FILES['domicle_f5']['name'];
$domicle_f5_temp    = $_FILES['domicle_f5']['tmp_name'];

$caste_f6           = $_FILES['caste_f6']['name'];
$caste_f6_temp      = $_FILES['caste_f6']['tmp_name'];

$pan_f7             = $_FILES['pan_f7']['name'];
$pan_f7_temp        = $_FILES['pan_f7']['tmp_name'];

$photo_f8           = $_FILES['photo_f8']['name'];
$photo_f8_temp      = $_FILES['photo_f8']['tmp_name'];

$sign_f9            = $_FILES['sign_f9']['name'];
$sign_f9_temp       = $_FILES['sign_f9']['tmp_name'];
$data=[];
$data = [$aadhr_f1,$high_school_f2,$inter_f3,$graduation_f4,$domicle_f5,$caste_f6,$pan_f7,$photo_f8,$sign_f9];
$Documents= implode(' ',$data);

$bank_name    = $_POST['bank_name'];
$ifsc_code    = $_POST['ifsc_code'];
$branch_name  = $_POST['branch_name'];
$acc_no       = $_POST['acc_no'];
$agreebtn     = $_POST['agreebtn'];

if($first_name!="" && $middle_name!="" && $last_name!="" && $gender!="" && $dob!=""&&$cast!=""&&$mob1!=""&&$mob2!=""&&$email!="" && $c_email!=""&&$clgsession!=""&&$father_name!=""&&$father_occuptation!=""&&$mother_name!=""&&$mother_occuptation!=""&&$guardian_email!=""&&$parmanent_add!=""&&$country!=""&&$state!=""&&$pincode!=""&&$hs_name!=""&&$hboard!=""&&$htotal_marks!="" && $hobtain_marks!="" && $hpercent!="" && $intermediate_school_name!=""&&$iboard!=""&&$itotal_marks!=""&& $iobtain_marks!="" && $ipercent!=""&&$graduation_clg!=""&&$gboard!=""&&$gtotal_marks!=""&&$gobtain_marks!=""&&$gpercent !=""&&$bank_name !=""&&$ifsc_code !=""&&$branch_name !=""&&$acc_no !=""&&$agreebtn !="")
{
    $query = "INSERT INTO student_enroll (first_name,middle_name,last_name,gender,dob,cast,mob1,mob2,email,c_email,clgsession,father_name,father_occuptation,mother_name,mother_occuptation,guardian_email,parmanent_add,country,state,pincode,hs_name,hboard,htotal_marks,hobtain_marks,hpercent,intermediate_school_name,iboard,itotal_marks,iobtain_marks,ipercent,graduation_clg,gboard,gtotal_marks,gobtain_marks,gpercent,bank_name,ifsc_code,branch_name,acc_no,agreebtn,documents) VALUES('$first_name','$middle_name','$last_name','$gender','$dob','$cast','$mob1','$mob2','$email','$c_email','$clgsession','$father_name','$father_occuptation','$mother_name','$mother_occuptation','$guardian_email','$parmanent_add','$country','$state','$pincode','$hs_name','$hboard','$htotal_marks','$hobtain_marks','$hpercent','$intermediate_school_name','$iboard','$itotal_marks','$iobtain_marks','$ipercent','$graduation_clg','$gboard','$gtotal_marks','$gobtain_marks','$gpercent','$bank_name','$ifsc_code','$branch_name','$acc_no','$agreebtn','$Documents')";
$sql =  mysqli_query($link,$query);
if($sql){
   
   
   
    move_uploaded_file($aadhr_f1_temp,$location.$aadhr_f1);
    move_uploaded_file($high_school_f2_temp,$location.$high_school_f2);
    move_uploaded_file($inter_f3_temp,$location.$inter_f3);
    move_uploaded_file($graduation_f4_temp,$location.$graduation_f4);
    move_uploaded_file($domicle_f5_temp,$location.$domicle_f5);
    move_uploaded_file($caste_f6_temp,$location.$caste_f6);
    move_uploaded_file($pan_f7_temp,$location.$pan_f7);
    move_uploaded_file($photo_f8_temp,$location.$photo_f8);
    move_uploaded_file($sign_f9_temp,$location.$sign_f9);
    
    
    echo "Data saved";
}
else{
    echo "Not saved".mysqli_error($link);
}
}
else {
    echo "wrorng".mysqli_error($link);
 


}
}