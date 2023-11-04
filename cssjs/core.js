function DOM(){
    this.context =null
}

DOM.prototype.by = function(element){
    this.context = document.getElementById(element)
    return this.context
}


DOM.prototype.ClassAdd = function(class_){
    this.context.classList.add(class_)
    
}
DOM.prototype.ClassDelete = function(class_){
    console.log(this.context)
    this.context.classList.remove = class_
    
}

