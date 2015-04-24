<?php

namespace Chja\Cfmessage;

/**
 * Class for flashing messages
 */
class CfmessageTest extends \PHPUnit_Framework_TestCase
{
	
	
	
	/**
     * Test 
     *
     * @return void
     *
     */
    public function testAddMessage() 
    {
        $el = new \Chja\Cfmessage\Cfmessage();
		
		$el->addMessage('type', 'content');
		$res = $el->printMessage();
		$exp = '<div class="message type"><p>content</p></div>';
		$this->assertEquals($res, $exp, "Message does not match");
		
		$messages[] = [
			'content' => 'content',
			'type' => 'type',
		];
		
		$_SESSION['Cfmessage'] = $messages;
		
		$el->addMessage('type', 'content');
		$res = $el->printMessage();
		$exp = '<div class="message type"><p>content</p></div><div class="message type"><p>content</p></div>';
		$this->assertEquals($res, $exp, "Message does not match");
    }
	
	
	/**
     * Test 
     *
     * @return void
     *
     */
    public function testAddSuccess() 
    {
        $el = new \Chja\Cfmessage\Cfmessage();
		
		$el->addSuccess('content');
		$res = $el->printMessage();
		$exp = '<div class="message success"><p><i class="fa fa-check"></i> content</p></div>';
		
		$this->assertEquals($res, $exp, "Message does not match");
    }
	
	
	/**
     * Test 
     *
     * @return void
     *
     */
    public function testAddError() 
    {
        $el = new \Chja\Cfmessage\Cfmessage();
		
		$el->addError('content');
		$res = $el->printMessage();
		$exp = '<div class="message error"><p><i class="fa fa-times"></i> content</p></div>';
		
		$this->assertEquals($res, $exp, "Message does not match");
    }
	
	
	/**
     * Test 
     *
     * @return void
     *
     */
    public function testAddWarning() 
    {
        $el = new \Chja\Cfmessage\Cfmessage();
		
		$el->addWarning('content');
		$res = $el->printMessage();
		$exp = '<div class="message warning"><p><i class="fa fa-warning"></i> content</p></div>';
		
		$this->assertEquals($res, $exp, "Message does not match");
    }
	
	
	/**
     * Test 
     *
     * @return void
     *
     */
    public function testAddNotice() 
    {
        $el = new \Chja\Cfmessage\Cfmessage();
		
		$el->addNotice('content');
		$res = $el->printMessage();
		$exp = '<div class="message info"><p><i class="fa fa-info"></i> content</p></div>';
		
		$this->assertEquals($res, $exp, "Message does not match");
    }
	
	
	/**
     * Test 
     *
     * @return void
     *
     */
    public function testClearSession() 
    {
        $el = new \Chja\Cfmessage\Cfmessage();
		
		$_SESSION['Cfmessage'] = 'test';
		$el->clearSession();
		$this->assertNull($_SESSION['Cfmessage'],'andra', 'Session was not cleared');
    }
 
}