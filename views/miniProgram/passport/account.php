<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>账户安全</title>
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="../../../public/css/login.css">
    <script type="text/javascript" src="../../../public/js/jquery.min.js"></script>
    <script src="../../../public/js/jquery.i18n.properties.min.js"></script>
    <script src="../../../public/js/template-web.js"></script>
    <script src="../../../public/js/zalyjsNative.js"></script>

</head>
<body>

<div class="zaly_container" >
    <div class="zaly_login zaly_site_register zaly_site_register-repwd" >
        <div class="login_input_div" >
            <div class="d-flex flex-row justify-content-center login-header " style="text-align: center;margin-top: 8rem;">
                <span class="login_phone_tip_font"  data-local-value="resetPwdTip">重置密码</span>
            </div>

            <div class="login_name_div login_name_div_mobile">
                <image src="../../public/img/login/loginName.png" class="img"/>
                <input type="text" class="input_login_site forget_input_loginName" datatype="s" autocapitalize="off"  data-local-placeholder="loginNamePlaceholder" placeholder="输入登录名">
                <img src="../../../public/img/msg/msg_failed.png" class="img-failed forget_input_loginName_failed">
                <div class="line"></div>
            </div>


            <div class="login_name_div forget_input_pwd_div margin-top2"  >
                <image src="../../public/img/login/pwd.png" class="img"/>
                <input type="password" class="input_login_site forget_input_oldPwd" autocapitalize="off"  data-local-placeholder="enterOldPasswordPlaceholder"  placeholder="输入旧密码" >
                <div class="pwd_div" onclick="changeImgByClickOldPwd()"><image src="../../public/img/login/hide_pwd.png" class="oldPwd" img_type="hide"/></div>
                <img src="../../../public/img/msg/msg_failed.png" class="img-failed forget_input_oldPwd_failed">

                <div class="line"></div>
            </div>

            <div class="login_name_div forget_input_pwd_div margin-top2"  >
                <image src="../../public/img/login/pwd.png" class="img"/>
                <input type="password" class="input_login_site forget_input_pwd"  autocapitalize="off"  data-local-placeholder="enterPasswordPlaceholder"  placeholder="输入密码,长度5到20个字符" >
                <div class="pwd_div" onclick="changeImgByClickPwd()"><image src="../../public/img/login/hide_pwd.png" class="pwd" img_type="hide"/></div>
                <img src="../../../public/img/msg/msg_failed.png" class="img-failed forget_input_pwd_failed">

                <div class="line"></div>
            </div>

            <div class="login_name_div forget_input_repwd_div margin-top2" >
                <image src="../../public/img/login/re_pwd.png" class="img"/>
                <input type="password" class="input_login_site forget_input_repwd" autocapitalize="off"   data-local-placeholder="enterRepasswordPlaceholder"  placeholder="再次输入密码"  >
                <div class="repwd_div" onclick="changeImgByClickRepwd()"><image src="../../public/img/login/hide_pwd.png" class="repwd" img_type="hide"/></div>
                <img src="../../../public/img/msg/msg_failed.png" class="img-failed forget_input_repwd_failed">

                <div class="line" ></div>
            </div>

            <div class="d-flex flex-row justify-content-center ">
                <button type="button" class="btn reset_pwd_button"><span class="span_btn_tip" data-local-value="updatePwdTip">修改密码</span></button>
            </div>
        </div>
    </div>
