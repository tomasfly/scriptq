function accordion(btn){
    let pNode = btn.parentNode;
    let cNode = pNode.querySelector('.s-info')
    document.querySelectorAll('.s-info').forEach((node) => node.style.height = '0px')
    document.querySelector('.service-img').src = btn.dataset.img
    if (cNode.clientHeight == 0){
        cNode.style.height = '120px'
    }
    else{
        cNode.style.height = '0px'
    }
}

