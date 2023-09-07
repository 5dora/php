# php
    - HTML을 전달하는 데 목적
    - HTML안에 injection?으로
    * HTML
    - hyper text markup language
    * <시작태그></종료태그>
    * <시작태그/>
        - 태그의 종류
    * 태그
        - <HTML>
            - <HEAD>
                - <meta
                - <title
                - <style
                - <script
            - BODY
                - <h1 ~ h6 제목
                - <div 블럭
                - <p 문단
                - <ul~li
                - <ol~li
                - <span 인라인
                - <label 인라인
                - 폼관련 태그
                    - <form
                    - <input 인라인
                    - <checkbox 인라인
                    - <select 인라인
                    - <radio 인라인
            - 기타태그
                - <address
                - <article
                - < section
* img 로드 안될 때
    - ctrl + shift + r: 전체 데이터 다시 가져오기

---

# DATABASE -mysql

- 데이터베이스 생성
```SQL
    CREATE DATABASE `myshop` DEFAULT CHARACTER SET utf-8 COLLATE utf8-general_ci;
```

- 테이블 생성
```SQL
    CREATE TABLE `myshop`.`users` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '고유키',
    `name` VARCHAR( 128 ) NOT NULL DEFAULT '' COMMENT '이름',
    `uid` VARCHAR( 30 ) NOT NULL DEFAULT '' COMMENT '유저아이디',
    `upw` VARCHAR( 256 ) NOT NULL DEFAULT '' COMMENT '패스워드',
    `uemail` VARCHAR( 256 ) NOT NULL DEFAULT '' COMMENT '이메일',
    `status` INT NOT NULL DEFAULT '0' COMMENT '관리상태'
    ) ENGINE = MYISAM ;
```

- 테이블에서 컬럼 추가
```SQL
    ALTER TABLE `users` ADD `status1` TINYINT NOT NULL DEFAULT '0';
```

- 컬럼 삭제
```SQL
    ALTER TABLE `users` DROP `status1`;
```

- 추가 INSERT
```SQL
    INSERT INTO `myshop`.`users` (
    `id` ,
    `name` ,
    `uid` ,
    `upw` ,
    `uemail` ,
    `status`
    )
    VALUES (
    NULL , '홍길동', 'hong', '1234', 'hong@aa.com', '0'
    );
```

- 데이터 가져오기 select
```SQL
    SELECT id, name, uid, upw
    FROM `users`
    LIMIT 0 , 30
```

- 데이터 수정 UPDATE
```SQL
    UPDATE `myshop`.`users` SET `uid` = 'park',
    `upw` = '1234',
    `uemail` = 'park@aa.com' WHERE `users`.`id` =4 LIMIT 1 ;
```

- 데이터 삭제 
```SQL
    DELETE FROM `myshop`.`users` WHERE `users`.`id` =4 LIMIT 1 ;
```

- 데이터베이스 삭제
```SQL
DROP DATABASE `myshop`;
```
