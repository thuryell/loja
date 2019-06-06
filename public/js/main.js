$(".valor").mask("#.##0,00",{reverse: true});

function InfoToat(titulo,mensagem) {
    
    iziToast.show({
        theme: 'dark',
        icon: 'icon-person',
        title: titulo,
        message: mensagem,
        position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
    });

}