<div class="cmsFb">
    <div class="cmsFbTitle"></div>
    <div class="cmsFbTitleInfo">
        <img src="/picture/article-publishi-lion@2x.png" alt="">
        <div><img src="/picture/yh@2x.png" alt="">是这样的，我对营销还是有两下子的，您可以告诉我您的营销疑问，反正也不花钱，对吧<img src="/picture/yh@2x.png" alt=""></div>
    </div>
    <div class="cmsFbGroup">
        <span>您的疑问<b style="color: #999;">（选填）</b>：</span>
        <div>
            <textarea  style="height: 180px;"  id="cmsFbQuestion" name="cmsFbQuestion" placeholder="微信代运营？朋友圈广告？定制开发？无论什么，通通帮你搞定！！多说点吧，让镖哥更了解您的疑问优先为您服务"></textarea>
        </div>
        <p class="cmsContent">信息不能为空</p>
    </div>
    <div class="cmsFbGroup cmsPhoneBox" id="cms_Phoneshow"  style="" >
        <span>您的电话：</span>
        <div>
            <input value="" type="text" name="cms_phone" id="cms_phone" placeholder="请输入11位手机号" maxlength="11">
            <p class="cmsFbError">手机号输入有误</p>
        </div>
    </div>
    <div class="cmsFbCheckBox"  style="" >
        <label><input id="cms_hidephone" class="caClass" traceflag="content_select_向服务商隐藏手机号" type="checkbox" name="" checked="checked"/>向服务商隐藏您的真实手机号，隐私不外泄</label>
    </div>
    <div class="cmsFbSubmit">
        <span id="cmsSubmitBtn" class="caClass" traceflag="content_fb_发布需求" onclick="cmsSubmitLeads()">提交</span>
    </div>
    <div class="cmsFbErrtip">手机号输入有误</div>

    <!-- 发镖成功 -->
    <div class="cmsFbMask cmsFbSuccess" id="cmsFbSuccess">
        <img id="cmsclosesuccess" class="caClass" traceflag="content_close_关闭成功弹窗" src="/picture/closed-gray.png" alt="">
        <div class="cmsFbSuccessHeader">
            <img src="/picture/check-circle-fill@2x.png" alt="">提交成功！
            <p>稍后严选师将致电您，为您提供免费营销咨询服务</p>
        </div>
        <div class="CmsFbCodeBox">
            <p class="CmsFbcodeP"><img src="/picture/lion-weixin-new.png" alt=""><br/><span>关注萤火虫网</span></p>
            <div class="CmsFbfbList">
                <p><img src="/picture/yellow-check@2x.png" alt="">免费营销课程</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">海量营销攻略</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">专家在线解答</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">业务案例展示</p>
            </div>
        </div>
        <!-- <p class="CmsFbfbTips">请注意010-8992开头的电话，保持联系电话畅通。</p> -->
    </div>
    <!-- 发镖失败 -->
    <div class="cmsFbMask cmsFbFail"　id="cmsFbFail">
        <img id="cmsclosefailure" class="caClass" traceflag="content_close_关闭错误弹窗" src="/picture/closed-gray.png" alt="">
        <div class="cmsFbSuccessHeader">
            <img src="/picture/close-circle-fill@2x.png" alt="">提交失败！
            <p>您的需求发布失败，请致电010-53526642联系我们</p>
        </div>
        <div class="CmsFbCodeBox">
            <p class="CmsFbcodeP"><img src="/picture/lion-weixin-new.png" alt=""><br/><span>关注萤火虫网</span></p>
            <div class="CmsFbfbList">
                <p><img src="/picture/yellow-check@2x.png" alt="">免费营销课程</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">海量营销攻略</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">专家在线解答</p>
                <p><img src="/picture/yellow-check@2x.png" alt="">业务案例展示</p>
            </div>
        </div>
    </div>
</div>
<script>

    //表单提交,
    $('#cmsSubmitBtn').click(function(){

        var content = $('#cmsFbQuestion').val();
        var phone = $('#cms_phone').val();
        var patt = /^1(3|4|5|7|8)\d{9}$/;

        if(content ==''){
            $('.cmsContent').css({'display':'block','color':'red','text-align':'center','font-weight':'800'});
            return false;
        }else if(!patt.test(phone)){
            $('.cmsFbError').css('display','block');
            return false;
        }else {
            $.ajax({
                url:'/message/index',
                type:'post',
                data:{phone:phone,content:content},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function (res) {
                    if(res==1){
                        $('#cmsFbSuccess').css('display','block');
                    }else {
                        $('#cmsFbFail').css('display','block');
                    }
                }
            });
        }
    })
    //点击关闭
    $('.caClass').click(function () {
        $('#cmsFbSuccess').css('display','none');
        $('#cmsFbFail').css('display','none');
    })
</script>