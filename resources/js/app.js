
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

let avatarModal = document.querySelector('.avatar-modal');
let changeAvatarBtn = document.querySelector('.avatar-img--change');
let closeAvatarModal = document.querySelector('.close');

changeAvatarBtn.addEventListener('click', ()=>{
    avatarModal.style.display = 'flex';
});
closeAvatarModal.addEventListener('click', ()=>{
    avatarModal.style.display = 'none';
});
