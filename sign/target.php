<?php
$user = array(1=>'李静', 2=>'张武', 3=>'孙志', 4=>'孙文', 5=>'王伟', 7=>'周栋', 8=>'李星', 9=>'王雯', 10=>'李吉祥', 11=>'万如意');
echo '用户所在业务线CID：' . $_GET['cid'] . '<br/>';
echo '用户的UID:' . $_GET['uid']. '<br/>';
echo '用户的姓名:' . $user[ $_GET['uid'] ]. '<br/>';