lightbox.option({
  disableScrolling: true
})

const getMainMenuEls = document.getElementsByClassName('menu-list_button');


const clickMainMenuHandler = function(resp) {
  let getMainBodyEls = document.getElementsByClassName('main-body-date--active');
  for (let j = 0; j < getMainMenuEls.length; j++) {
    getMainMenuEls[j].classList.remove('menu-list_button__active');
  }
  getMainBodyEls[0].classList.remove('main-body-date--active');
  resp.target.classList.add('menu-list_button__active');
  let activBodyTag = 'main-body-date-' + resp.target.value;
  let getActivBodyEl = document.getElementById(activBodyTag);
  getActivBodyEl.classList.add('main-body-date--active');
};

for (let k = 0; k < getMainMenuEls.length; k++) {
  getMainMenuEls[k].addEventListener('click', clickMainMenuHandler);
};

const skillSetCreat = function() {
  const skillSetEl = document.querySelectorAll('.skill-set');
  for (let l = 0; l < skillSet.length; l++) {
    let skillSetLi = document.createElement('li');
    skillSetLi.classList.add('skill-set_list');
    let skillSetP = document.createElement('p');
    skillSetP.textContent = skillSet[l];
    skillSetLi.appendChild(skillSetP);

    // let skillSetImg = document.createElement('img');
    // skillSetImg.setAttribute('src',skill.icon);
    // skillSetImg.classList.add('skill-set_icon');
    // skillSetLi.appendChild(skillSetImg);

    let skillSetLevels = document.createElement('ul');
    for (let i = 0; i < 5; i++) {
      let skillSetLevel = document.createElement('li');
      if (i < skillSet[skillSet[l]].Level) {
        skillSetLevel.classList.add('fas', 'fa-star', 'skill-level_star-on');
      } else {
        skillSetLevel.classList.add('fas', 'fa-star', 'skill-level_star-off');
      }
      skillSetLevels.appendChild(skillSetLevel);
    }
    skillSetLi.appendChild(skillSetLevels);
    skillSetEl[0].appendChild(skillSetLi);
  }
};

skillSetCreat();
