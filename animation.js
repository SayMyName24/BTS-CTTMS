
    function una(){
        let una = document.getElementById('una');
        una.innerHTML = "&#xf0d1;";
    
    
        setTimeout(function(){
           
        una.innerHTML = "&#xf0f9;";
        },1000);
    }
        una();
        setInterval(una,2000);

   