<?php

class Mail{

    private String $to;
    private String $subject;
    private String $message;
    private String $from;

    /**
     * Mail constructor.
     * @param String $to
     * @param String $subject
     * @param String $message
     * @param String $from
     */
    public function __construct(string $to, string $subject, string $message, string $from){
        $this->setTo($to);
        $this->setSubject($subject);
        $this->setMessage($message);
        $this->setFrom($from);
    }

    /**
     * Return the consignee of the mail
     * @return String
     */
    public function getTo(): string{
        return $this->to;
    }

    /**
     * Set the consignee of the mail
     * @param String $to
     */
    public function setTo(string $to): void{
        $this->to = $to;
    }

    /**
     * Return the subject of the mail
     * @return String
     */
    public function getSubject(): string{
        return $this->subject;
    }

    /**
     * Set the subject of the mail
     * @param String $subject
     */
    public function setSubject(string $subject): void{
        $this->subject = $subject;
    }

    /**
     * Return the message of the mail
     * @return String
     */
    public function getMessage(): string{
        return $this->message;
    }

    /**
     * Set the message of the mail
     * @param String $message
     */
    public function setMessage(string $message): void{
        $this->message = $message;
    }

    /**
     * Return the owner of the mail
     * @return String
     */
    public function getFrom(): string{
        return $this->from;
    }

    /**
     * Set the owner of the mail
     * @param String $from
     */
    public function setFrom(string $from): void{
        $this->from = $from;
    }

    public function sendMail(){
        mail($this->getTo(), $this->getSubject(), $this->getMessage(), '-f'.$this->getFrom());
    }

}