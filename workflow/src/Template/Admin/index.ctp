<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>管理画面</title>
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
	    <div class="col-xs-12 col-md-push-3 col-md-6">
	        <div class="row">
	            <label for="shonin">承認待ち：</label>
	            <label for="kensu">0</label>
	            <label for="ken">件</label>
	            <br/><br/><br/>
	            <label for="keyword">キーワード：</label>
	            <input type="text" name="keyword"/>
	            
	            <label for="shinseibi">申請日：<input type="number" name="to" maxlength="8"/></label>
	            
	            <label for="between">～<input type="number" name="from" maxlength="8"/></label>
	            
	            <br/>
	            <label for="shinseisho">申請書：</label>
	            <select name="example">
	                <option value="選択肢1">選択肢1</option>
	                <option value="選択肢2">選択肢2</option>
	                <option value="選択肢3">選択肢3</option>
	            </select>
	            <input type="button" value="申請日"/>
	            <input type="button" value="申請書"/>
	            <input type="button" value="申請者"/>
	            <input type="button" value="状態"/>
	            <input type="button" value="文章番号"/>

	            <?php
	                foreach($names as $name) {
	                	echo($name->apply_date);
	                	echo($name->type);
	                	//echo($name->);
	                	echo($name->status);
	                	echo($name->apply_id);
	                }
	                ?>
	                echo '<br />';
	                <?php
                 ?>
	        </div>
<!--
            <div class="col-xs-12 col-md-push-3 col-md-6">
                <div class="form-wrap">
                    <div class="text-center"><h1>社員管理</h1></div>
                    <br/>
                    <form role="form" action="#" method="post" id="login-form" autocomplete="off">
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
-->
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