<?php
use Dompdf\Dompdf;
use Dompdf\Options;

require_once ("../../../vendor/autoload.php");



//varables needed from client
//Company_ID                            (Logo),(Company_name),(TPIN),(Contact),(Address),(City),(County)

//Customer_ID                           (customer_name),(Contact/Email),(Address),(City),(County)

//Item_ID                               (name),(price)

//Quantity                              (number)



//===================================need for getting querys for above data=======================================

$date= date("j-F-Y");
$addBy = "Phiri Phiri";
$rand = rand(10000,99999);
$Quotation_ID ="KP-".$rand;
$Company_name = "Kabani Pharmaceuticals";
$TPIN = 2001280365;
$contactPrifix = "+26";
$Contact = $contactPrifix."0976653445";
$Email = "Kabanipharmaceuticals@gmail.com";
$Address = "Kabulonga off kundu Road, 707";
$City = "Lusaka";
$County= "Zambia";

//Bank

$Bank ="FNB";
$Account_Name = "Kabani Pharmaceuticals Ltd";
$Account_Number = 63070668381;


//items
$inventory =array('items'=> array(
                        'id'=> "13234",
                        'Qty'=>"4"));



//customer Data

$Customer_name = "Sefula Mission Hospital";
$Cus_contact =$contactPrifix."09629480425";
$Cus_TPIN = 3745953958;
$Cus_Email = "SefulaMaission@gmail.com";
$Cus_Address = "93274 Northmead";
$Cus_City = "Ndola";
$Cus_County ="Zambia";

//============================================HTML PAGE==================================================
//get css
$css =file_get_contents('stylecss.php');
$imagePath = '../CPlogo.png';

$html = '';
$html .= '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>';
$html .= $css;
$html .= '</head>';

$html .= '<body>
<div>
  <div class="py-4">
    <div class="px-14 py-6">
      <table class="w-full border-collapse border-spacing-0">
        <tbody>
          <tr>
            <td class="w-full align-top">
              <div>
                <img src="data:image/png;base64,'.base64_encode(file_get_contents($imagePath)).'" class="h-12" />
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
                          <p class="whitespace-nowrap font-bold text-main text-right">'.$date.'</p>
                        </div>
                      </td>
                      <td class="pl-4">
                        <div>
                          <p class="whitespace-nowrap text-slate-400 text-right">QUOTATION</p>
                          <p class="whitespace-nowrap font-bold text-main text-right">'.$Quotation_ID.'</p>
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
    </div>';

    $html.=' <div class="bg-slate-100 px-14 py-6 text-sm">
    <table class="w-full border-collapse border-spacing-0">
      <tbody>
        <tr>
          <td class="w-1/2 align-top">
            <div class="text-sm text-neutral-600">
              <p class="font-bold">'.$Company_name.'</p>
              <p>Contact: '.$Contact.'</p>
              <p>Email: '.$Email.'</p>
              <p>TPIN: '.$TPIN.'</p>
              <p>'.$Address.'</p>
              <p>'.$City.", ".$County.'</p>
            </div>
          </td>
          <td class="w-1/2 align-top text-right">
            <div class="text-sm text-neutral-600">
              <p class="font-bold">'.$Customer_name.'</p>
              <p>Contact:'.$Cus_contact.'</p>
              <p>Email: '.$Cus_Email.'</p>
              <p>'.$Cus_Address.'</p>
              <p>'.$Cus_City.', '.$Cus_County.'</p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>';


  $html .='
  <div class="px-14 py-10 text-sm text-neutral-700">
    <table class="w-full border-collapse border-spacing-0">
      <thead>
        <tr>
          <td class="border-b-2 border-main pb-3 pl-3 font-bold text-main">#</td>
          <td class="border-b-2 border-main pb-3 pl-2 font-bold text-main">Product</td>
          <td class="border-b-2 border-main pb-3 pl-2 font-bold text-main">Unit Measure</td>
          <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Price</td>
          <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">Qty.</td>
          <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">VAT</td>
          <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Subtotal</td>
          <td class="border-b-2 border-main pb-3 pl-2 pr-3 text-right font-bold text-main">Subtotal + VAT</td>
        </tr>
      </thead>';


