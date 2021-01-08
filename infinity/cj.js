let a = document.querySelector('.nav-links');
let b = document.querySelector('.nav-icon');
b.addEventListener('click' , () => {
    a.classList.toggle('close');
    let c = b.getAttribute('name');
    if (c == 'menu')
    {
        b.setAttribute('name','close');
    }
    else
    {
        b.setAttribute('name','menu');
    }

});