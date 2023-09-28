<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

    function db_connect() {
        require( 'config.php' );
        return mysqli_connect( $config[ 'db_host' ], $config[ 'db_user'], $config[ 'db_password' ], $config[ 'db_table' ] );
    }

    function create_table() {
        // database connection
        $db = db_connect();
        // check if table already exists
        $sql = "SHOW TABLES LIKE 'user'";
        $result = mysqli_query( $db, $sql );
        // if not exists ...
        if( mysqli_num_rows( $result ) === 0 ) {
            $sql = "CREATE TABLE IF NOT EXISTS user (
                id INT AUTO_INCREMENT PRIMARY KEY,
                prename VARCHAR( 50 ) NOT NULL,
                lastname VARCHAR( 50 ) NOT NULL,
                e_mail VARCHAR( 100 ) NOT NULL,
                company VARCHAR( 100 ) NOT NULL,
                street VARCHAR( 100 ) NOT NULL,
                postal_code VARCHAR(5) NOT NULL,
                location VARCHAR( 100 ) NOT NULL,
                remarks VARCHAR( 255 ) NOT NULL,
                report VARCHAR( 8 ) NOT NULL,
                datetime DATETIME NOT NULL
            )";
            if( mysqli_query( $db, $sql ) ) {
                echo 'Datenbanktabelle erstellt';
            } else {
                echo 'Fehler beim Erstellen der Datenbanktabelle: ' . mysqli_error( $db );
            }
        }
        // close connection
        mysqli_close( $db );
    }
    create_table();

    function formsubmit( $postdata ) {
        require( 'config.php' );
        if( $postdata[ 'company' ] === '' || $postdata[ 'street' ] === '' || $postdata[ 'postal_code' ] === '' || $postdata[ 'location' ] === '' ) {
            $return = 'download';
        } else {
            $return = 'mailing';
        }
        $sql = "INSERT INTO user (
            prename,
            lastname,
            e_mail,
            company,
            street,
            postal_code,
            location,
            remarks,
            report,
            datetime
        ) VALUES (
            '" . $postdata[ 'prename' ] . "',
            '" . $postdata[ 'lastname' ] . "',
            '" . $postdata[ 'email' ] . "',
            '" . $postdata[ 'company' ] . "',
            '" . $postdata[ 'street' ] . "',
            '" . $postdata[ 'postal_code' ] . "',
            '" . $postdata[ 'location' ] . "',
            '" . $postdata[ 'remarks' ] . "',
            '" . $return . "',
            '" . date( 'Y-m-d H:i:s' ) . "'
        );";
        $db = db_connect();
        mysqli_set_charset('utf8'); // mysqli extension
        mysqli_query( $db, $sql );
        // send mail
        $request = $return === 'mailing' ? 'Post' : 'Download';
        $params = array(
            'to'        =>  $config[ 'mail_receiver' ],
            'subject'   =>  $config[ 'mail_subject' ],
            'message'   =>  '
                Vorname: ' . $postdata[ 'prename' ] . '<br>
                Nachname: ' . $postdata[ 'lastname' ] . '<br>
                E-Mail: ' . $postdata[ 'email' ] . '<br>
                Firma: ' . $postdata[ 'company' ] . '<br>
                Straße: ' . $postdata[ 'street' ] . '<br>
                PLZ: ' . $postdata[ 'postal_code' ] . '<br>
                Ort: ' . $postdata[ 'location' ] . '<br>
                Anmerkungen: ' . $postdata[ 'remarks' ] . '<br>
                Angefordert: ' . $request ,
            'headers'     =>    []
        );

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.strato.de ';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'website@immotisscare.com';                     //SMTP username
            $mail->Password   = 'zzvq-}sxf>:=>sgn';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->CharSet   = 'UTF-8';
            $mail->Encoding  = 'base64';

            //Recipients
            $mail->setFrom('website@immotisscare.com', 'IMMOTISS Website');
            $mail->addAddress('bak@immotisscare.de');
            $mail->addReplyTo($postdata[ 'email' ]);
            // $mail->addBCC('kristo@starkundkreativ.de');

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'SEWO23 - ' . $request;
            $mail->Body = $params[ 'message' ];

            $mail->send();
        } catch (Exception $e) {
            die("Message could not be sent. Mailer Error: " . $mail->ErrorInfo);
        }

        return $return;
    }
?>