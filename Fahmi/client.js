$(()=>{

    $('#vch').on('click', ()=>{

        const name = document.getElementById("name").value;
        $.ajax({
            url: 'client-order.php',
            method: 'POST',
            data: {name: name}
        }).done((number)=>{
            let html = '';
            if (number.order !== 'Error') {
                html += `<p>Order Number: ${number.order}</p>`;
            } else {
                html += `<p>Error: Invalid name</p>`;
            }
            $('#output').html(html);
        });
    });
}); 
/* anonymous function
 objek = {} 
 function = ()=>{}
*/