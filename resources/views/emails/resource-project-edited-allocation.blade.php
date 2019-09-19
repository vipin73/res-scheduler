<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Notification</title>
    <style type="text/css">
        /* -------------------------------------
            INLINED WITH https://putsmail.com/inliner
        ------------------------------------- */
        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important; }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important; }
            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important; }
            table[class=body] .content {
                padding: 0 !important; }
            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important; }
            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important; }
            table[class=body] .btn table {
                width: 100% !important; }
            table[class=body] .btn a {
                width: 100% !important; }
            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important; }}
        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%; }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%; }
            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important; }
            .btn-primary table td:hover {
                background-color: #34495e !important; }
            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important; } }
    </style>
</head>
<body class="" style="background-color:#f6f6f6;font-family:sans-serif;-webkit-font-smoothing:antialiased;font-size:14px;line-height:1.4;margin:0;padding:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
<table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;background-color:#f6f6f6;width:100%;">
    <tr>
        <td style="font-family:sans-serif;font-size:14px;vertical-align:top;">&nbsp;</td>
        <td class="container" style="font-family:sans-serif;font-size:14px;vertical-align:top;display:block;max-width:580px;padding:10px;width:580px;Margin:0 auto !important;">
            <div class="content" style="box-sizing:border-box;display:block;Margin:0 auto;max-width:580px;padding:10px;">
                <!-- START CENTERED WHITE CONTAINER -->
                <span class="preheader" style="color:transparent;display:none;height:0;max-height:0;max-width:0;opacity:0;overflow:hidden;mso-hide:all;visibility:hidden;width:0;">Resource Scheduler alert.</span>
                <table class="main" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;background:#fff;border-radius:3px;width:100%;">
                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper" style="font-family:sans-serif;font-size:14px;vertical-align:top;box-sizing:border-box;padding:20px;">
                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;">
                                <tr>
                                    <td style="font-family:sans-serif;font-size:14px;vertical-align:top;">
                                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;">Hi {{$firstName}},</p>
                                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px;">{{$assignerName}} has changed your allocation on project <strong>{{$projectName}}</strong> from {{$startDate}} till {{$endDate}}</p>

                                        <table>
                                        @foreach($changeCheckValues as $type=>$changeCheckValues)
                                        <tr>
                                            <td>
                                                <span>
                                                    @if($type=='allocation_value')
                                                        Allocation %
                                                    @elseif($type=='start_date')
                                                        Start Date
                                                    @elseif($type=='end_date')
                                                        End Date
                                                    @elseif($type=='description')
                                                        Description &nbsp;&nbsp;:
                                                    @endif
                                                </span>
                                            </td>
                                            <td>

                                                @if($changeCheckValues['existing']!=$changeCheckValues['changed'])
                                                    @if($type=="description")
                                                        <p>&nbsp;&nbsp;
                                                    @else
                                                        <p>:&nbsp;&nbsp;
                                                    @endif
                                                    <span style="background-color:#ffe7e7;text-decoration:line-through">{{$changeCheckValues['existing']}}{{($type=='allocation_value')?'%':''}}</span>
                                                    @if($type=="description" && $changeCheckValues['existing']!='')
                                                    </p><p>&nbsp;&nbsp;
                                                    @endif
                                                    <span style="background-color:#ddfade">{{$changeCheckValues['changed']}}{{($type=='allocation_value')?'%':''}}</span>
                                                @else
                                                    @if($type=="description")
                                                        <p>&nbsp;&nbsp;
                                                    @else
                                                        <p>:&nbsp;&nbsp;
                                                    @endif

                                                    <span style="background-color:#f2f2f2">{{$changeCheckValues['changed']}}{{($type=='allocation_value')?'%':''}}</span>
                                                @endif
                                                </p>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </table>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- START FOOTER -->
                <div class="footer" style="clear:both;padding-top:10px;text-align:center;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;">
                        <tr>
                            <td class="content-block powered-by" style="font-family:sans-serif;font-size:14px;vertical-align:top;color:#999999;font-size:12px;text-align:center;">
                                Cubet Technolabs
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->
                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td style="font-family:sans-serif;font-size:14px;vertical-align:top;">&nbsp;</td>
    </tr>
</table>
</body>
</html>