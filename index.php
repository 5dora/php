<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- 합쳐지고 최소화된 최신 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- 부가적인 테마 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <style>
            .row-lg div{border:1px solid grey}
            .row-md div{border:1px dotted blue}
            .row-sm div{border:1px solid red}
            .row-for1 div{border:1px solid black; background-color:orange;}
            .row-for2 div{border:1px solid black; background-color:yellow;}
            .row-for3 div{border:1px solid black; background-color:lightgreen;}
            .row-for4 div{border:1px solid black; background-color:lightblue;}
            .row-for5 div{border:1px solid black;}
            .row-f div{border:1px solid black; background-color:pink;}
            .row-for div{border:1px solid black; background-color:violet;}
            .row div{border:1px solid grey}
            .redbox{background-color: red;}

        </style>
    </head>
    
    <body>

        <?php
        // 모듈 넣기
        include('./module/navbar.php');

        // http://127.0.0.1/myadmin/ root apmsetup
        // 데이터 베이스 생성
        // 데이터 베이스 연결
        $hostname = 'localhost';
        $user = 'root';
        $pass = 'apmsetup';
        $dbase ='myshop';
        $conn = mysqli_connect($hostname, $user, $pass, $dbase);
        $qry = 'select * from users';
        mysqli_query($conn, 'SET NAMES utf8');
        $res = mysqli_query($conn, $qry);
        // print_r($res);

        // $farray = mysqli_fetch_array($res); // 다나옴
        // print_r($farray);

        // $frow = mysqli_fetch_row($res); // 순서대로
        // print_r($frow);

        // $fassoc = mysqli_fetch_assoc($res); // 연관배열로
        // print_r($fassoc);

        $fall = mysqli_fetch_assoc($res);

        // //li로
        // foreach($fall as $k => $v){
        //     print('<li>'.$k.':'.$v.'</li>');
        // }

        //table
        print('<table class="table table-bordered">');
        print('<tr>');
        foreach($fall as $k => $v){
            print('<td>'.$v.'</td>');
        }
        print('</tr>');
        print('</table>');
        ?>

    </body>
</html>