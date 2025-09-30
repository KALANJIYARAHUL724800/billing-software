<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sales Receipt</title>
<style>
  body {
    font-family: monospace;
    margin: 0;
    padding: 0;
    background: #f4f4f4;
  }
  .receipt {
    width: 58mm; /* typical mini printer width */
    max-width: 100%;
    background: #fff;
    padding: 5px 10px;
    margin: 20px auto;
    border: 1px solid #ccc;
  }
  .center {
    text-align: center;
  }
  .row {
    display: flex;
    justify-content: space-between;
    margin: 2px 0;
  }
  .line {
    border-top: 1px dashed #000;
    margin: 5px 0;
  }
  .bold {
    font-weight: bold;
  }
  .print-btn {
    margin: 10px auto;
    display: block;
    padding: 5px 10px;
    background: darkgreen;
    color: #fff;
    border: none;
    cursor: pointer;
  }
  @media print {
    .print-btn {
      display: none;
    }
  }
</style>
</head>
<body>

<div class="receipt">
  <div class="center bold">
    Karaikudi Bakery & Snacks<br>
    75/1, 100 Feet Road, Karaikudi<br>
    +91 343454 / 932253111
  </div>
  <div class="center bold">Sales Receipt</div>

  <div class="row">
    <div>Receipt No.: 1702695342</div>
    <div>Date: 16-12-2023 03:58 AM</div>
  </div>

  <div class="line"></div>

  <div class="row bold">
    <div>S.No</div>
    <div>Product</div>
    <div>Qty</div>
    <div>Price</div>
    <div>SubTotal</div>
  </div>

  <div class="row">
    <div>1</div>
    <div>Potato Chips 1/2 Kg</div>
    <div>1</div>
    <div>200</div>
    <div>200</div>
  </div>
  <div class="row">
    <div>2</div>
    <div>Murukku</div>
    <div>1</div>
    <div>450</div>
    <div>450</div>
  </div>

  <div class="line"></div>

  <div class="row">
    <div class="bold">Total :</div>
    <div class="bold">Rs. 650</div>
  </div>
  <div class="row">
    <div>GST @ 18% :</div>
    <div>Rs. 117.00</div>
  </div>
  <div class="row bold">
    <div>TOTAL :</div>
    <div>₹ 767.00</div>
  </div>

  <div class="center">Happy New Year</div>
</div>

<button class="print-btn" onclick="window.print()">Print</button>

</body>
</html>
