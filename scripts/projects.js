//Página 1
    //Declaro las constantes para la página 1
    const modal1 = document.getElementById('modalDePagina1');
    const modalClose1 = document.getElementById('close-modal1');
    const modalOpen1 = document.getElementById('modalDePagina1--abrir');
    
        //Modal opener
    modalOpen1.addEventListener('click', openModal1);
    
    function openModal1() {
        modal1.style.display = 'block';
        document.body.style.overflowY = 'none';
    }
    
    modalClose1.addEventListener('click', closeModal); 
    
    //Página 2
    const modal2 = document.getElementById('modalDePagina2');
    const modalOpen2 = document.getElementById('modalDePagina2--abrir');
    const modalClose2 = document.getElementById('close-modal2');
    
    modalOpen2.addEventListener('click', openModal2);
    
    function openModal2() {
        modal2.style.display = 'block';
        document.body.style.overflowY = 'none';
    }
    
    modalClose2.addEventListener('click', closeModal); 
    
    //Página 3
    const modal3 = document.getElementById('modalDePagina3');
    const modalOpen3 = document.getElementById('modalDePagina3--abrir');
    const modalClose3 = document.getElementById('close-modal3');
    
    modalOpen3.addEventListener('click', openModal3);
    
    function openModal3() {
        modal3.style.display = 'block';
        document.body.style.overflowY = 'none';
    }
    
    modalClose3.addEventListener('click', closeModal); 
    /*
    //Página 4
    const modal4 = document.getElementById('modalDePagina4');
    const modalOpen4 = document.getElementById('modalDePagina4--abrir');
    const modalClose4 = document.getElementById('close-modal4');
    
    modalOpen4.addEventListener('click', openModal4);
    
    function openModal4() {
        modal4.style.display = 'block';
        document.body.style.overflowY = 'none';
    }
    
    modalClose4.addEventListener('click', closeModal); 
    
    */