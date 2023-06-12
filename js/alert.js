let alert = document.getElementById('showErr');
setTimeout(myGreeting, 5000);
console.log('Masum', alert.innerHTML);

function myGreeting() {
  alert.style.display = 'none';
}
