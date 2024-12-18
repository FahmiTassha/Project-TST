$(document).ready(() => {
    $('#his').on('click', (e) => {
        e.preventDefault(); // Hindari reload halaman

        $.ajax({
            url: 'menuService.php',
            method: 'POST',
            data: { action: 'getHistories' },
            dataType: 'json'
        })
        .done((histories) => {
            let html = '<h2>Booking Histories</h2>';
            histories.forEach(history => {
                html += `<p>ID: ${history.id} - Status: ${history.booking}</p>`;
            });
            $('#output').html(html);
        })
        .fail((error) => {
            console.error('Error fetching histories:', error);
            $('#output').html('<p>Error loading histories.</p>');
        });
    });
});
