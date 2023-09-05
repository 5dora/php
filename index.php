<!DOCTYPE html>
<html>
    <head>
        <!-- 전체적 페이지에 영향을 주는 요소 -->
            <meta charset='utf-8'/>
            <title> My php </title>

            <!-- css 문법 -->
            <style type="text/css"> 
                /* css(Cascading Style Sheet) 주석 -> 스크래이핑 시 CSS selector로 */
                /* 태그셀렉터 : h1태그를 찾아서 모두 red로 색상 바꿔줘*/
                h1{color: red;}
                div{border:1px solid red;}
                /* id 셀렉터 # */
                #hello{border:3px dotted blue;}
                /* 클래스 셀렉터 . */
                .txtGreen{color:Green;}


            </style>    
            <!-- javascript 영역 -->
            <script>
                // 자바스크립트 한 줄 주석
                /* 자바스크립트 블럭 주석 */
            </script>
    </head>

    <body>
        <!-- 페이지 본문 -->
        hello html
        <div>
            <h1>hello html</h1>
            <h2 class="txtGreen">h2</h2>
            <h3>h3</h3>
            <h4 class="txtGreen">h4</h4>
            <h6>h6</h6>
            <h7>h7</h7><!-- 사용자 정의 태그 / html5 - W3C에서 권고사항-->
        </div>
        <p>안녕하세요</p>
        <p>여러분</p>
        <div id="hello">여러분 반갑습니다.</div>
    </body>
</html>