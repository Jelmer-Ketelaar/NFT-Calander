const coll = document.getElementsByClassName("collapsible");
let i;

for (i = 0; i < coll.length; i++){
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        const content = this.nextElementSibling;
        if (content.style.maxHeight){
            content.style.maxHeight = null;
            content.style.visibility = "hidden";
            content.style.margin = "0 2%";
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            content.style.visibility = "visible";
            content.style.margin = "12px 2%";
        }
    });
}