'use strict';

// let dara = confirm( 'Хелоу блять' );
// function showMessage(dara) {
//     (dara === true) ? alert("Ну ты ебать"): alert('Хуево');
// }
// showMessage(dara);



function ask(question, yes, no) {
    if (confirm(question)) yes()
    else no();
}

function showOk() {
    alert( "Вы согласны." );
}

function showCancel() {
    alert( "Вы отменили выполнение." );
}

// использование: функции showOk, showCancel передаются в качестве аргументов ask
ask("Вы согласны?", showOk, showCancel);