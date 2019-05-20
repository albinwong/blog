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