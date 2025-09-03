let rowCount = 1; 

document.addEventListener("keyup", (e) => {
  if (e.key === "Enter") {
    const el = e.target;
    const parenetTbody = el.closest(".invoice-body");
    if (parenetTbody) {
      if (el.classList.contains("rate")) {
        const tr = document.createElement('tr');
        rowCount++;
        tr.innerHTML = `<th scope="row">${rowCount}</th>
                        <td><input type="text" class="form-control fw-bold item" placeholder="Item Name"></td>
                        <td><input onkeyup="calculateAmount(this)" type="number" class="form-control fw-bold text-end qty" min="0" step="any" placeholder="Quantity"></td>
                        <td><input onkeyup="calculateAmount(this)" type="number" class="form-control fw-bold text-end rate" min="0" step="any" placeholder="Rate"></td>
                        <td><input type="number" class="form-control fw-bold text-end amount" min="0" step="any" placeholder="Amount" readonly></td>`;
        parenetTbody.appendChild(tr);
        parenetTbody.querySelector('tr:last-child input').focus();
      }
    }
  }
});
