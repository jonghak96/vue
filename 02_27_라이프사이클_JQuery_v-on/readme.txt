컨포넌트 (새로운 태그)
jsxt 가상태그?

뷰의 통신
위아래만 (형제끼리 안됨)

el:
data:
methods:
beforUpdate:

/////

이전에는 수정하기 힘들고
방향이 없었음.

Html 좀 더 구조화
>> 프레임워크

(부트스트랩, 워드프레스에서 출발)
(틀이 만들어져있음)

앵귤러, 리액트.... 이런 애들이 만들어짐.
단점을 보완해서 나온 것이 뷰.

스코프 : id 안의 것들. (div #main 안)
>> 컨포넌트 단위로 관리됨.
인스턴스 : {el, data, methods}

15p.
프론트단 (화면단 서버단)
백단

16.

18.

20.
MVVM Pattern

21.
HTML - Document > head, body > 
Vue : 조각조각 레고처럼 컨포넌트로 관리

30.
Node.js 설치
NPM

32.
Vue devtools

33.

34.
Javascript + HTML,CSS + Vue Model

40.
new Vue({

});

41.

42.
XML TAG

가상요소 태그 : JSX
컨포넌트.
템플릿 안에 실제 태그를 넣는다.

create : 인스턴트 생성
마운트 : 화면에 부착.

44.

커스텀 로직

라이프사이클 (생명주기)

beforecreate
create
created

beforemount
mount
mounted
(이후에 Jquery 사용)(컨포넌트 삽입 이후)

(수정 단계)
beforeupdate
update *무한루프
updated

컴피티드
watch

beforedestroy
destroy
destroyed

45.
46.

48.




//////////////////

https://jquery.com/
>
Download
>
Google CDN
>
1.x snippet:
>
다른이름으로 저장
>
디렉토리에 위치