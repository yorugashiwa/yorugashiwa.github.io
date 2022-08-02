function setIntersectionObserver(){
    const options = {
      threshold: [0, 0.2, 0.4, 0.6, 0.8, 1]
    }
    const callbackfade = (entries, fadeIn) => {
      entries.forEach(entry => {
        if (entry.intersectionRatio > 0.2) {
          entry.target.classList.add('show');
        }
      });
    }
    const fadeIn  = new IntersectionObserver(callbackfade, options);
    const fadeTarget = [...document.querySelectorAll('.fade')];
    fadeTarget.forEach(el => {
      fadeIn.observe(el);
   });
  }
  setIntersectionObserver();




