<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0042)# -->
    <html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>欢迎页</title>
    <!-- Bootstrap core CSS -->
    <link href="/Public/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/home/css/index.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    
  <style type="text/css" media="screen">
   body{
    background-color: #777777;
   }
  </style>

</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">简书</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav" style="float: right;">
           <li class="active"><a href="#">欢迎</a></li>
            <li><a href="#login"  data-toggle="modal">登陆</a></li>
            <li><a href="#register" data-toggle="modal">注册</a></li>
            <li><a href="#about"  data-toggle="modal">关于</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    

<div class="container">
<div class="row row-offcanvas row-offcanvas-right">
    
<br><div style="">
    <div class="container theme-showcase" role="main" style="margin-top: 10%;">
    <div class="jumbotron">
      <h2>知乎 - 与世界分享你的知识、经验和见解</h2>
      <p>一个真实的网络问答社区，帮助你寻找答案，分享知识。  知乎 与世界分享你的知识、经验和见解.</p>
      <p style="text-align: right;"><a  class="btn btn-primary btn-lg" href="#login"  data-toggle="modal" role="button">立刻前往</a></p>
    </div>
</div>
</div>

    

</div>

</div>


            <!-- 用户注册 -->
            <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">注册</h4>
                  <form  action="/Home/user/register" method="post" accept-charset="utf-8">
                  <div class="modal-body">

                        <div class="form-group has-feedback" id="reg-name-div">
                          <label class="control-label" for="inputSuccess2"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 用户名</label><span id="name-tip" style="float: right; background-color: #FCF8E3; color: #DFA95A;" class="badge"></span>
                          <input type="text" class="form-control" id="reg_userName" aria-describedby="inputSuccess2Status" placeholder="UserName" required="" name="userName">
                            <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true" id="namespan"></span>
                        </div>

                        <div class="form-group has-feedback" id="reg-email-div">
                          <label class="control-label" for="inputSuccess2"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 电子邮箱</label><span id="email-tip" style="float: right; background-color: #FCF8E3; color: #DFA95A;" class="badge"></span>
                          <input type="email" class="form-control" id="reg_email" aria-describedby="inputSuccess2Status" placeholder="UserName" required="" name="email">
                            <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true" id="emailspan"></span>
                        </div>

                        <div class="form-group has-feedback" id="reg-pwd-div">
                          <label for="reg_password"> <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> 密码</label><span id="pwd-tip" style="float: right; background-color: #FCF8E3; color: #DFA95A;" class="badge"></span>
                          <input type="password" class="form-control" id="reg_password" placeholder="Password" required="" minlength="6" maxlength="20" name="password">
                          <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true" id="regpwdspan"></span>
                        </div>

                        <div class="form-group has-feedback" id="reg-conpwd-div">
                          <label for="confirmPwd"> <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> 密码确认</label><span id="conpwd-tip" style="float: right; background-color: #FCF8E3; color: #DFA95A;" class="badge"></span>
                          <input type="password" class="form-control" id="confirmPwd" placeholder="Confirm password" required="" name="confirmPwd">
                          <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true" id="regcompwdspan"></span>
                        </div>

                        <div class="form-group has-feedback" id="reg-conpwd-div">
                          <label for="gender"> <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> 性别选择</label><span id="conpwd-tip" style="float: right; background-color: #FCF8E3; color: #DFA95A;" class="badge"></span>
                              <select class="form-control" name="gender" required="">
                                  <option value="0">保密</option>
                                  <option value="1">男</option>
                                  <option value="2">女</option>
                              </select>
                        </div>

                        <div class="form-group has-feedback" id="reg-conpwd-div">
                          <label for="birthday"> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 出生日期</label><span id="conpwd-tip" style="float: right; background-color: #FCF8E3; color: #DFA95A;" class="badge"></span>
                            <input type="date" class="form-control" name="birthday" required="" value="" placeholder="">
                        </div>
                  </div>


                  <div class="modal-footer">
                  <button type="reset" style="float: left;">重置</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" id="reg" class="btn btn-primary">提交信息</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

            <!-- 用户登录 -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">登陆</h4>
                  </div>
                  <form action="/Home/user/login" method="post" accept-charset="utf-8">
                      <div class="modal-body">
                        <div class="form-group has-feedback" id="log-email-div">
                          <label class="control-label" for="inputSuccess2"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 电子邮箱</label>
                          <input type="email" class="form-control" aria-describedby="inputSuccess2Status" placeholder="UserName" required="" name="email" id="email">
                            <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true" id="log-emailspan"></span>
                        </div>

                        <div class="form-group has-feedback" id="log-pwd-div">
                          <label for="reg_password"> <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> 密码</label>
                          <input type="password" class="form-control" placeholder="Password" required="" minlength="6" maxlength="20" name="password" id="password">
                          <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true" id="log-pwdspan"></span>
                        </div>
                      <div class="form-group has-feedback" id="log-name-div">
                        <label class="control-label" for="inputSuccess2"> <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> 验证码:</label>
                        <input type="text" class="form-control"aria-describedby="inputSuccess2Status" placeholder="UserName" required="" name="vcode" id="vcode" maxlength="4">
                          <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true" id="vcodespan"></span>
                      </div>
                      <img src="/Home/user/captche" alt="验证码" style="width: 150px;height: 70px;" onclick="javascript:this.src = '/Home/user/captche/'+Math.random();">
                      <br>
                      <br>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="keep"> 记住我
                          </label>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default"  style="float: left;"><a href="#" title="忘记密码">忘记密码</a></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary" id="loginu">登入</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">关于</h4>
                  </div>
                  <div class="modal-body">
                        这是关于页面
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                  </div>
                </div>
              </div>
            </div>

<script src="/Public/home/js/jquery.min.js"></script>
<script src="/Public/home/js/bootstrap.min.js"></script>
<script src="/Public/home/js/offcanvas.js"></script>

<?php if(isset($login)): ?><script>
  $(document).ready(function() {
      $('#login').modal('show');
  });
  </script><?php endif; ?>
<script src="/Public/home/js/logreg.js" type="text/javascript" charset="utf-8" async defer></script>


</body>
</html>