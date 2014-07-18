<!DOCTYPE HTML>
<html>
<head>
  <script type="text/javascript">
  
  	nk = {};
  	nk.options = {};
  	nk.options.ssl_domain = 'nk.pl';
  	nk.options.domain = 'nk.pl';
  	nk.OAuth = {};
  
  	(function()
  	{
  		try
  		{
  			var oAuthWindow = null;
  			if(window.opener && window.opener.isDestOAuthWindow)
  				oAuthWindow = window.opener;
  			else if(window.parent && window.parent.isDestOAuthWindow)
  				oAuthWindow = window.parent;
  
  			if((/access_token=/.test(window.location.hash) || (/error=/.test(window.location.hash))) && oAuthWindow)
  			{
  				oAuthWindow.naszaKlasaCallback = window.location.href + "&dest_frame=true";
  				window.close();
  			}
  		}
  		catch(b){}
  	})();
  
  </script>
</head>
<body>
</body>
</html
