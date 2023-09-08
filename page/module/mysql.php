<?php
// http://127.0.0.1/myadmin/ root apmsetup
// 데이터 베이스 생성
// 데이터 베이스 연결

    // $farray = mysqli_fetch_array($res); // 다나옴
    // $frow = mysqli_fetch_row($res); // 순서대로
    // $fassoc = mysqli_fetch_assoc($res); // 연관배열로

function getConn(){
    $hostname = 'localhost';
    $user = 'root';
    $pass = 'apmsetup';
    $dbase ='myshop';
    $conn = mysqli_connect($hostname, $user, $pass, $dbase);
    mysqli_query($conn, 'SET NAMES utf8');
    return $conn;
}

function getData($qry='select * from users',$type=1){
    $conn=getConn();
    $res=mysqli_query($conn,$qry);
    $resArr=array();// 데이터 초기화
    if($type==1){// select 라면
        // 묵시적 불린 T/F 0==F 0> T
        while($data=mysqli_fetch_assoc($res)){// 조건이 참인동안 반복
            array_push($resArr,$data);
        }// 연관배열로
    }else{
        $resArr=$res;
    }
    return $resArr;
}

// function getData($qry='select * from users', $type=1){
//     $conn=getConn();
//     $res = mysqli_query($conn, $qry);
//     $resArr=array();// 데이터 초기화
//     if($type==1){ // select라면
//         // data가 빌 때까지 fetch를 돌려야 해
//         // 묵시적 불린 0==F, 0>T
//         while ($data=mysqli_fetch_assoc($res)){
//             //php 함수 지향
//             // array_push -python의 append같은
//             array_push($resArr,$data);
//         }
//     }
//     else{
//         $resArr = $res;
//     }
//     return $resArr;
// }
?>