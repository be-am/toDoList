loadTask();
loadDoneTask();

$(document).on('click','#doneBtn' ,function(){
    var id = $(this).data('id');
    doneAjax(id);
})

$(document).on('click','#delBtn' ,function(){
    var id = $(this).data('id');
    delAjax(id);
})

// click 이벤트 실행 안되는 해결법은 https://minkdak.tistory.com/5 여기
