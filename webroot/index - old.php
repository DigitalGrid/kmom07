<?php

// Get environment & autoloader.
require __DIR__.'/config_with_app.php'; 

// Create services and inject into the app. 
$di  = new \Anax\DI\CDIFactoryDefault();

$di->set('form', '\Mos\HTMLForm\CForm'); 

$di->set('CommentController', function() use ($di) {
    $controller = new \Anax\Comment\CommentController();
    $controller->setDI($di);
    return $controller;
});


$di->set('Cfmessage', function() use ($di) {
    $message = new \Chja\Cfmessage\CfmessageAnax();
    $message->setDI($di);
    return $message;
}); 


$di->set('UsersController', function() use ($di) {
    $controller = new \Anax\Users\UsersController();
    $controller->setDI($di);
    return $controller;
});


$di->setShared('db', function() {
    $db = new \Mos\Database\CDatabaseBasic();
    $db->setOptions(require ANAX_APP_PATH . 'config/database_sqlite.php');
    $db->connect();
    return $db;
});

$app = new \Anax\Kernel\CAnax($di); 

// Configure (theme file, navbar file)
$app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN);
$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');

$app->session(); // Will load the session service which also starts the session 
 
// Hem
$app->router->add('', function() use ($app) {

	$app->theme->setTitle("Hem");
	
	$content = $app->fileContent->get('me.md');
	$content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    $byline  = $app->fileContent->get('byline.md');
	$byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
	
	$app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);
	
	$app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
		'params' =>  ['me'],
    ]);
	
	$app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'add',
		'params' =>  ['me'],
    ]);

});

//Tema
$app->router->add('theme', function() use ($app) {
    $app->theme->configure(ANAX_APP_PATH . 'config/theme-grid.php');
    $app->theme->setTitle("Tema");
	
	$test_content = $app->fileContent->get('test-content.md');
	$test_content = $app->textFilter->doFilter($test_content, 'shortcode, markdown');
	$content = $app->fileContent->get('typography.html');
	$larger_icons = $app->fileContent->get('larger-icons.html');
	$ex_icons = $app->fileContent->get('example-icons.html');
	
	
	
	$app->views->addString($content, 'main')
			   ->addString($larger_icons, 'sidebar')
			   ->addString($ex_icons, 'sidebar')
			   ->addString($test_content, 'featured-1')
               ->addString($test_content, 'featured-2')
               ->addString($test_content, 'featured-3')
			   ->addString($test_content, 'footer-col-1')
			   ->addString($test_content, 'footer-col-2')
			   ->addString($test_content, 'footer-col-3')
			   ->addString($test_content, 'footer-col-4');
});

$app->router->add('regioner', function() use ($app) {
	$app->theme->configure(ANAX_APP_PATH . 'config/theme-grid.php');
    $app->theme->addStylesheet('css/anax-grid/regions_demo.css');
	$app->theme->addStylesheet('css/anax-grid/grid.css');

    $app->theme->setTitle("Regioner");
 
    $app->views->addString('flash', 'flash')
               ->addString('featured-1', 'featured-1')
               ->addString('featured-2', 'featured-2')
               ->addString('featured-3', 'featured-3')
               ->addString('main', 'main')
               ->addString('sidebar', 'sidebar')
               ->addString('triptych-1', 'triptych-1')
               ->addString('triptych-2', 'triptych-2')
               ->addString('triptych-3', 'triptych-3')
               ->addString('footer-col-1', 'footer-col-1')
               ->addString('footer-col-2', 'footer-col-2')
               ->addString('footer-col-3', 'footer-col-3')
               ->addString('footer-col-4', 'footer-col-4');
 
});

$app->router->add('typography', function() use ($app) {
	$app->theme->configure(ANAX_APP_PATH . 'config/theme-grid.php');
    $app->theme->addStylesheet('css/anax-grid/grid.css');
    $app->theme->setTitle("Typografi");
	
	$content = $app->fileContent->get('typography.html');
	
	$app->views->addString($content, 'main')
			   ->addString($content, 'sidebar');
			   
});

$app->router->add('font_awesome', function() use ($app) {
	$app->theme->configure(ANAX_APP_PATH . 'config/theme-grid.php');
    $app->theme->addStylesheet('css/anax-grid/grid.css');
    $app->theme->setTitle("Font Awesome");
	
	$sidebar = $app->fileContent->get('larger-icons.html');
	$content = $app->fileContent->get('example-icons.html');
	
	$app->views->addString($content, 'main')
			   ->addString($sidebar, 'sidebar');
			   
});





// Redovisning
$app->router->add('redovisning', function() use ($app) {
 
    $app->theme->setTitle("Redovisning");
 
    $content = $app->fileContent->get('redovisning.md');
	$content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    $byline  = $app->fileContent->get('byline.md');
	$byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
 
    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);
 
});

// Kommentarer
$app->router->add('kommentarer', function() use ($app) {

	$app->theme->setTitle("Kommentarer");
	$app->views->add('comment/index');
	
	$app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
		'params' =>  ['kommentarer'],
    ]);
	
	$app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'add',
		'params' =>  ['kommentarer'],
    ]);	

});

// Meddelanden
$app->router->add('cfmessage', function() use ($app) {

    //$app->theme->addStylesheet('../vendor/chja/cfmessage/webroot/css/message.css');
    
	$app->theme->setTitle("Test av flashmeddelanden");
    
    $app->Cfmessage->addNotice('This is an information message'); 
    $app->Cfmessage->addError('This is an error message'); 
    $app->Cfmessage->addWarning('This is a warning message'); 
    $app->Cfmessage->addSuccess('This is a success message'); 
      
    // Add content
    $app->views->add('me/page', [
        'content' => 'Här kan du prova om Cfmessage fungerar. Det ska finnas ett info, error, varning och ett meddelande som visar att allt har gått bra',
    ]);
    
    $messages = $app->Cfmessage->printMessage();
	
    $app->views->addString($messages);

}); 
	
	
 
// Källkod
$app->router->add('source', function() use ($app) {
 
    $app->theme->addStylesheet('css/source.css');
    $app->theme->setTitle("Källkod");
 
    $source = new \Mos\Source\CSource([
        'secure_dir' => '..', 
        'base_dir' => '..', 
        'add_ignore' => ['.htaccess'],
    ]);
 
    $app->views->add('me/source', [
        'content' => $source->View(),
    ]);
 
});

 
// Check for matching routes and dispatch to controller/handler of route
$app->router->handle();

// Render the page
$app->theme->render();