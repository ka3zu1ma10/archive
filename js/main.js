lightbox.option({
  disableScrolling: true
})

const getMainMenuEls = document.getElementsByClassName('menu-list_button');


const clickMainMenuHandler = function(resp) {
  let getMainBodyEls = document.getElementsByClassName('main-body-date--active');
  for (let getMainMenuEl of getMainMenuEls) {
    getMainMenuEl.classList.remove('menu-list_button__active');
  }
  getMainBodyEls[0].classList.remove('main-body-date--active');
  resp.target.classList.add('menu-list_button__active');
  let activBodyTag = 'main-body-date-' + resp.target.value;
  let getActivBodyEl = document.getElementById(activBodyTag);
  getActivBodyEl.classList.add('main-body-date--active');
};

for (let getMainMenuEl of getMainMenuEls) {
  getMainMenuEl.addEventListener('click', clickMainMenuHandler);
};

const skillSetCreat = function(){
  const skillSetEl = document.querySelectorAll('.skill-set');
  for (let skill in skillSet){
    let skillSetLi = document.createElement('li');
    skillSetLi.classList.add('skill-set_list');

    let skillSetImg = document.createElement('img');
    skillSetImg.setAttribute('src',skill.icon);
    skillSetImg.classList.add('skill-set_icon');
    skillSetLi.appendChild(skillSetImg);

    let skillSetLevels = document.createElement('ul');
    for (let i = 0; i < 5; i++){
      let skillSetLevel = document.createElement('li');
      skillSetLevel.classList.add('fas','fa-star');
      if (i < skill.Level){
        skillSetLevel.classList.add('star-on');
      }
      skillSetLevels.appendChild(skillSetLevel);
    }
    skillSetLi.appendChild(skillSetLevels);
    skillSetEl.appendChild(skillSetLi);
  }
};

skillSetCreat()