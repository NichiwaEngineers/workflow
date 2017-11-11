<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
	<meta charset="utf-8" />
	<title>休出休暇申請</title>
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
	    h1 {
	        margin-bottom: 20px;
	    }
    </style>
</head>
<body>
    <nav class="navvar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">休出休暇申請</div>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span>　ログアウト</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form method="post" action="#" class="form-horizontal">
                    <div class="form-group">
                        <label for="employeeId" class="control-label col-sm-2">申請日</label>
                        <div class="col-sm-2">
                            <input type="text" name="employeeId" id="employeeId" class="form-control input-sm" value="2017/04/21" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="employeeId" class="control-label col-sm-2">社員番号</label>
                        <div class="col-sm-2">
                            <input type="text" name="employeeId" id="employeeId" class="form-control input-sm" value="T00040" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="employeeId" class="control-label col-sm-2">部署</label>
                        <div class="col-sm-2">
                            <input type="text" name="employeeId" id="employeeId" class="form-control input-sm" value="システム開発事業部" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label col-sm-2">申請者</label>
                        <div class="col-sm-2">
                            <input type="text" name="name" id="name" class="form-control input-sm" value="日和太郎" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position" class="control-label col-sm-2">申請種別</label>
                        <div class="col-sm-2">
                            <select name = "type" class="form-control input-sm" id="position">
                            	<option value = "1">申請種別を選択</option>
                            	<option value = "2">休暇</option>
                            	<option value = "3">休出</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber" class="control-label col-sm-2">休暇日</label>
                        <div class="col-sm-2">
                            <input type="text" name="phoneNumber" id="phoneNumber" class="form-control input-sm" value="" placeholder="2017/04/21"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position" class="control-label col-sm-2">休暇種別</label>
                        <div class="col-sm-2">
                            <select name = "type" class="form-control input-sm" id="position">
                            	<option value = "1">休暇種別を選択</option>
                            	<option value = "2">有給休暇</option>
                            	<option value = "3">特別休暇</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" value="confirm" class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	    
	<script type="text/javascript">
	    $(document).ready(function() {
	        $('#code').focus();
	    });
    </script>
</body>
</html>