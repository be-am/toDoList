function loadTask() {
    $.ajax({
        url : "../../apis/showTask.php" ,
        type : "POST" ,
        success : function(data){
            $("#mustDo").html(data);
        }
    })    
}

function loadDoneTask(){
    $.ajax({
        url : "../../apis/loadDoneTask.php" ,
        type : "POST" ,
        success : function(data){
            $("#mustDone").html(data);
        }
    }) 
}

function addAjax(text) {
    $.ajax({
        url : '../../apis/addTask.php' ,
        data : {'content' : text} ,
        type : 'POST' ,
        success : function(data){
            if(data == 1){
                alert('ADD SUCCESS');
                loadTask();
            }
        },

        error:function(request,status,error){
            alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
         }
    })
}

function delAjax(id){
    $.ajax({
        url : '../../apis/delTask.php' ,
        data : {'id' : id} ,
        type : 'POST' ,
        success : function(data){
            if(data == 1){
                alert('delete SUCCESS');
                loadTask();
                loadDoneTask();
            }
        },

        error:function(request,status,error){
            alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
         }
    })
}

function doneAjax(id){
    $.ajax({
        url : '../../apis/doneTask.php' ,
        data : {'id' : id} ,
        type : 'POST' ,
        success : function(data){
            if(data == 1){
                alert('Done SUCCESS');
                loadTask();
                loadDoneTask();
            }
        },

        error:function(request,status,error){
            alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
         }
    })
}