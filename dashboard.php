<?php

include("connectSQL.php");
include("password.php");

$stttts =false;
$selectedCLASS="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newLINK =  $_POST['newLINK'];
    $selectedCLASS = $_POST['selectedCLASS'];



$sql="";
$theDATA = preg_split("/\,/", $selectedCLASS); 
foreach ($theDATA as $item) {
    $sql.="UPDATE onlineclasses SET link_linkedto='$newLINK' WHERE link_id='$item';";
}

  
$con -> multi_query($sql);

//mysqli_query($con, $sql);

  // Close connection
  $con->close();


  $stttts =true;
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>That Academy</title>
    <link rel="icon" href="icon.png"/>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=0.9"> -->

    
    <style>
        .SchoolClass
        {    
            padding: 20px;border: 1px dotted #000;
            display: inline-block;cursor:pointer;
            margin: 2px;
        }
        .school:hover
        {
            border: 1px solid blue;
            background-color: #bab4b4;
            color:white;
        }

        button
        {
            height:90px;
            width:600px;
        }

        .fontP{font-size: 30px;}



        .schoolACTIVE
        {
            color:white;
            background-color: #187432;
            border:2px solid #000;
        }

        #mainButton
        {
            font-size: 35px;
            background-color: #FFD700;
            color: black;
        }
.pFont
{
    font-size:19px;
}
    </style>




</head>
<body>

<form action="" method="post" id="form_data">
    <input type="hidden" value="" id="forminput1" name="newLINK"/>
    <input type="hidden" value="" id="forminput2" name="selectedCLASS"/>
</form>


    <div style="text-align: center;user-select: none;" id="page1">
        <h1>That Academy Dashboard</h1>
		<h2 style="font-weight:normal">Welcome To The Dashboard</h2>


    <script>
//password function
function checkpass(gimmePASS)
{
    var hi = prompt("Please Enter The Password Below :");

    if (hi==null || hi =="" || hi != gimmePASS){
         document.getElementById("page1").remove();


   var tag = document.createElement("label");
   var text = document.createTextNode("password it totally wrong...");
   tag.appendChild(text);

   var element = document.getElementById("form_data");
   element.appendChild(tag);
    }

}
<?php
    if($is_pass_Active)
    echo "checkpass(".$Thepassword.");";
?>


    </script>



        <hr/><br/>


        <p class="fontP"> Write The New Link :</p>
        <input type="text" id="inputlink"style="padding: 20px;width:36%;font-size:22px" oninput="checkBUTTON(1,this)"/>
        <button style="height:71px;width:71px;" onclick="document.getElementById('inputlink').value='';Btn.style.display='none';Estatus2=false;">Delete</button>
        <br/><br/>

        <p class="fontP">Select The Classes :</p>


<div style="background:#e9e9e9;width:600px;margin:auto;border:1px solid #000;padding:15px">
<p>Arabic Classes</p>
    <!--  -->
    <div style="float:left;width:28%;min-height:125px">

    <p style="padding-top:30px;" class="pFont">Elementary</p>

    </div>
    <!--  -->
    <div style="float:right;width:69%;min-height:125px">
    <span class="SchoolClass school" onclick="SchoolClass(1,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(2,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(3,this)">Class E : 0</span>
    <br/>
    <span class="SchoolClass school" onclick="SchoolClass(4,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(5,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(6,this)">Class E : 0</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <br/><br/>
    <!--  -->

    <!--  -->
    <div style="float:left;width:28%;min-height:70px">

    <p class="pFont">Middle</p>
    </div>
    <!--  -->
    <div style="float:right;width:69%;min-height:70px">
    <span class="SchoolClass school" onclick="SchoolClass(7,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(8,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(9,this)">Class E : 0</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <br/>
    <!--  -->
    <!--  -->
    <div style="float:left;width:28%;min-height:70px">

    <p class="pFont">High</p>
    </div>
    <!--  -->
    <div style="float:right;width:69%;min-height:70px">
    <span class="SchoolClass school" onclick="SchoolClass(10,this)">Class E : 0</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <!--  -->
</div>



