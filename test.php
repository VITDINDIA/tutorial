

<html>
<head>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your-app-id',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.0'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    
<title>infoblogging => Upload CSV and Insert into Database Using PHP</title>
<head>
<body>
<form method='POST' enctype='multipart/form-data'>
Upload CSV FILE: <input type='file' name='csv_data' /> <input type='submit' name='submit' value='Upload File' />
</form>
</body>
</html>
