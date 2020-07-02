<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<div class="container">
	<p>
		<button class="btn btnstyle btn-a icon forward"> forward </button>
	</p>
	
	<p>
		<button class="btn btnstyle btn-b icon Left"> Left </button>

		<button class="btn btnstyle btn-c icon stop"> Stop </button>

		<button class="btn btnstyle btn-d icon Right"> Right </button>
   </p>
	<p>

		<button class="btn btnstyle btn-a icon backward "> backward  </button>


	</p>
	

</div>
</form>
</body>
</html>
<<?php 

function test($val){

return $val;
}
if(isset($_POST['sub']))
{
	echo test($_POST['sub']);
}




 ?>