</div>
<script src="../../public/js/im/zalyKey.js"></script>
<script src="../../public/js/im/zalyAction.js"></script>
<script src="../../public/js/im/zalyClient.js"></script>
<script src="../../public/js/im/zalyBaseWs.js"></script>
<script type="text/javascript">
    var languageName = getLanguageName();
    var languageNum = getLanguage();
    jQuery.i18n.properties({
        name: "lang",
        path: '../../public/js/config/',
        mode: 'map',
        language: languageName,
        callback: function () {
            try {
                //初始化页面元素
                $('[data-local]').each(function () {
                    var changeData = $(this).attr("data-local");
                    var changeDatas = changeData.split(":");
                    var changeDataName = changeDatas[0];
                    var changeDataValue = changeDatas[1];
                    $(this).attr(changeDataName, $.i18n.map[changeDataValue]);
                });
                $('[data-local-value]').each(function () {
                    var changeHtmlValue = $(this).attr("data-local-value");
                    $(this).html($.i18n.map[changeHtmlValue]);
                });
                $('[data-local-placeholder]').each(function () {
                    var placeholderValue = $(this).attr("data-local-placeholder");
                    $(this).attr("placeholder", $.i18n.map[placeholderValue]);
                });
            }
            catch(ex){
                console.log(ex.message);
            }
        }
    });

    $(":input").attr("autocapitalize", "off");


    function changeImgByClickPwd() {
        var imgType = $(".pwd").attr("img_type");
        if(imgType == "hide") {
            $(".pwd").attr("img_type", "display");
            $(".pwd").attr("src", "../../public/img/login/display_pwd.png");
            $(".login_input_pwd").attr("type", "text");
            $(".register_input_pwd").attr("type", "text");
            $(".forget_input_pwd").attr("type", "text");
        } else {
            $(".pwd").attr("img_type", "hide");
            $(".pwd").attr("src", "../../public/img/login/hide_pwd.png");
            $(".login_input_pwd").attr("type", "password");
            $(".register_input_pwd").attr("type", "password");
            $(".forget_input_pwd").attr("type", "password");
        }
    }

    function changeImgByClickOldPwd()
    {
        var imgType = $(".oldPwd").attr("img_type");
        if(imgType == "hide") {
            $(".oldPwd").attr("img_type", "display");
            $(".oldPwd").attr("src", "../../public/img/login/display_pwd.png");
            $(".forget_input_oldPwd").attr("type", "text");
        } else {
            $(".oldPwd").attr("img_type", "hide");
            $(".oldPwd").attr("src", "../../public/img/login/hide_pwd.png");
            $(".forget_input_oldPwd").attr("type", "password");
        }
    }

    function changeImgByClickRepwd() {
        var imgType = $(".repwd").attr("img_type");
        if(imgType == "hide") {
            $(".repwd").attr("img_type", "display");
            $(".repwd").attr("src", "../../public/img/login/display_pwd.png");
            $(".register_input_repwd").attr("type", "text");
            $(".forget_input_repwd").attr("type", "text");
        } else {
            $(".repwd").attr("img_type", "hide");
            $(".repwd").attr("src", "../../public/img/login/hide_pwd.png");
            $(".register_input_repwd").attr("type", "password");
            $(".forget_input_repwd").attr("type", "password");
        }
    }


    function handleHtmlLanguage(html)
    {
        $(html).find("[data-local-placeholder]").each(function () {
            var placeholderValue = $(this).attr("data-local-placeholder");
            var placeholder = $(this).attr("placeholder");
            var newPlaceholder = $.i18n.map[placeholderValue];
            html = html.replace(placeholder, newPlaceholder);
        });

        $(html).find("[data-local-value]").each(function () {
            var changeHtmlValue = $(this).attr("data-local-value");
            var valueHtml = $(this).html();
            var newValueHtml = $.i18n.map[changeHtmlValue];
            // $(this).html(newValueHtml);
            html = html.replace(valueHtml, newValueHtml);
        });

        return html;
    }
    /**
     * 数字 字母下划线
     * @param password
     */
    function isPassword(password) {
        var reg = /^[^\u4e00-\u9fa5]+$/;
        return reg.test(password);
    }

    $(document).on("click", ".reset_pwd_button", function () {
        var isFoucs = false;
        var action = "api.passport.passwordResetPassword";
        var isFocus = false;
        var oldPassword = $(".forget_input_oldPwd").val();
        var repassword = $(".forget_input_repwd").val();
        var newPassword = $(".forget_input_pwd").val();
        loginName = $(".forget_input_loginName").val();

        if(loginName == "" || loginName == undefined || loginName.length<0) {
            $(".forget_input_loginName").focus();
            $(".forget_input_loginName_failed")[0].style.display = "block";
            isFocus = true;
        }

        if(oldPassword ==  "" || oldPassword.length<1  ) {
            $(".forget_input_oldPwd_failed")[0].style.display = "block";
            if(isFocus == false) {
                $(".forget_input_oldPwd").focus();
                $(".forget_input_loginName_failed")[0].style.display = "none";
                isFocus = true;
            }
        }

        if(newPassword ==  "" || newPassword.length<5 || newPassword.length>20 || !isPassword(newPassword)) {
            $(".forget_input_pwd_failed")[0].style.display = "block";
            if(isFocus == false) {
                $(".forget_input_pwd").focus();
                $(".forget_input_loginName_failed")[0].style.display = "none";
                $(".forget_input_oldPwd_failed")[0].style.display = "none";
                isFocus = true;
            }
        }

        if(repassword ==  "" || repassword.length<1) {
            $(".forget_input_repwd_failed")[0].style.display = "block";
            if(isFocus == false) {
                $(".forget_input_repwd").focus();
                $(".forget_input_pwd_failed")[0].style.display = "none";
                $(".forget_input_loginName_failed")[0].style.display = "none";
                $(".forget_input_oldPwd_failed")[0].style.display = "none";
                isFocus = true;
            }
        }
        if(isFocus == true) {
            return;
        }

        $(".forget_input_loginName_failed")[0].style.display = "none";
        $(".forget_input_oldPwd_failed")[0].style.display = "none";
        $(".forget_input_pwd_failed")[0].style.display = "none";
        $(".forget_input_repwd_failed")[0].style.display = "none";

        if(repassword != newPassword) {
            zalyjsAlert($.i18n.map['passwordIsNotSameJsTip']);
            return;
        }

        var reqData = {
            "loginName" : loginName,
            "newPassword" :newPassword,
            "password" :oldPassword
        };

        var action = "api.passport.passwordModifyPassword"
        handleClientSendRequest(action, reqData, handleModifyPassword);
    });

    function handleModifyPassword() {
        $.ajax({
            method: "POST",
            url:"./index.php?action=miniProgram.passport.account&lang="+languageNum,
            data: {"loginName" : loginName},
            success:function (resp, status, request) {
                var error = JSON.parse(resp);
                if(error["errCode"].length>1) {
                    zalyjsAlert(error['errCode']);
                    return;
                }
                window.close();
            },
            failed:function (error) {
                console.log(error);
            }
        });
    }
</script>
</body>
</html>
