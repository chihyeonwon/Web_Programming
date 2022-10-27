# Web_Programming
웹프로그래밍 중간고사 준비 php+mysql

## PHP number_format

첫번째 매개 변수는 숫자를 담고   
두번째는 소수점 몇째 자리까지 보여줄 것인지.   
세번째는 소숫점 을 구분하는 점이 되고,   
네번째는 천 단위마다 구분해서 보여줄 문자 입니다.

```php
$s_avg = number_format($s_sum/3,2,".",""); // $s_sum/3 변수의 값을 소수 둘째 자리까지 소숫점을 구분하는 기호는 . 이고 천 단위마다 구분 문자는 공백
```

출력화면
![image](https://user-images.githubusercontent.com/58906858/198301092-314542c1-0a8e-49d7-9dcf-b9d560cf7bf0.png)

## PHP 개행 문자

PHP 개행은 다음과 같이 코드 사용
```php
<br>\n
```

