<?php

    $pwd_input = $_POST['showdownload_pwd'];
    $md5_salt = '564zenliver78797877sfsfsfsfs';
    $pwd_input_md5 = md5(md5(md5($pwd_input.$md5_salt)));
    $pwd_input_set_md5 = $_POST['showdownload_pwd_set'];
    $showdownload_page_url = $_POST['showdownload_page_url'];
    date_default_timezone_set("Asia/Shanghai");
    $dlcode_salt_salt = '523zenliver546565';
    $dlcode_salt = md5(md5(md5(date('YmdHis').$dlcode_salt_salt)));
    // $dlcode_salt = date('YmdHis');
    // print_r($pwd_input_set_md5);
    // print_r($pwd_input_md5);
    // print_r($showdownload_page_url);
    if ($pwd_input_md5 == $pwd_input_set_md5) {
        echo <<<HTML
            <script type="text/javascript">
                window.location.href = "$showdownload_page_url"+"&dlpwdcode"+"$dlcode_salt"+"="+"$pwd_input_set_md5";
            </script>
HTML;
    } else {
        echo <<<HTML
            <script type="text/javascript">
                alert("Your password is incorrect!");
                window.history.back();
            </script>
HTML;
    }



?>
