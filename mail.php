<?
// if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){
    $title = $_POST['title'];
       $formData = "Заказ расчета стоимости";
       $message = '
          <html>
              <head>
                  <title>'.$subject.'</title>
              </head>
              <body>
                  <p>Имя: '.$_POST['first-name'].'</p>
                  <p>Телефон: '.$_POST['telephone'].'</p>
                  <p>Email: '.$_POST['email'].'</p>
                  <p>Сообщение: '.$_POST['message'].'</p>                  
              </body>
          </html>';
          
  $to = 'info@spb-progress78.ru';
  $subject = $title;
  $headers  = "Content-type: text/html; charset=utf-8 \r\n";
  $headers .= "From: Отправитель <from@example.com>\r\n";
  mail($to, $subject, $message, $headers);
// }
?>