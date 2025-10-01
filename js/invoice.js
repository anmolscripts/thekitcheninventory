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
                        <td><input onkeyup="calculateRowAmount(this)" type="number" class="form-control fw-bold text-end qty" min="0" step="any" placeholder="Quantity"></td>
                        <td><input onkeyup="calculateRowAmount(this)" type="number" class="form-control fw-bold text-end rate" min="0" step="any" placeholder="Rate"></td>
                        <td><input type="number" class="form-control fw-bold text-end amount" min="0" step="any" placeholder="Amount" readonly></td>
                    `;
          tbody.appendChild(newTr);
          newTr.querySelector("input").focus(); // naye row ka Item focus
        }
      } else if (idx > -1 && idx < inputs.length - 1) {
        inputs[idx + 1].focus();
      }
    }
  }
});

const calculateRowAmount = (el) => {
  const tr = el.closest("tr");
  const qty = parseInt(tr.querySelector(".qty").value);
  const rate = parseInt(tr.querySelector(".rate").value);
  tr.querySelector(".amount").value = qty * rate;
  calculateAmount();
};

const calculateAmount = () => {
  const invoiceRows = document.querySelectorAll(".invoice-body tr");
  let totalAmount = 0;
  if (invoiceRows.length > 0) {
    invoiceRows.forEach((row) => {
      const amount = row.querySelector(".amount");
      if (amount && amount.value != "") {
        totalAmount += parseInt(amount.value);
      }
    });
    document.getElementById("basic").value = totalAmount;
  }

  const sgst = document.getElementById("sgst");
  const cgst = document.getElementById("cgst");
  const igst = document.getElementById("igst");
  const afterTex = document.getElementById("afterTex");
  const roundOff = document.getElementById("roundOff");
  const grandTotal = document.getElementById("grandTotal");

  if (sgst && cgst && igst && afterTex && roundOff && grandTotal) {
    const sgstValue = parseFloat(sgst.value);
    const cgstValue = parseFloat(cgst.value);
    const igstValue = parseFloat(igst.value);
    const afterTexValue = totalAmount + sgstValue + cgstValue + igstValue;
    const roundOffValue = parseFloat(roundOff.value);
    const grandTotalValue = afterTexValue - roundOffValue;
    afterTex.value = afterTexValue.toFixed(2);
    grandTotal.value = grandTotalValue.toFixed(2);
  }
};

const calculateTex = (value, targetId) => {
  const tax = parseFloat(value);
  const basic = parseFloat(document.getElementById("basic").value);
  const perValue = (tax / 100) * basic;
  document.getElementById(targetId).value = perValue.toFixed(2);
  calculateAmount();
};

const calculateRoundOff = (value, targetId) => {
  const roundoff = parseFloat(value);
  document.getElementById(targetId).value = roundoff.toFixed(2);
  calculateAmount();
};

const setError = (id, flag = true) => {
  const el = document.getElementById(id);
  if (el) {
    if (flag) {
      el.classList.remove("sucess");
      el.classList.add("error");
    } else {
      el.classList.remove("error");
      el.classList.add("sucess");
    }
  }
};

const checkForValue = (id) => {
  const input = document.getElementById(id);
  if (input) {
    const { value } = input;
    if (value && value.trim() !== "") {
      setError(id, false);
      return value;
    } else {
      setError(id);
      return false;
    }
  }
};

const getInvoiceData = () => {
  let data = {};
  let flag = true;

  const client = checkForValue("clientName");
  client ? (data.client = client) : (flag = false);

  const date = checkForValue("invoiceData");
  date ? (data.date = date) : (flag = false);

  const category = checkForValue("category");
  category ? (data.category = category) : (flag = false);

  const invoiceRows = document
    .querySelector(".invoice-body")
    .querySelectorAll("tr");
  if (invoiceRows.length > 0) {
    let rowData = [];
    invoiceRows.forEach((row) => {
      if (
        row.querySelector(".item") &&
        row.querySelector(".item").value.trim() !== ""
      ) {
        rowData.push({
          item: row.querySelector(".item").value,
          qty: row.querySelector(".qty").value,
          rate: row.querySelector(".rate").value,
          amount: row.querySelector(".amount").value,
        });
      }
    });

    data.rowData = rowData;
  }

  const sgstPer = document.getElementById("sgstPer");
  sgstPer ? (data.sgst = parseFloat(sgstPer.value).toFixed(2)) : 0.0;

  const cgstPer = document.getElementById("cgstPer");
  cgstPer ? (data.cgst = parseFloat(cgstPer.value).toFixed(2)) : 0.0;

  const igstPer = document.getElementById("igstPer");
  igstPer ? (data.igst = parseFloat(igstPer.value).toFixed(2)) : 0.0;

  const roundoffValue = document.getElementById("roundoffValue");
  roundoffValue
    ? (data.roundoff = parseFloat(roundoffValue.value).toFixed(2))
    : 0.0;

    console.log(data);
  $.ajax({
    url: "/latest/wp-admin/admin-ajax.php", // WordPress ka predefined global var
    type: "POST",
    data: {
      action: "run_stored_procedure",
      sp_name: "insert_invoice_json",
      params: data,
    },
    success: function (response) {
      console.log("SP Result:", response);
    },
  });
};

document.addEventListener("DOMContentLoaded", () => {
  $.ajax({
    url: "/latest/wp-admin/admin-ajax.php", // WordPress ka predefined global var
    type: "POST",
    data: { action: "get_data" },
    success: function (response) {
      console.log("SP Result:", response);
    },
  });
});
