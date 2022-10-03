<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>That Academy</title>
    <link rel="icon" href="icon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=0.9">

    
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


    </style>
</head>
<body>
    <div style="text-align: center;user-select: none;">
        <h1>Zat Academy Dashboard</h1>
        
        <hr/><br/>


        <p class="fontP"> Write The New Link :</p>
        <input type="text" style="padding: 25px;width:40%;font-size:22px"/>

        <br/><br/>

        <p class="fontP">Select The Classes :</p>


<div style="width:600px;margin:auto;border:1px solid #000;padding:15px">
    <!--  -->
    <div style="float:left;width:28%;height:125px">

    <p style="padding-top:30px">Elementary</p>

    </div>
    <!--  -->
    <div style="float:right;width:69%;height:125px">
    <span class="SchoolClass school" onclick="SchoolClass(1,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(2,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(3,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(4,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(5,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(6,this)">Class E : 0</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <br/><br/>
    <!--  -->

    <!--  -->
    <div style="float:left;width:28%;height:70px">

    <p>Middle</p>
    </div>
    <!--  -->
    <div style="float:right;width:69%;height:70px">
    <span class="SchoolClass school" onclick="SchoolClass(7,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(8,this)">Class E : 0</span>
    <span class="SchoolClass school" onclick="SchoolClass(9,this)">Class E : 0</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <br/>
    <!--  -->
    <!--  -->
    <div style="float:left;width:28%;height:70px">

    <p>High</p>
    </div>
    <!--  -->
    <div style="float:right;width:69%;height:70px">
    <span class="SchoolClass school" onclick="SchoolClass(10,this)">Class E : 0</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <!--  -->
</div>



        <br/><br/>
        <button onclick="showme()">Save</button>
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




console.log(ActiveClasses);
}


function showme()
{
    var whatIS = ActiveClasses.sort(function(a, b){return a - b});
    alert(whatIS);
}

</script>
</body>
</html>