<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        /*
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->subject)
                //->setTextBody($this->body)
                ->setHtmlBody($this->body)
                ->send();

            return true;
        }
        */

        $from = $this->name . "<info@blonder413.wordpress.com>";
        $subject = "Contacto desde mi web";
        $body = "
            <html>
            <body>
            <strong>Asunto</strong>:<br>
            $this->subject<br>
            <strong>Nombre</strong>:<br>
            $this->name<br>
            <strong>E-mail</strong>:<br>
            $this->email<br>
            <strong>Mensaje</strong>:<br>
            $this->body<br>
            <body>
            </html>
        ";

        $sheader = "From:" . $from . "\nReply-To:" . $from . "\n";
        $sheader = $sheader . "X-Mailer:PHP/" . phpversion() . "\n";
        $sheader = $sheader . "Mime-Version: 1.0\n";
        $sheader = $sheader . "Content-Type: text/html";

        mail("usuario@outlook.com", $subject, $body, $sheader);

        return true;
    }
}
