<div class="strategyCode" style="z-index: 9" id="">
    <div class="yxQuest">
        <img src="/picture/yx-bg.png" alt=""/>
        <div>
            <textarea id="userRequestSelect" placeholder="如果您有营销问题，填写问题内容，我们可以快速帮您解答"></textarea>
            <input type="text" id="customName" name="name" placeholder="您的称呼" maxlength="11">
            <input type="text" id="telPhone" name="telPhone" placeholder="请填写您的手机号" maxlength="11">
            <p><input type="text" id="phoneCode" name="phoneCode" placeholder="短信验证码" maxlength="8"><button id="getPhoneCode" class="caClass">获取验证码</button></p>
            <a id="yxQuestSubmit" onclick="javascript:cmsListsubmitLeadss();" class="caClass" traceflag="rightbar_fb_提交咨询" href="javascript:void(0);">提交咨询</a>
        </div>
        <div class="tipMask">请填写正确的手机号码</div>
    </div>
</div>
<style>
    #getPhoneCode{
        height: 30px;
        background: #fff;
        font-size: 12px;
        color: #1183f7;
        cursor: pointer;
        border: none;
    }
</style>
<script>
    var patt = /^1(3|4|5|7|8)\d{9}$/;
    var resul;
    function lsmSms(mobile){
        //发送验证码
        $.ajax({
            url:'/common/lsmSms',
            type:'get',
            async:false,
            data:{phone:mobile},
            success:function (res) {
                if(res==1){
                    resul = true;
                }
            },
        });
        return resul;
    }
    //留言
    function cmsListsubmitLeadss() {
        var contents = $('#userRequestSelect').val();
        var name = $('#customName').val();
        var phone = $('#telPhone').val();
        var code = $('#phoneCode').val();
        $.ajax({
            url:'/message/indexCode',
            type:'post',
            data:{name:name,phone:phone,code:code,content:contents},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function (res) {
                if(res==1){
                    alert('提交成功，稍后马上与您联系！');
                }else if (res == -2){
                    $('.tipMask').text('输入的验证码不正确');
                    $('.tipMask').css('display','block');
                }else{
                    alert('提交失败，稍后尝试');
                }
            }
        });
    }
    //发送验证码
    $('#getPhoneCode').click(function () {
        var phoneCode = $('#telPhone').val();
         if(!patt.test(phoneCode)){
             $('.tipMask').text('请填写正确的手机号码');
             $('.tipMask').css('display','block');
             return false;
         }else {
             var validate_lsm = lsmSms(phoneCode);
             if(validate_lsm == true){
             time($(this));
             }
         };
    });
    var wait=120;
    $("#getPhoneCode").prop("disabled", false);
    function time(obj) {
        if (wait == 0) {
            $(obj).prop("disabled", false);
            $(obj).val("获取验证码");
            wait = 120;
        } else {
            $(obj).prop("disabled", true);
            $(obj).text(wait + "s后重新获取");
            wait--;
            setTimeout(function() {
                    time(obj)
                },
                1000)
        }
    }
</script>