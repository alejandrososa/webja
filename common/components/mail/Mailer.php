<?php

namespace app\mail;

use app\models\Mail;
use yii\mail\MessageInterface;
use yii\swiftmailer\Mailer as RealMailer;

/**
 * 
 */
class Mailer extends RealMailer {

    /**
     * @param MessageInterface $message
     * @return boolean
     */
    public function send($message) {
        $result = parent::send($message); //Send mail
        $this->createLog($result, $message);
        return $result;
    }

    /**
     * Will write log to database
     * @param boolean $result
     * @param MessageInterface $message
     */
    public function createLog($result, $message) {
        $mail = new Mail;
        $mail->estado = $result ? Mail::IS_SENT : Mail::IS_NOT_SENT;
        $mail->created_at = time();
        $mail->controller = \Yii::$app->controller->id;
        $mail->action = \Yii::$app->controller->action->id;
        $temp = []; //store emails as string
        foreach ($message->getTo() as $email => $name) {
            $temp[] = $email;
        }
        $mail->emails = implode(', ', $temp);
        $mail->body = $message->toString();
        $mail->save();
    }

}
