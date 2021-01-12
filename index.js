$('#addBtn').on('click', function(){
    var text = $("#text").val();
    addAjax(text);
    // .always(function(xhr, status) {
    //     $("span").html("요청이 완료되었습니다!");
    // })
    
    // .fail(function(xhr, status, errorThrown) {
    //     $("span").html("오류가 발생했습니다.<br>")
    //     .append("오류명: " + errorThrown + "<br>")
    //     .append("상태: " + status);
    // })    
})











