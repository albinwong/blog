@extends('layout.exclusive',['title' => '联系我 - AlbinWong --- Pencil do the thinking!'])
@section('css')
<meta name="keywords" content="albin,联系我,Back-End Engineer,chaindd"/>
        <meta name="description" content="联系我-Albin-Pencil do the thinking!">
        <meta name="author" content="albinwong">
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
                            <form name="form1" id="commentform" method="post">
                                <div class="row">
                                    <div class="span4">
                                        <label for="url">Name</label>
                                        <input class="span4" type="text" name="name" id="name" value="" size="22" placeholder="Enter full name" required="required" />
                                    </div>
                                    <div class="span4">
                                        <label for="url">Email</label>
                                        <input class="span4" type="email" name="email" id="email" value="" placeholder="Enter email" required="required" />
                                    </div>
                                </div>
                                <div>
                                    <label for="url">Subject</label>
                                    <input class="span4" type="text" name="subject" id="subject" value="" size="22">
                                </div>
                                <div class="row">
                                    <div class="span12">
                                        <label for="comment">Comment</label>
                                        <textarea class="span8" name="comment" id="comment" cols="58" rows="10"></textarea> 
                                        <div>                    
                                            <input class="btn" style="color: black;" name="submit" type="submit" id="submit" value="提交">
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
    </script>
@endsection