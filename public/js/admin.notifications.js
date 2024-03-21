function notify(type,message){
    (()=>{
        let n = document.createElement("div");
        let id  = Math.random().toString(36).substr(2,10);
        n.setAttribute("id", id);
        n.classList.add("notification", type);
        n.innerText = message;
        document.getElementById("notification-area").appendChild(n);
        setTimeout(()=>{
            var notifications = document.getElementById("notification-area").getElementsByClassName("notification");
            for(let i=0;i<notifications.length;i++){
                if(notifications[i].getAttribute("id") == id){
                    notifications[i].remove();
                    break;
                }
            }
        },3000);
    })();
}

function notifySuccess(){
    notify("success", "this is dummy success notification message");
}

function notifyError(){
    notify("success", "this is dummy error notification message");
}

function notifyInfo(){
    notify("success", "this is dummy info notification message");
}