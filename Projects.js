		function start()
		{
			var button = document.getElementById('report');
			button.addEventListener("click",transfer,false)
		}
		function transfer()
		{
			document.location.href = 'Reports.php';
		}
		window.addEventListener("load",start,false);