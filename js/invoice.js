let rowCount = 1;

document.addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
        const current = e.target;
        if (current.tagName.toLowerCase() === "input") {
            e.preventDefault(); // default submit rokna

            const tr = current.closest("tr");
            const tbody = tr.closest(".invoice-body");
            const inputs = [...tr.querySelectorAll("input:not([readonly])")];
            const idx = inputs.indexOf(current);

            if (current.classList.contains("rate")) {
                const nextRow = tr.nextElementSibling;

                if (nextRow) {
                    // ✅ Agar next row already hai → uske Item input pe focus karo
                    const firstInput = nextRow.querySelector("input:not([readonly])");
                    if (firstInput) firstInput.focus();
                } else {
                    // ✅ Agar last row hai → nayi row banao
                    rowCount++;
                    const newTr = document.createElement("tr");
                    newTr.innerHTML = `
                        <th scope="row">${rowCount}</th>
                        <td><input type="text" class="form-control fw-bold item" placeholder="Item Name"></td>
                        <td><input onkeyup="calculateAmount(this)" type="number" class="form-control fw-bold text-end qty" min="0" step="any" placeholder="Quantity"></td>
                        <td><input onkeyup="calculateAmount(this)" type="number" class="form-control fw-bold text-end rate" min="0" step="any" placeholder="Rate"></td>
                        <td><input type="number" class="form-control fw-bold text-end amount" min="0" step="any" placeholder="Amount" readonly></td>
                    `;
                    tbody.appendChild(newTr);
                    newTr.querySelector("input").focus(); // naye row ka Item focus
                }
            } else if (idx > -1 && idx < inputs.length - 1) {
                // ✅ Item → Qty, Qty → Rate
                inputs[idx + 1].focus();
            }
        }
    }
});


const calculateAmount = (el) => {
  const tr = el.closest('tr');
  const qty = parseInt(tr.querySelector('.qty').value);
  const  rate = parseInt(tr.querySelector('.rate').value);
  tr.querySelector('.amount').value = qty * rate;

}