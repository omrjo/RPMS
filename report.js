		function start()
		{
			var button = document.getElementById('report');
			button.addEventListener("click",transfer,false)
		}
		function transfer()
		{
			document.location.href = 'NewReport.html';
		}
		window.addEventListener("load",start,false);