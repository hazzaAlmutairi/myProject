const modalHide = document.getElementById('modalHide');
const myContainer = document.getElementById('myContainer');
const winner = document.getElementById('btn-winner');
const loader = document.querySelector('.preload');
const myModal = new bootstrap.Modal(document.getElementById('myModal'), {
  keyboard:false
});
var countDownDate = new Date("Feberawary 9, 2025 12:30:00").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("demo").innerHTML = days + "   يوم   " + hours + "   ساعة   "
  + minutes + "  دقيقة   " + seconds + "   ثانية   ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "انتهى";
    winner.style.display = 'block';
  }
}, 1000);


modalHide.addEventListener('click',()=>{
  myModal.hide();
});
winner.addEventListener('click',function(){
  
  myContainer.style.display = 'block';
 
  setTimeout(() => {
    
    myContainer.style.display = 'none';
    startConfetti();
    myModal.show();
  }, 1000);
 
  setTimeout(() => {
    stopConfetti();
  }, 10000);
 
});