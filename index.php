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
}

$GitTest =  new GitTest();
$GitTest->messageTest();
?>