function admin_main_check(){
 if (!confirm("确认要删除？")) {
    window.event.returnValue = false;
    }
}
window.onload=function admin_main_level(){
    var level=document.getElementById('level');
    var options=document.getElementsByTagName('option');
    if (level) {
        for (var i = 0; i < options.length; i++) {
            if (options[i].value == level.value) {
                options[i].setAttribute('selected','selected');
            }
        }
    }
    var title=document.getElementById('title').innerHTML;
    var ol=document.getElementsByTagName('ol');
    var a=ol[0].getElementsByTagName('a');
    for (var i = 0; i < a.length; i++) {
        a[i].className=null;
        if (a[i].innerHTML == title) {
            a[i].className='selected';
            a[i].href='#';
        }
    };
}
function pass_check(){
    if (document.getElementsByName('name_check').innerHTML == 'false') {
        alert("用户名已存在,请换一个重试!");
        window.event.returnValue = false;
    }else{
        var admin_name_tag=document.getElementsByName('admin_name');
        var name=admin_name_tag[0].value;
        if (name.length<2 || name.length >10) {
        alert("用户名长度不符合要求!");
        window.event.returnValue = false;
            }else{
                var pass1_tag= document.getElementsByName('admin_pass');
                var pass2_tag= document.getElementsByName('admin_pass_check');
                if (pass1_tag[0].value || pass2_tag[0].value) {
                    var pass1 = pass1_tag[0].value;
                    var pass2 = pass2_tag[0].value;
                    if (pass1.length < 6) {
                        alert("密码长度最少六位！");
                        window.event.returnValue = false;
                    }else if (pass1 != pass2) {
                        alert("两次输入密码不一致！");
                        window.event.returnValue = false;
                        }
                    }
                }
    }
}
// function checkUserName(str){
//     if (str.length < 2) {
//         return;
//     }
//     xmlHttpRequest=new XMLHttpRequest();
//     xmlHttpRequest.onreadystatechange=function(){
//         if (xmlHttpRequest.readyState == 4 && xmlHttpRequest.status == 200) {
//             if (xmlHttpRequest.responseText == 'y') {
//                 alert("亲，这个用户名已经存在了,换一个试试");
//                 document.getElementsByName('name_check').innerHTML='false';
//             }else{
//                 document.getElementsByName('name_check').innerHTML='';
//             }
//         }
//     }
//     xmlHttpRequest.open('get','../config/code.php?name='+str,true);
//     xmlHttpRequest.send();
// }
