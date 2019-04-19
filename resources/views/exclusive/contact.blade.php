@extends('layout.exclusive',['title' => '联系我 - Albin Wong Blog'])
@section('seo')
        <meta name="keywords" content="albin,联系我,Back-End Engineer,chaindd"/>
        <meta name="description" content="联系我-Albin Wong Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结，是一个互联网从业者值得收藏的网站。" />
        <meta property="og:description" content="Albin Wong`s Blog 个人博客网站是一个关注技术架构、互联网、运维、数据库、前端、后端、区块链、资讯等技术信息博客, 提供博主学习成果和工作中经验总结，是一个互联网从业者值得收藏的网站。独自穿越人群看着两岸的灯火,其实所有漂泊的人,不过是为了有一天能够不再漂泊,能用自己的力量撑起天空." />
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div id="main-content">
            <article>
                <div class='embed-container maps'>
                    <iframe src="https://www.amap.com/place/B0FFKD0Y0D" width="100%" height="450px" frameborder="0" style="border:0"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.231475182!2d116.34604631578583!3d39.75691097944733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35f04a0d2df81ef7%3A0x63c1016a11f7ddfa!2s20+Guangmao+St%2C+Daxing+Qu%2C+Beijing+Shi%2C+China!5e0!3m2!1sen!2sus!4v1553705277754" width="100%" height="450px" frameborder="0" style="border:0"></iframe>
                </div>
                <div class="art-content">
                    <div class="row">
                        <div class="span4 box-item">
                            <h3>Contact Info</h3>
                            <span>溫馨提示：如果您想在瀏覽過程中需要咨詢及建議，歡迎您將意見電郵至<a href="mailto:albinwong@sina.com?subject=意见反馈" title="albinwong@sina.com">albinwong@sina.com</a>或留言渠道進行反映，您的問題或咨詢將得到答復.</span><br> <br>
                            <address>
                              <strong>Back-End Engineer of ChainDD, Inc.</strong><br>
                              90 Guangmao St,<br>
                              Daxing distinct, Peking<br>
                              China<br>
                              <abbr title="Phone">P:</abbr> <a href="tel:+008616601119376">(86) 166-0111-9376</a>
                            </address>

                            <address>
                              <strong>Abin Wong</strong><br>
                              <a href="mailto:albinwong@sina.com?subject=Feedback">albinwong@gmail.com</a>
                            </address>
                        </div>
                        <div class="span8">
                            <h3>Contact Form</h3>
                            <center><span style="color:red; font-size: 35px; line-height: 40px; magin: 10px;"></span></center>
                            <form name="form1" id="commentform">
                                <div class="row">
                                    <div class="span4">
                                        <label for="url">稱呼</label>
                                        <input class="span4" type="text" name="name" id="name" value="" size="22" placeholder="Enter full name" required="required" />
                                    </div>
                                    <div class="span4">
                                        <label for="url">Email</label>
                                        <input class="span4" type="email" name="email" id="email" value="" placeholder="Enter email" required="required" />
                                    </div>
                                </div>
                                <div>
                                    <label for="url">主題</label>
                                    <input class="span4" type="text" name="subject" id="subject" value="" size="22">
                                </div>
                                <div class="row">
                                    <div class="span12">
                                        <label for="comment">內容</label>
                                        <textarea class="span8" name="comment" id="comment" cols="58" rows="10"></textarea> 
                                        <div>                    
                                            <input class="btn" style="color: black;" name="submit" id="submit" value="提交">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript">
        // Google Map 
        $('.maps').click(function () {
            $('.maps iframe').css("pointer-events", "auto");
        });
        $( ".maps" ).mouseleave(function() {
          $('.maps iframe').css("pointer-events", "none"); 
        });
        // contact information
        $(function(){
            var contact = $("#commentform"),
                name  = contact.find("input[name=name]"),
                email  = contact.find("input[name=email]"),
                subject  = contact.find("input[name=subject]"),
                comment  = contact.find("#comment");
            contact.find("#submit").on("click", function(){
            var nameVal = name.val(),
                emailVal = email.val(),
                subjectVal = subject.val(),
                commentVal = comment.val(),
                data = 'name='+nameVal+'&email='+emailVal+'&subject='+subjectVal+'&content='+commentVal;
                if (!emailVal || !subjectVal || !nameVal || !commentVal){
                    layer.alert('内容不能为空，写点什么吧！',{icon: 2});
                    return false;
                }
                $.post('/api/contact', data, function(data){
                    if(data.status){
                        layer.alert('Congratulations! Your message has been recorded.');
                        name.val('');
                        email.val('');
                        subject.val('');
                        comment.val('');
                    }else {
                        layer.alert(data.msg);
                    }
                }, 'json');
            });
        });
    </script>
@endsection