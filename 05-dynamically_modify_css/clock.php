<?php
date_default_timezone_set('UTC');
echo date("l") .': ' .date('H').':' .date('i').':'.date('s');

echo '
    <div 
        id="reloj" 
        style="
            position:absolute;
            -webkit-transform:translate(200px,200px);">
        <div 
            id="segundos" 
            style="
                position:absolute;
                width:100px;
                height:100px;
                background:white;
                border-radius:50px;
                border:3px dashed white;
                -webkit-transform:translate(0px,-50px);
                background:rgba(0,0,0,1);
                box-shadow:0px 0px 25px rgba(0,0,0,0.5);
        "></div>     
        <div 
            id="segundos" 
            style="
                position:absolute;
                width:100px;
                height:12px;
                background:blue;
                -webkit-transform:rotate('.(30*date('H')+90).'deg);
                -webkit-box-shadow:0px 0px 15px blue;"></div>
                <div 
            id="segundos" 
            style="
                position:absolute;
                width:100px;
                height:8px;
                background:green;
                -webkit-transform:rotate('.(6*date('i')+90).'deg);
                -webkit-box-shadow:0px 0px 15px green;
        "></div>
        <div 
            id="segundos" 
            style="
                position:absolute;
                width:100px;
                height:3px;
                background:red;
                -webkit-transform:rotate('.(6*date('s')+90).'deg);
                -webkit-box-shadow:0px 0px 15px red;
        "></div>
        <div 
            id="segundos" 
            style="
                position:absolute;
                width:10px;
                height:10px;
                background:black;
                border-radius:10px;
                border:1px solid black;
                -webkit-transform:translate(45px,-5px);
        "></div>
    </div>
';