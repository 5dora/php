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

<div>
    <h1>그리드 이해하기</h1>
    <hr>
        <div class="row-lg">
            <div class="col-lg-2"><h1>col-lg-2</h1></div>
            <div class="col-lg-2"><h1>col-lg-2</h1></div>
            <div class="col-lg-2"><h1>col-lg-2</h1></div>
            <div class="col-lg-2"><h1>col-lg-2</h1></div>
            <div class="col-lg-2"><h1>col-lg-2</h1></div>
            <div class="col-lg-2"><h1>col-lg-2</h1></div>
        </div>

        <div class="row-lg">
            <div class="col-lg-3"><h1>col-lg-3</h1></div>
            <div class="col-lg-3"><h1>col-lg-3</h1></div>
            <div class="col-lg-3"><h1>col-lg-3</h1></div>
            <div class="col-lg-3"><h1>col-lg-3</h1></div>
        </div>

        <div class="row-lg">
            <div class="col-lg-4"><h1>col-lg-4</h1></div>
            <div class="col-lg-4"><h1>col-lg-4</h1></div>
            <div class="col-lg-4"><h1>col-lg-4</h1></div>
        </div>

        <div class="row-lg">
            <div class="col-lg-6"><h1>col-lg-6</h1></div>
            <div class="col-lg-6"><h1>col-lg-6</h1></div>
        </div>

        <div class="row-lg">
            <div class="col-lg-8"><h1>col-8</h1></div>
            <div class="col-lg-4"><h1>col-4</h1></div>
        </div>

        <div class="row-md">
            <div class="col-md-2"><h1>col-md-2</h1></div>
            <div class="col-md-2"><h1>col-md-2</h1></div>
            <div class="col-md-2"><h1>col-md-2</h1></div>
            <div class="col-md-2"><h1>col-md-2</h1></div>
            <div class="col-md-2"><h1>col-md-2</h1></div>
            <div class="col-md-2"><h1>col-md-2</h1></div>
        </div>

        <div class="row-sm">
            <div class="col-sm-2"><h1>col-sm-2</h1></div>
            <div class="col-sm-2"><h1>col-sm-2</h1></div>
            <div class="col-sm-2"><h1>col-sm-2</h1></div>
            <div class="col-sm-2"><h1>col-sm-2</h1></div>
            <div class="col-sm-2"><h1>col-sm-2</h1></div>
            <div class="col-sm-2"><h1>col-sm-2</h1></div>
        </div>
</div>

