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
}

const skillSetCreat = function() {
  const skillSetEl = document.querySelectorAll('.skill-set');
  for (let l = 0; l < skillSet.length; l++) {
    let skillSetLi = document.createElement('li');
    skillSetLi.classList.add('skill-set_list');
    let labelSeal = document.createElement('div');
    labelSeal.classList.add('skill-label', 'skill-label_type-' + skillSet[l].Type);
    skillSetLi.appendChild(labelSeal);
    let skillSetP = document.createElement('p');
    skillSetP.textContent = skillSet[l].name;
    skillSetLi.appendChild(skillSetP);
    skillSetEl[0].appendChild(skillSetLi);
  }
};

skillSetCreat();

let photoElements = document.querySelectorAll('.photos-photolist');
let j,k = 1;
for (let i = 0; i < photoElements.length; i++) {
  if(j === 3){
    j = 1;
    k++;
  }
  let styleText = '-ms-grid-column: ' + j + '; -ms-grid-row: ' + k + ';';
  photoElements[i].style.cssText = styleText;
  j++;
}