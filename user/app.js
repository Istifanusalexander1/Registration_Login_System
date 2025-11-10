const opensidbar = document.querySelector('body').classList.add('open');
const closesidbar = document.querySelector('body').classList.remove('open');
function openSideBar(){
    if (document.querySelector('body').classList == 'open'){
        document.querySelector('body').classList.remove('open');
        document.querySelector('.label').style.display = 'none';
    }else{
        document.querySelector('body').classList.add('open');
        document.querySelector('.label').style.display = 'block';
    }
}