document.getElementById('menu-toggle').addEventListener( 'click', e => {
    e.preventDefault();
    document.getElementById('wrapper').classList.toggle('menuDisplayed');
});

document.getElementById('btn_show').addEventListener( 'click', () => {
	document.querySelector('.bg-modal').style.display = 'flex';
});

document.querySelector('.bg-modal').addEventListener( 'click', () => {
	document.querySelector('.bg-modal').style.display = 'none';
});

document.querySelector('.close').addEventListener( 'click', () => {
	document.querySelector('.bg-modal').style.display = 'none';
});

/*
document.getElementById('menu-toggle').addEventListener('click', e => {
    e.preventDefault();
    document.getElementById('wrapper').classList.toggle('menuDisplayed');
});
 
document.getElementById('btn_show').addEventListener( 'click', () => {
    document.querySelector('.bg-modal').classList.add('is-active');
});
 
document.querySelector('.close').addEventListener( 'click', () => {
    document.querySelector('.bg-modal').classList.remove('is-active');
});*/