function showModal(message) {
    const modal = document.getElementById("resultModal");
    const modalMessage = document.getElementById("modalMessage");
    const closeButton = document.getElementsByClassName("close")[0];

    modalMessage.textContent = message; // Set the message
    modal.style.display = "block"; // Show modal

    // Close modal on 'x' button click
    closeButton.onclick = () => {
        modal.style.display = "none";
    };

    // Close modal if user clicks outside of it
    window.onclick = (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };
}

async function submitCheckin(event) {
    event.preventDefault();
    const customerId = document.getElementById('customer_id').value.trim();
    const name = document.getElementById('name').value.trim();
    const checkinDate = document.getElementById('checkin_date').value.trim();
    const stayDuration = document.getElementById('stay_duration').value.trim();

    const envelope = `
        <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:vouc="http://example.com/voucher">
            <soapenv:Header/>
            <soapenv:Body>
                <vouc:checkin>
                    <customer_id>${customerId}</customer_id>
                    <name>${name}</name>
                    <checkin_date>${checkinDate}</checkin_date>
                    <stay_duration>${stayDuration}</stay_duration>
                </vouc:checkin>
            </soapenv:Body>
        </soapenv:Envelope>`;

    try {
        const response = await fetch('http://localhost/soap/voucher_service.php', {
            method: 'POST',
            headers: { 'Content-Type': 'text/xml' },
            body: envelope,
        });
        const text = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(text, "text/xml");
        const result = xmlDoc.getElementsByTagName("result")[0]?.textContent || "No result found";
        showModal(result);
    } catch (error) {
        console.error(error);
        showModal("An error occurred during check-in.");
    }
}

async function checkVoucher(event) {
    event.preventDefault();
    const voucherId = document.getElementById('voucher_id').value.trim();

    const envelope = `
        <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:vouc="http://example.com/voucher">
            <soapenv:Header/>
            <soapenv:Body>
                <vouc:checkVoucher>
                    <customer_id>${voucherId}</customer_id>
                </vouc:checkVoucher>
            </soapenv:Body>
        </soapenv:Envelope>`;

    try {
        const response = await fetch('http://localhost/soap/voucher_service.php', {
            method: 'POST',
            headers: { 'Content-Type': 'text/xml' },
            body: envelope,
        });
        const text = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(text, "text/xml");
        const result = xmlDoc.getElementsByTagName("voucher_info")[0]?.textContent || "No voucher info found";
        showModal(result);
    } catch (error) {
        console.error(error);
        showModal("An error occurred while checking voucher.");
    }
}

document.getElementById('checkinForm').addEventListener('submit', submitCheckin);
document.getElementById('voucherForm').addEventListener('submit', checkVoucher);
