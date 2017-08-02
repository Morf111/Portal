<?php
class GitTest
{
	public function __construct()
	{
		echo 'Hello GIT';
	}
	
	public function __destruct()
	{
		echo 'Bye GIT';
	}
	
	public function messageTest()
	{
		echo 'Function message Test';
	}
	
	public function messageTestWithParam($input)
	{
		echo $input;
	}	
}

$GitTest =  new GitTest();
$GitTest->messageTest();
$GitTest->messageTestWithParam('Test');
?>