<?
$SITE_TITLE = 'SOL';
$SITE_DESCR = '';
if(isset($_POST)){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $to = '';

    $headers = "From: " . "SOL" . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    $data .= 'Имя: '.$name."<br>";
    $data .= 'Email: '.$email."<br>";

    $message = "<div style='background:#ccc;border-radius:10px;padding:20px;'>
                ".$data."
                <br>\n
                <hr> \n
                <br>\n
                <small>это сообщение было отправлено с сайта ".$SITE_TITLE." - ".$SITE_DESCR.", отвечать на него не надо</small>\n</div>";
    $send = mail($to, $subject, $message, $headers);

    if($send){
        echo '';
    } else {
        echo '<div class="error">Ошибка отправки формы</div>';
    }

} else {
    echo '<div class="error">Ошибка, данные формы не переданы.</div>';
}
die();
?>