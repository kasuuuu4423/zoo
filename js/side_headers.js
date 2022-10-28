window.addEventListener('load', ()=>{
  let side = document.getElementsByClassName('side_headers')[0];
  let content = document.getElementsByClassName('content')[0];
  set_headers(content, side);
  let top = side.getBoundingClientRect().top;
  ScrollOut({
    offset: top + window.pageYOffset - 22,
    onShown: (side)=>{
      side.style.position = 'fixed';
      side.classList.add('active');
    },
    onHidden: ()=>{
      side.style.position = 'initial';
      side.classList.remove('active');
    }
  });
  
});

const set_headers = (content, side) =>{
  let h = content.querySelectorAll('h2, h3, h4');
  for(let i = 0; i < h.length; i++){
    let target = h[i];
    let anker_target = document.createElement('a');
    anker_target.id = target.innerText;
    target.prepend(anker_target);

    let index = document.createElement('div');
    index.classList.add(target.tagName.toLowerCase());
    index.innerText = target.innerText;
    let a = document.createElement('a');
    a.setAttribute('href', '#'+target.innerText);
    a.appendChild(index);
    side.appendChild(a);
  }
}