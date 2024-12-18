async function checkTransaction() {
    const amount = document.getElementById("amount").value;
    if (amount >= 200000) {
        document.getElementById("voucherMessage").innerHTML = "Selamat! Anda mendapatkan voucher diskon 20% untuk penginapan di Hotel PeseninKuy.";
        await generateVoucher();
    } else {
        document.getElementById("voucherMessage").innerHTML = "Transaksi tidak memenuhi syarat untuk voucher.";
    }
}

async function generateVoucher() {
    const url = "http://localhost/soap/Citra/server.php"; 
    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ discount: 20 })
        });
        const data = await response.json();
        console.log(data);
    } catch (error) {
        console.error(error);
    }
}
