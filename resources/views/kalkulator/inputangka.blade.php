<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator kak</title>
</head>
<body>
    <style>
        .frame-kalks #neelam{
            width:296px;
            border-bottom: 2px #6f6f6f solid;
            border-bottom-color:#85C1E9;
            background-color:#85C1E9;
        }
        .frame-kalks table {
            margin: auto:
            width: 295px;
            max-width: 295px;
            height: 325px;
            text-align: center;
            border-radius: 2px;
            padding-right: 10px;
        }
        .frame-kals input {
            outline: 0;
            position: relative;
            left: 2px;
            top: 2px;
            border: 0;
            color: #495069;
            background-color: #fff;
            border-radius: 4px;
            width: 60px;
            height: 50px;
            float:left;
            margin:5px;
            font-size:20px;
            box-shadow:0 4px rgba(0,0,0,0.2);
            margin-bottom:15px;
        }
        .frame-kalks input:hover{
            border:0 solid#000;
            color:#495069;
            background-color:#fff;
            border-radius: 4px;
            width: 60px;
            height: 50px;
            float: left;
            font-size: 20px;
            box-shadow: 0 4px #b0d2cf;
        }
        .frame-kalks input:active {
            top: 2px;
            border: 0 solid #000;
            color: #495069;
            background-color: #fff;
            border-radius: 4px;
            width: 60px:
            height: 50px;
            float: left;
            margin: 5px;
            font-size: 20px;
            box-shadow: none;
        }
        .frame-kalks #display {
        width: 265px;
        max-width: 270;
        font-size: 50px;
        text-align: right;
        background-color: #bcbd95;
        float: left;
        }
        .frame-kalks #display:hover{
            width: 270px;
            font-size: 26px;
            text-align: right;
            background-color: #bcbd95;
            box-shadow: 0 4px rgba(0,0,0,0.2);
        }
        .frame-kalks #display:active{
            top: 5px;
            width: 270px;
            font-size: 26px;
            text-align: right;
            background-color: #bcbd95;
            box-shadow: 0 4px rgba(,0,0,0,0.2);
        }
        .frame-kalks .operator{
            background-color:#cee9ea;
            position: relative;
        }
        .border-kalks .operator:hover{
            background-color: #cee9ea;
            box-shadow: none;
        }
        .frame-kalks #clear{
            float: left;
            position: relative;
            display: block;
            background-color: #ff9fa8;
        }
        .frame-kalks #clear:hover{
            float: left;
            display: block;
            background-color: #f297A0;
            margin-bottom: 15px; 
            box-shadow: 0 4px #cc7f86;
        }
        .frame-kalks #clear:active{
            float: left;
            top: 4px;
            display: block;
            background-color: #f297A0;
            margin-bottom: 15px;
            box-shadow: none;
        }
        .frame-kalks h3{
            text-align:center;
            color: white;
            font-size: 109%;
        }
    </style>
    <center>

    
<div class="frame-kalks alert-info p-4 rounded">
    <form name="calc">
        <table class="purple-gradient" border=9>
            <tr>
                <td colspan="4">    <input type="text" name="display" id="neelam" value="" readonly> </td>
            </tr>
            <td><input type="button" value="0" onClick="calc.display.value+='0'"></td>
            <td><input type="button" value="1" onClick="calc.display.value+='1'"></td>
            <td><input type="button" value="2" onClick="calc.display.value+='2'"></td>
            <td><input type="button" value="+" name= "plus"value='+' onClick="calc.display.value+='+'"></td>
            <tr>
            <td><input type="button" value="3" onClick="calc.display.value+='3'"></td>
            <td><input type="button" value="4" onClick="calc.display.value+='4'"></td>
            <td><input type="button" value="5" onClick="calc.display.value+='5'"></td>
            <td><input type="button" value="-" name= "minus"value='-' onClick="calc.display.value+='-'"></td>
            </tr>
            <tr>
            <td><input type="button" value="6" onClick="calc.display.value+='6'"></td>
            <td><input type="button" value="7" onClick="calc.display.value+='7'"></td>
            <td><input type="button" value="8" onClick="calc.display.value+='8'"></td>
            <td><input type="button" value="*" name= "times"value='*' onClick="calc.display.value+='*'"></td>
            </tr>
            <tr>
            <td><input type="button" value="9" onClick="calc.display.value+='9'"></td>
            <td><input type="button" id="clear" name="clear" value="c" onClick="calc.display.value=''"></td>
            <td><input type="button" class="operator" name="equal"value="=" onClick="calc.display.value =eval(calc.display.value)"></td>
            <td><input type="button" value="/" name= "div"value='/' onClick="calc.display.value+='/'"></td>
            </tr>
        </table>
    </form>

</div>
</center>
</body>
</html>