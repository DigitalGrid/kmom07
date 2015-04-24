<?php

namespace Chja\Cfmessage;

/**
 * Class for flashing messages. This class works with Anax/MVC
 */
class CfmessageAnax implements \Anax\DI\IInjectionAware
{
	use \Anax\DI\TInjectable;
	
	
	/**
	 * Adds a message to the session
	 *
	 * @param $type The type could be info, warning, success or error
	 * @param $content The message
	 *
	 * @return void
	 */
	public function addMessage($type, $content)
	{
		if($this->session->has('Cfmessage')) {
			$messages = $this->session->get('Cfmessage', []);
		}
		
		$messages[] = [
			'content' => $content,
			'type' => $type,
		];
		
		$this->session->set('Cfmessage', $messages);
	}
	
	/**
	 * Adds a success message
	 *
	 * @param $content The message
	 *
	 * @return void
	 */
	public function addSuccess($content)
	{
		$content = '<i class="fa fa-check"></i> ' . $content;
		$this->addMessage('success', $content);
	}
	 
	
	/**
	 * Adds an error message
	 *
	 * @param $conent The message
	 *
	 * @return void
	 */
	public function addError($content)
	{
		$content = '<i class="fa fa-times"></i> ' . $content;
		$this->addMessage('error', $content);
	}
	
	
	/**
	 * Adds a warning message
	 *
	 * @param $content The message
	 *
	 * @return void
	 */
	public function addWarning($content)
	{
		$content = '<i class="fa fa-warning"></i> ' . $content;
		$this->addMessage('warning', $content);
	}
	
	
	/**
	 * Adds a notice message
	 * 
	 * @param $content The message
	 *
	 * @return void
	 */
	public function addNotice($content)
	{
		$content = '<i class="fa fa-info"></i> ' . $content;
		$this->addMessage("info", $content);
	}
	
	
	/**
	 * Print out all messages
	 *
	 * @return $html All stored messages
	 */
	public function printMessage()
	{
		$messages = $this->session->get('Cfmessage', []);
		$html = '';
		
		foreach($messages as $message) {
			$html .= '<div class="message ' . $message['type'] . '"><p>' . $message['content'] . '</p></div>';
		}
		
		$this->clearSession();
	
		return $html;
	}
	
	
	/**
	 * Clear the session
	 *
	 * @return void
	 */
	public function clearSession()
	{
		$this->session->set('Cfmessage', null);
	}
 
}