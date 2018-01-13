<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>ログイン画面</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
	<style type="text/css">
	    body {
	        padding-top: 70px;
	    }
	    .navbar-brand {
	        font-size: 24px;
	    }
	    .form-group {
	        margin-bottom: 5px;
	    }
	</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-push-3 col-md-6">
                <div class="form-wrap">
                    <div class="text-center"><h1>社員管理</h1></div>
                    <br/>
                    <form role="form" action="/workflow/Request/" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="id" class="sr-only">ID</label>
                            <input type="text" name="id" id="id" class="form-control" placeholder="ID を入力して下さい"/>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password を入力して下さい"/>
                        </div>
                        <br/>
                        <button id="btn-login" class="btn btn-primary btn-block">ログイン</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<script type="text/javascript">
	    $(document).ready(function() {
	        $('#id').focus();
	    });
    </script>
</body>
</html>