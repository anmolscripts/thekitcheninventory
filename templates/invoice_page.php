<?php

/**
 * Template Name: Invoice Page
 * Description: Custom home page template for Twenty Twenty-One Child theme.
 * Author: Your Name
 * Version: 1.0
 *
 * @package TwentyTwentyOneChild
 */
?>

<?php get_header('new'); ?>

<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/style.css">
<style>
    .w-max-content {
        width: max-content !important;
    }

    .invoice-container * {
        color: #000 !important;
    }

    .table>:not(caption)>*>* {
        border-bottom-width: 0px;
    }
    tbody * {
        vertical-align: middle !important;
    }

    .bottom-box {
        background-color: rgba(255,255,255,.8);
        backdrop-filter: blur(5px);
        transform: translateX(-50%);
        left: 50% !important;
        bottom: 1rem !important;
    }
</style>

<div class="pt-5 mt-5">
    <div class="container mt-5">
        <div class="invoice-container border p-3 border-black">
            <div class="">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/letter-head.jpg" class="img-fluid" alt="...">
            </div>
            <div class="d-flex justify-content-between align-items-center gap-5">
                <div class="d-flex gap-3 w-50 align-items-center">
                    <p class="w-max-content col-3 mb-0"><strong>Client :</strong></p><input type="text" id="clientName" class="form-control fw-bold" placeholder="Client Name">
                </div>
                <div class="d-flex gap-3 w-50 align-items-center">
                    <p class="w-max-content col-3 mb-0"><strong>Date :</strong></p><input type="date" id="invoiceData" class="form-control fw-bold" placeholder="Client Name">
                </div>
            </div>
            <div class="w-50 mx-auto mt-3">
                <select class="form-select border-black rounded-0 border-3 py-2 fw-bold " id="inputGroupSelect01">
                    <option value="" selected disabled>Choose...</option>
                    <option value="1">Quotation</option>
                    <option value="2">Invoice</option>
                </select>
            </div>
            <hr />
            <table class="table border-0">
                <thead>
                    <tr>
                        <th scope="col" width="100">S No.</th>
                        <th scope="col" width="50%">Particular</th>
                        <th class="text-end" scope="col" width="150">Quantity</th>
                        <th class="text-end" scope="col">Rate</th>
                        <th class="text-end" scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider invoice-body">
                    <tr>
                        <th scope="row">1</th>
                        <td><input type="text" class="form-control fw-bold item" placeholder="Item Name"></td>
                        <td><input onkeyup="calculateRowAmount(this)" type="number" class="form-control fw-bold text-end qty" min="0" step="any" placeholder="Quantity"></td>
                        <td><input onkeyup="calculateRowAmount(this)" name="rate" type="number" class="form-control fw-bold text-end rate" min="0" step="any" placeholder="Rate"></td>
                        <td><input type="number" class="form-control fw-bold text-end amount" min="0" step="any" placeholder="Amount" readonly></td>
                    </tr>
                </tbody>
                <tfoot class="table-group-divider">
                    <tr>
                        <th scope="row" ></th>
                        <td colspan="3" class="fw-bold fs-5">Basic Total</td>
                        <td><input id="basic" type="number" class="form-control fw-bold text-end" min="0" step="any" placeholder="Amount" readonly></td>
                    </tr>
                    <tr>
                        <th scope="row" ></th>
                        <td colspan="2" class="fw-bold fs-5">SGST</td>
                        <td><input onkeyup="calculateTex(this.value, 'sgst')" type="number" class="form-control fw-bold text-end" min="0" step="any" placeholder="Persentage"></td>
                        <td><input id="sgst" type="number" class="form-control fw-bold text-end" min="0" step="any" placeholder="Amount" value="0" readonly></td>
                    </tr>
                    <tr>
                        <th scope="row" ></th>
                        <td colspan="2" class="fw-bold fs-5">CGST</td>
                        <td><input onkeyup="calculateTex(this.value, 'cgst')" type="number" class="form-control fw-bold text-end" min="0" step="any" placeholder="Persentage"></td>
                        <td><input id="cgst" type="number" class="form-control fw-bold text-end" min="0" step="any" placeholder="Amount" value="0" readonly></td>
                    </tr>
                    <tr>
                        <th scope="row" ></th>
                        <td colspan="2" class="fw-bold fs-5">IGST</td>
                        <td><input onkeyup="calculateTex(this.value, 'igst')" type="number" class="form-control fw-bold text-end" min="0" step="any" placeholder="Persentage"></td>
                        <td><input id="igst" type="number" class="form-control fw-bold text-end" min="0" step="any" placeholder="Amount" value="0" readonly></td>
                    </tr>
                    <tr>
                        <th scope="row" ></th>
                        <td colspan="3" class="fw-bold fs-5">Total After Tex</td>
                        <td><input id="afterTex" type="number" class="form-control fw-bold text-end" min="0" step="any" placeholder="Amount" value="0" readonly></td>
                    </tr>
                    <tr>
                        <th scope="row" ></th>
                        <td colspan="2" class="fw-bold fs-5">Round Off</td>
                        <td><input onkeyup="calculateRoundOff(this.value, 'roundOff')" type="number" class="form-control fw-bold text-end" min="0" step="any" placeholder="Persentage"></td>
                        <td><input id="roundOff" type="number" class="form-control fw-bold text-end" min="0" step="any" placeholder="Amount" value="0" readonly></td>
                    </tr>
                    <tr class="table-group-divider">
                        <th scope="row" ></th>
                        <td colspan="3" class="fw-bold fs-4">Total</td>
                        <td><input id="grandTotal" type="number" class="form-control fw-bold text-end fs-4" min="0" step="any" placeholder="Amount" readonly></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div class="position-fixed bottom-0 left-0 px-3 py-3 bottom-box rounded-pill shadow mx-auto">
    <div class="d-flex gap-3 justify-content-center">
        <button onclick="getInvoiceData()" class="btn header-cta btn-lg rounded-pill text-uppercase shadow">Save</button>
        <button class="btn btn-secondary btn-lg rounded-pill text-uppercase shadow">Print</button>
        <button class="btn btn-secondary btn-lg rounded-pill text-uppercase shadow">Print</button>
    </div>
</div>


<script src="<?= get_stylesheet_directory_uri(); ?>/js/invoice.js"></script>

<?php get_footer('new'); ?>