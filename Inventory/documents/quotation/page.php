<?php

//varables needed from client
//Company_ID                            (Logo),(Company_name),(TPIN),(Contact),(Address),(City),(County)

//Customer_ID                           (customer_name),(Contact/Email),(Address),(City),(County)

//Item_ID                               (name),(price)

//Quantity                              (number)



//===================================need for getting querys for above data=======================================

$date= date("j-F-Y");
$rand = rand(10000,99999);
$Quotation_ID ="KP".$rand;
$Commpany_name = "Kabani Pharmaceuticals";
$TPIN = 2001280365;
$contactPrifix = "+26";
$Contact = $contactPrifix."0976653445";
$Email = "Kabanipharmaceuticals@gmail.com";
$Address = "Kabulonga off kundu Road, 707";
$City = "Lusaka";
$County= "Zambia";

//customer Data

$Customer_name = "Sefula Mission Hospital";
$Cus_contact =$contactPrifix."09629480425";
$Cus_TPIN = 3745953958;
$Cus_Email = "SefulaMaission@gmail.com";
$Cus_Address = "93274 Northmead";
$Cus_City = "Ndola";
$Cus_County ="Zambia";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body>
  <div>
    <div class="py-4">
      <div class="px-14 py-6">
        <table class="w-full border-collapse border-spacing-0">
          <tbody>
            <tr>
              <td class="w-full align-top">
                <div>
                  <img src="../logo.jpg" class="h-12" />
                </div>
              </td>

              <td class="align-top">
                <div class="text-sm">
                  <table class="border-collapse border-spacing-0">
                    <tbody>
                      <tr>
                        <td class="border-r pr-4">
                          <div>
                            <p class="whitespace-nowrap text-slate-400 text-right">Date</p>
                            <p class="whitespace-nowrap font-bold text-main text-right"><?=$date?></p>
                          </div>
                        </td>
                        <td class="pl-4">
                          <div>
                            <p class="whitespace-nowrap text-slate-400 text-right">Invoice #</p>
                            <p class="whitespace-nowrap font-bold text-main text-right"><?=$Quotation_ID?></p>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="bg-slate-100 px-14 py-6 text-sm">
        <table class="w-full border-collapse border-spacing-0">
          <tbody>
            <tr>
              <td class="w-1/2 align-top">
                <div class="text-sm text-neutral-600">
                  <p class="font-bold"><?=$Commpany_name?></p>
                  <p>Contact: <?=$Contact?></p>
                  <p>Email: <?=$Email?></p>
                  <p>TPIN: <?=$TPIN?></p>
                  <p><?=$Address?></p>
                  <p><?=$City.", ".$County?></p>
                </div>
              </td>
              <td class="w-1/2 align-top text-right">
                <div class="text-sm text-neutral-600">
                  <p class="font-bold"><?=$Customer_name?></p>
                  <p>Contact:<?=$Cus_contact?></p>
                  <p>Email: <?=$Cus_Email?></p>
                  <p><?=$Cus_Address?></p>
                  <p><?=$Cus_City.", ".$Cus_County?></p>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="px-14 py-10 text-sm text-neutral-700">
        <table class="w-full border-collapse border-spacing-0">
          <thead>
            <tr>
              <td class="border-b-2 border-main pb-3 pl-3 font-bold text-main">#</td>
              <td class="border-b-2 border-main pb-3 pl-2 font-bold text-main">Product details</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Price</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">Qty.</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">VAT</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Subtotal</td>
              <td class="border-b-2 border-main pb-3 pl-2 pr-3 text-right font-bold text-main">Subtotal + VAT</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border-b py-3 pl-3">1.</td>
              <td class="border-b py-3 pl-2">Product 1</td>
              <td class="border-b py-3 pl-2 text-right">$150.00</td>
              <td class="border-b py-3 pl-2 text-center">1</td>
              <td class="border-b py-3 pl-2 text-center">20%</td>
              <td class="border-b py-3 pl-2 text-right">$150.00</td>
              <td class="border-b py-3 pl-2 pr-3 text-right">$180.00</td>
            </tr>
            <tr>
              <td class="border-b py-3 pl-3">2.</td>
              <td class="border-b py-3 pl-2">Product 2</td>
              <td class="border-b py-3 pl-2 text-right">$60.00</td>
              <td class="border-b py-3 pl-2 text-center">2</td>
              <td class="border-b py-3 pl-2 text-center">20%</td>
              <td class="border-b py-3 pl-2 text-right">$120.00</td>
              <td class="border-b py-3 pl-2 pr-3 text-right">$144.00</td>
            </tr>
            <tr>
              <td class="border-b py-3 pl-3">3.</td>
              <td class="border-b py-3 pl-2">Product 3</td>
              <td class="border-b py-3 pl-2 text-right">$50.00</td>
              <td class="border-b py-3 pl-2 text-center">1</td>
              <td class="border-b py-3 pl-2 text-center">20%</td>
              <td class="border-b py-3 pl-2 text-right">$50.00</td>
              <td class="border-b py-3 pl-2 pr-3 text-right">$60.00</td>
            </tr>
            <tr>
              <td colspan="7">
                <table class="w-full border-collapse border-spacing-0">
                  <tbody>
                    <tr>
                      <td class="w-full"></td>
                      <td>
                        <table class="w-full border-collapse border-spacing-0">
                          <tbody>
                            <tr>
                              <td class="border-b p-3">
                                <div class="whitespace-nowrap text-slate-400">Net total:</div>
                              </td>
                              <td class="border-b p-3 text-right">
                                <div class="whitespace-nowrap font-bold text-main">$320.00</div>
                              </td>
                            </tr>
                            <tr>
                              <td class="p-3">
                                <div class="whitespace-nowrap text-slate-400">VAT total:</div>
                              </td>
                              <td class="p-3 text-right">
                                <div class="whitespace-nowrap font-bold text-main">$64.00</div>
                              </td>
                            </tr>
                            <tr>
                              <td class="bg-main p-3">
                                <div class="whitespace-nowrap font-bold text-white">Total:</div>
                              </td>
                              <td class="bg-main p-3 text-right">
                                <div class="whitespace-nowrap font-bold text-white">$384.00</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="px-14 text-sm text-neutral-700">
        <p class="text-main font-bold">PAYMENT DETAILS</p>
        <p>Banks of Banks</p>
        <p>Bank/Sort Code: 1234567</p>
        <p>Account Number: 123456678</p>
        <p>Payment Reference: BRA-00335</p>
      </div>

      <div class="px-14 py-10 text-sm text-neutral-700">
        <p class="text-main font-bold">Notes</p>
        <p class="italic">Quotation will be valid for the nest 15 days .</p>
        </dvi>

        <footer class="fixed bottom-0 left-0 bg-slate-100 w-full text-neutral-600 text-center text-xs py-3">
          Supplier Company
          <span class="text-slate-300 px-2">|</span>
          My@company.com
          <span class="text-slate-300 px-2">|</span>
          +26097242523565
        </footer>
      </div>
    </div>
</body>

</html>