$html .='<tbody>';

$html.=' <tr>
<td class="border-b py-3 pl-3">1.</td>
<td class="border-b py-3 pl-2">Product 1</td>
<td class="border-b py-3 pl-2 text-center">Each</td>
<td class="border-b py-3 pl-2 text-right">K150.00</td>
<td class="border-b py-3 pl-2 text-center">1</td>
<td class="border-b py-3 pl-2 text-center">20%</td>
<td class="border-b py-3 pl-2 text-right">K150.00</td>
<td class="border-b py-3 pl-2 pr-3 text-right">K180.00</td>
</tr>
<tr>
<td class="border-b py-3 pl-3">2.</td>
<td class="border-b py-3 pl-2">Product 2</td>
<td class="border-b py-3 pl-2 text-center">Each</td>
<td class="border-b py-3 pl-2 text-right">K60.00</td>
<td class="border-b py-3 pl-2 text-center">2</td>
<td class="border-b py-3 pl-2 text-center">20%</td>
<td class="border-b py-3 pl-2 text-right">K120.00</td>
<td class="border-b py-3 pl-2 pr-3 text-right">K144.00</td>
</tr>
<tr>
<td class="border-b py-3 pl-3">3.</td>
<td class="border-b py-3 pl-2">Product 3</td>
<td class="border-b py-3 pl-2 text-center">Each</td>
<td class="border-b py-3 pl-2 text-right">K50.00</td>
<td class="border-b py-3 pl-2 text-center">1</td>
<td class="border-b py-3 pl-2 text-center">20%</td>
<td class="border-b py-3 pl-2 text-right">K50.00</td>
<td class="border-b py-3 pl-2 pr-3 text-right">K60.00</td>
</tr>';

$html .='<tr>
<td colspan="8">
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
                  <div class="whitespace-nowrap font-bold text-main">K320.00</div>
                </td>
              </tr>
              <tr>
                <td class="p-3">
                  <div class="whitespace-nowrap text-slate-400">VAT total:</div>
                </td>
                <td class="p-3 text-right">
                  <div class="whitespace-nowrap font-bold text-main">K64.00</div>
                </td>
              </tr>
              <tr>
                <td class="bg-main p-3">
                  <div class="whitespace-nowrap font-bold text-white">Total:</div>
                </td>
                <td class="bg-main p-3 text-right">
                  <div class="whitespace-nowrap font-bold text-white">K384.00</div>
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
</div>';


$html .='<div class="px-14 text-sm text-neutral-700">
<p class="text-main font-bold">BANK DETAILS</p>
<p>Bank: '.$Bank.'</p>
<p>Account Name: '.$Account_Name.'</p>
<p>Account Number: '.$Account_Number.'</p>
</div>

<div class="px-14 py-10 text-sm text-neutral-700">
<p class="text-main font-bold">*Note</p>
<p class="italic">1.Quotation will be valid for the next 10 days.</p>
<p class="italic">2.Payment terms: within 14.</p>
<p class="italic">3.Delivery period: within 2 days.</p>
<p class="italic">4.Currency: ZMW.</p>
</dvi>

<footer class="fixed bottom-0 left-0 bg-slate-100 w-full text-neutral-600 text-center text-xs py-3">
  Prepared By: '.$addBy.'
  <span class="text-slate-300 px-2">|</span>
  '.$Email.'
  <span class="text-slate-300 px-2">|</span>
  '.$Contact.'
</footer>';


$html .='</div>
</div>
</body>

</html>';









//============================================get pdf==================================================


function convertToPdf($html, $outputFile){
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);
    $options->set('chroot', realpath(''));
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'portrait');
    $renderOptions = new Options();
    $renderOptions->set('dpi', 300);
    $renderOptions->set('isPhpEnabled', true);

    $dompdf->setOptions($renderOptions);
    $dompdf->render();
   $dompdf->stream($outputFile, array('Attachment' => false));
}

//$html = file_get_contents('./page.php');
$outputFile = 'output.pdf';

convertToPdf($html, $outputFile);