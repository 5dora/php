            <?php
                // 모듈 넣기
                $title=array('Farm Farm', '건강한 먹거리');
                include('./page/module/header.php');
                include('./page/module/mysql.php');
                include('./page/module/carousel.php');

            //     $qry= 'select id, name, uid, uemail, status from users';
            //     $fall = getData($qry);
            //     //print_r($fall)
            //     $heads= array('id', '이름','아이디', '이메일', '상태','관리');
            //     print('<table class="table table-bordered">');
            //     print('<tr>');
            //     foreach($heads as $head){
            //         print('<th>'.$head.'</th>');
            //     }
            //     print('<tr>');
            //     foreach($fall as $k => $v){
            //         print('<td>'.$v.'</td>');
            //     }
            //     $btns='<div class="btn-group">
            //     <a href="#" class="btn btn-primary">수정</button></a>
            //     <button type="button" class="btn btn-warning">삭제</button>
            //   </div>';
            //     print('<td>'.$btns.'</td>');
            //     print('</tr>');
            //     print('</table>');
            ?>
        </div>
        </div>

        <?php

        ?>
    </body>
</html>