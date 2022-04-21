// DOM Element's


$kartu = document.getElementById('kartucount')
$kartu_isi = document.getElementById('kartucount-isi')
$kartu.ready(function(){
$kartu.scroll(function(evt){
var v2 = Math.abs($kartu_isi.position().top - $window.height()/2);
var v1 = $this.scrollTop();
    if( v1 > v2 ){
        const counters = document.querySelectorAll('.counter');

        /*** Using forEach() ***/
        
        // counters.forEach(counter => {
        //     const updateCount = () => {
        //         const target = +counter.getAttribute('data-target');
        //         const count = +counter.innerText;
        //         const speed = 5000;
        
        //         const inc = target / speed;
        
        //         if(count < target) {
        //             counter.innerText = Math.ceil(count + inc);
        //             setTimeout(updateCount, 1);
        //         } else {
        //             counter.innerText = target;
        //         }
        //     }
        
        //     updateCount();
        // })
        
        
        /*** Same functionality, now using for...of ***/
        
        for(let n of counters) {
            const updateCount = () => {
                const target = + n.getAttribute('data-target');
                const count = + n.innerText;
                const speed = 1/5;
                
                const inc = target / speed; 
        
                if(count < target) {
                    n.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    n.innerText = target;
                }
            }
        
            updateCount();
        }
  }
});
});


    




