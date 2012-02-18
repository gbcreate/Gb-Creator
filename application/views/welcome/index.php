<!doctype html>
<html>
    <head>
	<title>Welcome View File</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
    <body>
	<span>Hello, <?=$name?></span><br />
	
	<?=Form::open(Url::site('/welcome/index/' . Request::$current->param('id')))?>
	Post:<span><?=Arr::get($data, 'name')?></span><br />
	<?=Form::label('name', 'Your name:')?>
	<?=Form::input('name', Request::$current->param('id'), array('id' => 'name', 'class' => 'wow'))?><br />
	<?=Form::close()?>
    </body>
</html>