<div>   
    <hr>
    <h1>for문 실습</h1>
    <hr>
        <!-- php는 pre script 언어, html보다 우선해서 작동 -->
        <?php
        //단열 주석
        /* 다열 주석 */
        // 변수 $변수명 (스크립트 변수)
        // .문자열 합치기
        $a = 'h3';
        print('<'.$a.'>안녕하세요</'.$a.'>');
        print("<h1>안녕하세요</h1>");
        // 변수 형이 없다
        // 반복문 for(증감변수초기화;증감변수조건;증감){코드블럭} while
        for($i=0; $i<6;$i++){
            $a = 'h'.$i;
            print('<'.$a.'>'.$i.'안녕하세요</'.$a.'>');
        }
        ?>

        <div class="row-for1">
            <?php
            for($i=0;$i<6;$i++){
                $s = '<div class="col-lg-2"><h1>col-lg-2</h1></div>';
                print($s);
            }
            ?>
        </div>
        
        <div class="row-for2">
            <?php
            $total=12; //부트스트랩 전체컬럼수
            $wkan=3; //나누고 싶은 칸수
            $cNo=($total/$wkan); //클래스 수자
            $cnt=$total/$cNo; //반복숫자
            for($i=0;$i<$cnt;$i++){
                $s = '<div class="col-lg-'.$cNo.'"><h1>col-lg-'.$cNo.'</h1></div>';
                print($s);
                }
            ?>
        </div>

        <?php
            $total=12; //부트스트랩 전체컬럼수
            $wkan=4; //나누고 싶은 칸수
            $cNo=($total/$wkan); //클래스 수자
            $cnt=$total/$cNo; //반복숫자
            print('<div class="row-for3">');
            for($i=0;$i<$cnt;$i++){
                $s = '<div class="col-lg-'.$cNo.'"><h1>col-lg-'.$cNo.'</h1></div>';
                print($s);
                }
            print('</div>');
        ?>

        <?php
        for($wkan=2;$wkan<7;$wkan++){
            // $wkan=4; //나누고 싶은 칸수
            $total=12; //부트스트랩 전체컬럼수
            $cNo=($total/$wkan); //클래스 수자
            $cnt=$total/$cNo; //반복숫자
            if ($wkan == 5) {
                continue;
            } 
            print('<div class="row-for4">');
            for($i=0;$i<$cnt;$i++){
                $s = '<div class="col-lg-'.$cNo.'"><h1>col-lg-'.$cNo.'</h1></div>';
                print($s);
                }
            print('</div>');
        }
        ?>

        <?php
        for($wkan=2;$wkan<7;$wkan++){
            $total=12; //부트스트랩 전체컬럼수
            /* PHP수학 내장함수 */
            // $cNo=ceil($total/$wkan); // 올림 클래스 숫자
            $cNo=floor($total/$wkan); // 내림 클래스 숫자
            //$cNo=round($total/$wkan); // 반올림 클래스 숫자
            $cnt=$total/$cNo; //반복숫자
            print('<div class="row-for5">');
            for($i=0;$i<$cnt;$i++){
                if($i %2 ==1){
                    $addClass='redbox';
                }else{
                    $addClass='';
                }
                $s = '<div class="col-lg-'.$cNo.' '.$addClass.'"><h1>col-lg-'.$cNo.'</h1></div>';
                print($s);
                }
            print('</div>');
        }
        ?>

        <?php
        for($wkan=2;$wkan<7;$wkan++){
            $total=12; //부트스트랩 전체컬럼수
            $cNo=($total/$wkan);
            $cnt=$total/$cNo; //반복숫자
            if ($wkan == 5) {
                continue;
            } 
            print('<div class="row-for5">');
            for($i=0;$i<$cnt;$i++){
                if($i % 2 ==1){
                    $addClass='redbox';
                }else{
                    $addClass='';
                }
                $s = '<div class="col-lg-'.$cNo.' '.$addClass.'"><h1>col-lg-'.$cNo.'</h1></div>';
                print($s);
                }
            print('</div>');
        }
        ?>

        <div class="row-for">
            <div class="col-lg-1"><h1>col-1</h1></div>
            <div class="col-lg-11"><h1>col-11</h1></div>
        </div>
        <div class="row-for">
            <div class="col-lg-2"><h1>col-2</h1></div>
            <div class="col-lg-10"><h1>col-10</h1></div>
        </div>
        <div class="row-for">
            <div class="col-lg-3"><h1>col-3</h1></div>
            <div class="col-lg-9"><h1>col-9</h1></div>
        </div>
        <div class="row-for">
            <div class="col-lg-4"><h1>col-4</h1></div>
            <div class="col-lg-8"><h1>col-8</h1></div>
        </div>
        <div class="row-for">
            <div class="col-lg-5"><h1>col-5</h1></div>
            <div class="col-lg-7"><h1>col-7</h1></div>
        </div>
        <div class="row-for">
            <div class="col-lg-6"><h1>col-6</h1></div>
            <div class="col-lg-6"><h1>col-6</h1></div>
        </div>

        
        <?php
        for($i=1; $i<7;$i++){
            $num = 12;
            print('<div class="row-f">');
            print('<div class="col-lg-'.$i.'"><h1>col-'.$i.'</h1></div>');
            print('<div class="col-lg-'.($num - $i).'"><h1>col-'.($num - $i).'</h1></div>');
            print('</div>');
            }
        ?>
    
</div>

<div>
    <?php
    // def 함수명():
        //선언 function 함수명( 매개변수){코드블럭;return 변수명}
        function makeHr($title="개별처리"){
            print('<hr>');
            print('<h1>'.$title.'</h1>');
            print('<hr>');
        }
    ?>
</div>

<div>
        <?php
        makeHr("스위치문");
        $score=75;
        $score=10*floor($score/10);
        print($score);
        switch($score){
            case 90:
                print('수');
                break;
            case 80:
                print('우');
                break;
            case 70:
                print('미');
                break;
            default:
                print('낙제');
        }
        ?>
</div>

    <?php
        makeHr('계단 만들기');
        $kn=1;
        function grid1($cNo=1,$addClass='redbox'){
            $other=12-$cNo;
            $s='<div class="row">';
            $s.='<div class="col-lg-'.$cNo.' "><h1>.col-md-'.$cNo.'</h1></div>'."\n";
            $s.='<div class="col-lg-'.$other.' '.$addClass.'"><h1>.col-md-'.$other.'</h1></div>'."\n";
            $s.='</div>';
            print($s);
        }
        for ($i=11;$i>0;$i--){
            grid1($i);
        }
    ?> 

<?php
    /* 배열 */
    makeHr("단순배열");
    $arr = array(1, 2, '국어', '수학');
    for($i=0; $i<count($arr); $i++){
        print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
    }
    foreach($arr as $a){
        print('<li>'.$a.'</li>');
    }

    /*연관배열 key-value*/
    makeHr("연관배열");
    $arr = array(1=>'국어', 2=>'수학', 5=>'영어', 6=>'수학');
    for($i=0; $i<count($arr); $i++){
        print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
    }
    foreach($arr as $k=>$v){
        print('<li>'.$k.':'.$v.'</li>');
    }
?>
    </body>
</html>