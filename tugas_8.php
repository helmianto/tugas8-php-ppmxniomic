<?php
function cetak_belah_ketupat1(){
echo"<table><tr><td align='center'>";
    print('__________');
    echo"<br/>";
    for($i=0;$i<=9;$i++){
        print('__________');
        for($a=$i;$a>=0;$a--){
            print('XX');
        }
        echo"<br/>";
    }
    for($i=0;$i<=8;$i++){
        print('__________');
        for($a=$i;$a<=8;$a++){
            print('XX');
        }
        echo"<br/>";
    }
    print('__________');
    echo"<br/>";
    echo"</td></tr></table>";
}

cetak_belah_ketupat1();
cetak_belah_ketupat1();
?>