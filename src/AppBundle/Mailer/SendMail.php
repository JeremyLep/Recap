<?php

namespace AppBundle\Mailer;

class SendMail
{
	protected $mailer;
	protected $twig;

	public function __construct(\Swift_Mailer $mailer, \Twig_Environment $twig)
	{
		$this->mailer = $mailer;
		$this->twig   = $twig;
	}

	public function sendMail($template, array $dataTemplate, $subject, $to)
	{
		$body 	 = $this->renderMailTemplate($template, $dataTemplate);
    	$message = \Swift_Message::newInstance()
    		->setSubject($subject)
    		->setContentType("text/html")
    		->setFrom('recap@support.com')
    		->setTo($to)
    		->setBody($body);

    	$this->mailer->send($message);
	}

	public function renderMailTemplate($template, array $dataTemplate)
	{
		return $this->twig->render(
    		$template,
    		$dataTemplate
    	);
	}
}