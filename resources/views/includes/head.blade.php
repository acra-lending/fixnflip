<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Acra Lending - Fix And Flip</title>
<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
<link rel="stylesheet" href="css/morphext.css">
<!-- Core theme CSS (includes Bootstrap)-->
<link href="css/styles.css?ver=5" rel="stylesheet" />
{!! htmlScriptTagJsApi([
    'action' => 'homepage',
    'callback_then' => 'callbackThen',
    'callback_catch' => 'callbackCatch'
]) !!}
<script type="text/javascript">
    function callbackThen(response){
        // read HTTP status
        console.log(response.status);
        
        // read Promise object
        response.json().then(function(data){
            console.log(data);
        });
    }
    function callbackCatch(error){
        console.error('Error:', error)
    }   
</script>  