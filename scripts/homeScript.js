/*Habilities*/
let webDev = document.getElementById('webDev');
let design = document.getElementById('design');
let english = document.getElementById('english');
webDev.addEventListener('click', showHability_webDev);
design.addEventListener('click', showHability_design);
english.addEventListener('click', showHability_english);

let webDev_div = document.getElementById('webDev_div');
let design_div = document.getElementById('design_div');
let english_div = document.getElementById('english_div');

let hability_webDev = document.getElementById('hability_webDev');
let hability_design = document.getElementById('hability_design');
let hability_english = document.getElementById('hability_english');

webDev_div.classList.add('active');
webDev.classList.add('active');

function showHability_webDev() {
    hability_webDev.style.display = 'block';
    hability_design.style.display = 'none';
    hability_english.style.display = 'none';

    webDev_div.classList.add('active');
    design_div.classList.remove('active');
    english_div.classList.remove('active');

    webDev.classList.add('active');
    design.classList.remove('active');
    english.classList.remove('active');
}
function showHability_design() {
    hability_webDev.style.display = 'none';
    hability_design.style.display = 'block';
    hability_english.style.display = 'none';

    webDev_div.classList.remove('active');
    design_div.classList.add('active');
    english_div.classList.remove('active');

    webDev.classList.remove('active');
    design.classList.add('active');
    english.classList.remove('active');
}
function showHability_english() {
    hability_webDev.style.display = 'none';
    hability_design.style.display = 'none';
    hability_english.style.display = 'block';

    webDev_div.classList.remove('active');
    design_div.classList.remove('active');
    english_div.classList.add('active');

    webDev.classList.remove('active');
    design.classList.remove('active');
    english.classList.add('active');
}
