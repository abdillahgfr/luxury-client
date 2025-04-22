<html>
<head>

    <meta charset="UTF-8">
    <title>Print-Booking - {{ $dataCetak->tgl_pelaksanaan }}</title>

    <style>
    body {
        font-family: sans-serif;
        font-size: 10pt;
    }

    p {
        margin: 0pt;
    }

    table.items {
        border: 0.1mm solid #e7e7e7;
    }

    td {
        vertical-align: top;
    }

    .items td {
        border-left: 0.1mm solid #e7e7e7;
        border-right: 0.1mm solid #e7e7e7;
    }

    table thead td {
        text-align: center;
        border: 0.1mm solid #e7e7e7;
    }

    .items td.blanktotal {
        background-color: #EEEEEE;
        border: 0.1mm solid #e7e7e7;
        background-color: #FFFFFF;
        border: 0mm none #e7e7e7;
        border-top: 0.1mm solid #e7e7e7;
        border-right: 0.1mm solid #e7e7e7;
    }

    .items td.totals {
        text-align: right;
        border: 0.1mm solid #e7e7e7;
    }

    .items td.cost {
        text-align: "."center;
    }
    </style>
</head>

<body>
    <table width="100%" style="font-family: sans-serif;" cellpadding="10">
        <tr>
            <td width="100%" style="padding: 0px; text-align: right;">
              <a href="#" target="_blank"><img src="https://luxurypalaceoman.com/Frontend/images/Luxury%20Palace%20Tourism-11.png" width="264" height="110" alt="Logo" align="center" border="0"></a>
            </td>
        </tr>
        <tr>
          <td height="10" style="font-size: 0px; line-height: 10px; height: 10px; padding: 0px;">&nbsp;</td>
        </tr>
    </table>
    <table width="100%" style="font-family: sans-serif;" cellpadding="10" border="0">
        <tr>
            <td width="49%" style="text-align: left;">
                <strong>{{ $dataCetak->nama }}</strong><br>
                {{ $dataCetak->origin }} <br>
            </td>
            <td width="49%" style="text-align: right;">
                <strong>Luxury Palace Tourism</strong><br>
                C.R.No.: 1375294. P.P.Box: 3079<br>
                Postal Code: 112<br>
                Muscat, Sultanate of Oman<br>
                Oman<br><br>
                <strong>P:</strong> +96894586003<br>
            </td>
        </tr>
    </table>
    
    <br>
    <table width="100%" style="font-family: sans-serif; font-size: 12px;" >
        <tr>
            <td>
                <table width="60%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">&nbsp;</td>
                    </tr>
                </table>
                <table width="40%" align="right" style="font-family: sans-serif; font-size: 14px;" border="0">
                    <tr>
                        <td style="padding: 0px 8px; line-height: 20px;"><strong>Invoice Date</strong></td>
                        <td style="padding: 0px 8px; line-height: 20px;">{{ \Carbon\Carbon::parse($dataCetak->tgl_pelaksanaan)->format('Y-M-d') }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 8px; line-height: 20px;"><strong>Due Date</strong></td>
                        <td style="padding: 0px 8px; line-height: 20px;">{{ \Carbon\Carbon::parse($dataCetak->tgl_pelaksanaan)->addDays(4)->format('Y-M-d') }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 8px; line-height: 20px;"><strong>Amount Due</strong></td>
                        <td style="padding: 0px 8px; line-height: 20px;">${{ number_format($dataCetak->item, 2) }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 8px; line-height: 20px;"><strong>Payment Method</strong></td>
                        <td style="padding: 0px 8px; line-height: 20px;">Bank Transfer</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <h2 style="color: blue;">INVOICE 00{{ $dataCetak->id  }}</h2>
    <table class="items" width="100%" style="font-size: 12px;" cellpadding="8">
        <thead>
            <tr>
                <td width="20%" style="text-align: left;"><strong>Item</strong></td>
                <td width="30%" style="text-align: left;"><strong>Description</strong></td>
                <td width="15%" style="text-align: left;"><strong>Qty</strong></td>
                <td width="15%" style="text-align: left;"><strong>Price</strong></td>
                <td width="20%" style="text-align: left;"><strong>Total</strong></td>
            </tr>
        </thead>
        <tbody>
            <!-- ITEMS HERE -->
            <tr style="background-color: #dddddd;">
                <td style="padding: 0px 7px; line-height: 20px;">{{ $dataCetak->paket }}</td>
                <td style="padding: 0px 7px; line-height: 20px;">{!! $dataCetak->content !!}</td>
                <td style="padding: 0px 7px; line-height: 20px;">{{ $dataCetak->person }}</td>
                <td style="padding: 0px 7px; line-height: 20px;">
                     @if ($dataCetak->paket === "Private Group")
                        $1000
                    @elseif ($dataCetak->paket === "Program Full day City Tour Muscat")
                        $100
                    @elseif ($dataCetak->paket === "Program Half day Muscat City Tour")
                        $40
                    @elseif ($dataCetak->paket === "Ziarah Makam Nabi Ayyub AS, Salalah Oman")
                        $450
                    @endif
                </td>
                <td style="padding: 0px 7px; line-height: 20px;">${{ number_format($dataCetak->item, 2) }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="100%" style="font-family: sans-serif; font-size: 12px;" >
        <tr>
            <td>
                <table width="50%" align="right" style="font-family: sans-serif; font-size: 12px;" >
                    <tr>
                        <td style="padding: 0px 8px; line-height: 30px; text-align: right;">Sub Total</td>
                        <td style="padding: 0px 8px; line-height: 30px; text-align: center;">${{ number_format($dataCetak->item, 2) }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 8px; line-height: 30px; text-align: right;">Discount</td>
                        <td style="padding: 0px 8px; line-height: 30px; text-align: center;">${{ number_format($dataCetak->discount, 2) }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 8px; line-height: 30px; text-align: right;"><strong>Total</strong></td>
                        <td style="padding: 0px 8px; line-height: 30px; text-align: center;"><strong>${{ number_format($dataCetak->item - $dataCetak->discount, 2) }}</strong></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%" style="font-family: sans-serif; font-size: 14px;" >
        <hr>
        <tr>
            <td>
                <table width="50%" align="left" style="font-family: sans-serif; font-size: 12px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px; color: #898989;">
                            <strong>Term of Payment</strong>
                            <br>
                            Please Kindly Transfer to:
                            <br>
                            Name : AL FAZIL HAMAMI<br>
                            Bank Negara Indonesia / BNI 
                            <br>Rupiah Account No : 0569876446<br>
                            Bank Central Asia / BCA <br>Rupiah Account No : 273 0011108<br>
                            ---
                            <br>
                            Sulaiman Muhammad Husen<br>
                            Bank Muscat Oman<br>
                            Rial Omani Account No : 0312041632250016<br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <br>
    </table>
</body>
</html>