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
        }
        .SchoolClass:hover
        {
            border: 1px solid blue;
            background-color: #92a196;
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
            background-color: red;
        }
    </style>
</head>
<body>
    <div style="text-align: center;user-select: none;">
        <h1>Zat Academy Dashboard</h1>
        
        <hr/><br/>


        <p class="fontP"> Write The New Link :</p>
        <input type="text" style="padding: 25px;width:40%"/>

        <br/><br/>

        <p class="fontP">Select The Classes :</p>


<div style="width:600px;margin:auto;border:1px solid #000;padding:15px">
    <!--  -->
    <div style="float:left;width:28%;height:125px">

    <p style="padding-top:50px">Elementary</p>

    </div>
    <!--  -->
    <div style="float:right;width:69%;height:125px">
    <span class="SchoolClass" onclick="SchoolClass(1,this)">Class E : 1</span>
    <span class="SchoolClass" onclick="SchoolClass(2,this)">Class E : 2</span>
    <span class="SchoolClass" onclick="SchoolClass(3,this)">Class E : 3</span>
    <span class="SchoolClass" onclick="SchoolClass(4,this)">Class E : 4</span>
    <span class="SchoolClass" onclick="SchoolClass(5,this)">Class E : 5</span>
    <span class="SchoolClass" onclick="SchoolClass(6,this)">Class E : 6</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <br/>
    <!--  -->

    <!--  -->
    <div style="float:left;width:28%;height:70px">

    <p>Middle</p>
    </div>
    <!--  -->
    <div style="float:right;width:69%;height:70px">
    <span class="SchoolClass" onclick="SchoolClass(7,this)">Class E : 1</span>
    <span class="SchoolClass" onclick="SchoolClass(8,this)">Class E : 2</span>
    <span class="SchoolClass" onclick="SchoolClass(9,this)">Class E : 3</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <br/>
    <!--  -->
    <!--  -->
    <div style="float:left;width:28%;">

    <p>High</p>
    </div>
    <!--  -->
    <div style="float:right;width:69%;">
    <span class="SchoolClass" onclick="SchoolClass(10,this)">Class E : 1</span>
    </div>
    <!--  -->
    <div style="clear:both;"></div>
    <!--  -->
</div>



        <br/><br/><br/>
        <button>Save</button>
    </div>



<script>
const ActiveClasses=[];

function SchoolClass(ClassNumber,nnm)
{


nnm.classList.toggle("schoolACTIVE");

if(!(ActiveClasses.includes(ClassNumber)))
    ActiveClasses.push(ClassNumber);





console.log(ActiveClasses);
}



</script>
</body>
</html>