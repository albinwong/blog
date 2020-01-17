// Subscribe
$(function(){
    var subscribe = $(".subscribe"),
        emailBox  = subscribe.find("input[name=subscibe_email]");
    subscribe.find("button").on("click", function(){
        var email = emailBox.val(),
            data = {
                'email' :email,
                '_token':$("meta[name='_token']").attr('content'),
            };
        if (!email) {
            layer.alert('Email地址不能为空！');
            return false;
        }
        $.post('/api/subscribe', data , function(data){
            if(data.status){
                layer.alert('Congratulations! You`ve been subscribed.');
                emailBox.val('');
            }else {
                layer.alert(data.msg);
            }
        }, 'json');
    });
});