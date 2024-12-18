async function numberOrder() {
    const name = document.getElementById("name").value;
    if (!name) {
        alert("Please enter a name");
        return;
    }

    try {
        const response = await fetch("ajax.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ name: name })
        });

        if (!response.ok) throw new Error("Error");
        const data = await response.json();
        document.getElementById("result").innerHTML = `
            <p><strong>No Order :</strong> ${data.order}</p>
        `;
    } catch (error) {
        console.error("Error:", error);
        document.getElementById("result").textContent = "Error";
    }
}