<div style="width:600px;margin:auto;border:1px solid #000;padding:15px">
<p>International Classes</p>
    <!--  -->
    <div style="float:left;width:28%;min-height:125px">

    <p style="padding-top:30px" class="pFont">Elementary</p>

    </div>
    <!--  -->
    <div style="float:right;width:69%;min-height:125px">
    <span class="SchoolClass school" onclick="SchoolClass(11,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(12,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(13,this)">Class E : 0</span>
    <br/>
    <span class="SchoolClass school" onclick="SchoolClass(14,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(15,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(16,this)">Class E : 0</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <br/><br/>
    <!--  -->

    <!--  -->
    <div style="float:left;width:28%;min-height:70px">

    <p class="pFont">Middle</p>
    </div>
    <!--  -->
    <div style="float:right;width:69%;min-height:70px">
    <span class="SchoolClass school" onclick="SchoolClass(17,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(18,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(19,this)">Class E : 0</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <br/>
    <!--  -->
    <!--  -->
    <div style="float:left;width:28%;min-height:70px">

    <p class="pFont">High</p>
    </div>
    <!--  -->
    <div style="float:right;width:69%;min-height:70px">
    <span class="SchoolClass school" onclick="SchoolClass(20,this)">Class E : 0</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <!--  -->
</div>






        <br/><br/>
        <button style="display:none"onclick="showme()" id="mainButton">Save</button>
    </div>




<div style="display:none;background-color:green;color:white;width:600px;margin:auto;padding:20px" id="page2">
        <h2>Link Changed Successfully For This Classes :</h2>
        
        <div id="affectedClasses" style="font-size:25px">

        </div>
        <br/><br/><br/>
        <a href="" style="color:white;">Back To Main Page</a>
</div>

<script>
const ActiveClasses=[];

function SchoolClass(ClassNumber,nnm)
{


nnm.classList.toggle("schoolACTIVE");
nnm.classList.toggle("school");


if(!(ActiveClasses.includes(ClassNumber)))
    ActiveClasses.push(ClassNumber);
else
{
    ActiveClasses.splice(ActiveClasses.indexOf(ClassNumber),1);
}



if (ActiveClasses.length === 0)
    Estatus1 = false;
else
    Estatus1 = true;

    checkBUTTON(2);
//console.log(ActiveClasses);
}


function showme()
{
    var whatIS = ActiveClasses.sort(function(a, b){return a - b});
    //alert(whatIS);
   document.getElementById("forminput1").value = document.getElementById("inputlink").value;
   document.getElementById("forminput2").value = whatIS;
   document.getElementById("form_data").submit();

}

var Estatus1=false;
var Estatus2=false;


var Btn= document.getElementById("mainButton");
function checkBUTTON(typeEE,whatE)
{
    if(typeEE==1)
    {
        if(whatE.value.length>0)
        Estatus2=true;
        else
        Estatus2=false;
    }

if(Estatus1 && Estatus2)
    Btn.style.display="inline-block";
else
    Btn.style.display="none";

}





//function to show affected classes:

function affeClass(arr)
{
var resUlt;
switch(arr)
{
        case 1:
        resUlt="The Class One";
        break;
        case 2:
        resUlt="The Class Two";
        break;
        case 3:
        resUlt="The Class Three";
        break;
        case 4:
        resUlt="The Class Four";
        break;
        case 5:
        resUlt="The Class Five";
        break;
        case 6:
        resUlt="The Class Six";
        break;
        case 7:
        resUlt="The Class Seven";
        break;
        case 8:
        resUlt="The Class Eight";
        break;
        case 9:
        resUlt="The Class Nine";
        break;
        case 10:
        resUlt="The Class Ten";
        break;

        case 11:
        resUlt="The Class eleven";
        break;
        case 12:
        resUlt="The Class twelve";
        break;
        case 13:
        resUlt="The Class thirteen";
        break;
        case 14:
        resUlt="The Class fourteen";
        break;
        case 15:
        resUlt="The Class fifteen";
        break;
        case 16:
        resUlt="The Class sixteen";
        break;
        case 17:
        resUlt="The Class seventeen";
        break;
        case 18:
        resUlt="The Class eighteen";
        break;
        case 19:
        resUlt="The Class nineteen";
        break;
        case 20:
        resUlt="The Class twenty";
        break;
}


document.getElementById("affectedClasses").innerHTML+="<br/>- ["+resUlt+"]<br/>";


}

function hidepage()
{
document.getElementById("page1").style.display="none";
document.getElementById("page2").style.display="block";
}
</script>


<!--  -->
<script>
var runit=false;
var newClas="";
<?php 
echo "newClas = [$selectedCLASS];";
if($stttts) {echo"runit=true;"; echo"hidepage();";}
else $selectedCLASS="0,0";
?>


if(runit)
newClas.forEach( affeClass);


</script>
<!--  -->


</body>
</html>