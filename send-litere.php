<?php
defined( 'ABSPATH' ) || exit;

add_action('wp_ajax_send_integr', 'send_integr');
add_action('wp_ajax_nopriv_send_integr', 'send_integr');

function send_integr(){
    if(!isset($_POST['nonce'])) die( 'Oops');
    $nonce = $_POST['nonce'];

    // проверяем nonce код, если проверка не пройдена прерываем обработку
    if( ! wp_verify_nonce( $nonce, 'sendintegr-nonce' ) ) die( 'Oops');

    // Получаем данные POST и выводим результат
    $name         =  trim($_POST['name']);
    $phone        =  trim($_POST['phone']);
    $email        =  trim($_POST['email']);
    $form_subject =  'Письмо со страницы Интеграция Asterisk с Active Directory';

    $message = '<tr style="background-color: #f8f8f8;">
			<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Имя: </b></td>
			<td style="padding: 10px; border: #e9e9e9 1px solid;">'.$name.'</td>
		</tr>';
    $message .= '<tr style="background-color: #f8f8f8;">
			<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Телефон: </b></td>
			<td style="padding: 10px; border: #e9e9e9 1px solid;">'.$phone.'</td>
		</tr>';
    $message .= '<tr style="background-color: #f8f8f8;">
			<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Емал: </b></td>
			<td style="padding: 10px; border: #e9e9e9 1px solid;">'.$email.'</td>
		</tr>';


    $message = '<table style="width: 100%;">'.$message.'</table>';

    $to = array(
        'info@takemycall.ru',
        'a.grushko@voxlink.ru'
    );

    //$to='romanmereneanu@gmail.com';

    $mail = wp_mail($to, $form_subject, $message, array('Content-type: text/html; charset=utf-8'));

    if ( $mail ){
        print json_encode( array('success' => true));
    } else {
        print json_encode( array('error' => false));
    }

    wp_die();
}
