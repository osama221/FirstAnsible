<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountRealTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'en',
                'title' => 'Your BBC account will be deleted soon',
                'description' => 'Your BBC account will be deleted soon',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => null, // Random between 1 to 10
                'is_phishing'=> 0, // 0 = false / 1 = true
                'reason'=>'real sender Email',
                'short_reason'=>'real sender Email',
                'sender' => 'security@Kbbc.co.uk',
                'template'=> "<!DOCTYPE html>
                <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml'
                    xmlns:o='urn:schemas-microsoft-com:office:office'>

                <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <style>
                        @media screen and (max-device-width: 600px),
                        screen and (max-width: 600px) {
                            .mobile-margin {
                                padding: 0px 20px 0px 20px
                            }

                            .wrapto100pc,
                            .w100pc {
                                width: 100% !important;
                                height: auto !important;
                                min-width: 100% !important;
                            }

                            .menu-border {
                                border-bottom: 1px solid #424242 !important;
                                border-right: none !important;
                                padding: 15px 0 15px 0 !important
                            }

                            .textcenter {
                                display: block !important;
                                text-align: center !important;
                                padding: 5px 0 !important;
                            }
                        }
                    </style>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <!--[if !mso]><!-- -->
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <!--<![endif]-->
                    <meta name='format-detection' content='telephone=no'>
                    <meta name='x-apple-disable-message-reformating'>
                    <title>BBC</title>

                </head>

                <body leftmargin='0' topmargin='0' rightmargin='0' bgcolor='#ffffff'
                    style='background-color: #ffffff; margin:0;padding:0;width:100%; font-family: Helvetica,Arial;'>
                    <div style='max-width: 100%;'>
                    <table border='0' cellpadding='0' cellspacing='0' class='nomob' role='presentation' style='min-width:100%;'
                        width='100%'>
                        <tbody>
                            <tr>
                                <td align='center'>
                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='min-width: 100%; '
                                        class='stylingblock-content-wrapper'>
                                        <tbody>
                                            <tr>
                                                <td class='stylingblock-content-wrapper camarker-inner'>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='nomob' role='presentation'
                                                        style='min-width:100%;' width='100%'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center'>
                                                                    <table border='0' cellpadding='0' cellspacing='0' class='nomob'
                                                                        role='presentation' style='width: 700px;' width='700'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center'
                                                                                    style='padding:8px 20px 8px 20px; font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;color:#343434;'>

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
                                </td>
                            </tr>
                        </tbody>
                    </table><!-- Main content --->
                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='700' style='width: 700px;'
                        class='wrapto100pc' align='center'>
                        <tbody>
                            <tr>
                                <td align='center'>
                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='min-width: 100%; '
                                        class='stylingblock-content-wrapper'>
                                        <tbody>
                                            <tr>
                                                <td class='stylingblock-content-wrapper camarker-inner'>
                                                    <!-- BBC Header -->
                                                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='wrapto100pc'
                                                        role='presentation' style='width:700px' width='700'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' bgcolor='#006def'>
                                                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                                                        class='wrapto100pc' role='presentation' style='width:580px;'
                                                                        width='580'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' valign='top'>
                                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                                        role='presentation' width='100%'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class='mobile-banner' style='padding:20px 0 25px 0;'>
                                                                                                    <table border='0' cellpadding='0'
                                                                                                        cellspacing='0'
                                                                                                        role='presentation'

                                                                                                        width='100%'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <th align='center'
                                                                                                                    class='colsplit'
                                                                                                                    style='vertical-align: middle;'>
                                                                                                                    <a href='https://www.bbc.co.uk/'
                                                                                                                        target='_blank'
                                                                                                                        title='BBC Homepage'><img
                                                                                                                            alt='BBC logo'
                                                                                                                            border='0'
                                                                                                                            height='30'
                                                                                                                            src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANwAAAA+CAYAAABA1nUIAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTVDMzRDRUZGNThBMTFFNUEwRDVDNzRBQjk5MTIyRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTVDMzRDRjBGNThBMTFFNUEwRDVDNzRBQjk5MTIyRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBNUMzNENFREY1OEExMUU1QTBENUM3NEFCOTkxMjJFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBNUMzNENFRUY1OEExMUU1QTBENUM3NEFCOTkxMjJFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Puon284AAAjNSURBVHja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'
                                                                                                                            style='display:block'
                                                                                                                            width='107'></a>
                                                                                                                </th>
                                                                                                                <th class='colsplit-padding'
                                                                                                                    style='vertical-align: middle;'>
                                                                                                                    <table border='0'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        role='presentation'
                                                                                                                        width='100%'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td>
                                                                                                                                    <table
                                                                                                                                        border='0'
                                                                                                                                        cellpadding='0'
                                                                                                                                        cellspacing='0'
                                                                                                                                        role='presentation'
                                                                                                                                        width='100%'>
                                                                                                                                        <tbody>
                                                                                                                                            <tr>
                                                                                                                                                <th class='colsplit'
                                                                                                                                                    style='font-weight: normal;'>
                                                                                                                                                    <h1 align='center' color='white'
                                                                                                                                                        class='fontsize20'
                                                                                                                                                        style='font-family: Helvetica, Arial, sans-serif; font-size:30px; line-height:32px; color:#ffffff;font-weight: normal;margin:0;'>
                                                                                                                                                        &nbsp;Your
                                                                                                                                                        BBC
                                                                                                                                                        account&nbsp;
                                                                                                                                                    </h1>
                                                                                                                                                </th>

                                                                                                                                            </tr>
                                                                                                                                        </tbody>
                                                                                                                                    </table>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </th>
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
                            <tr>
                                <td align='center'>
                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='min-width: 100%; '
                                        class='stylingblock-content-wrapper'>
                                        <tbody>
                                            <tr>
                                                <td class='stylingblock-content-wrapper camarker-inner'>
                                                    <!-- Did you know -->
                                                    <table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0'
                                                        role='presentation' width='100%'>
                                                        <tbody>
                                                            <tr>
                                                                <!-- <td><img alt='' height='1'
                                                                        src='https://image.e.bbcmail.co.uk/lib/fe9013727761077872/m/18/sounds-welcome-sp.gif'
                                                                        width='30'></td> -->
                                                                <td align='center' style='padding-bottom: 20px;'>
                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                        class='wrapto100pc' style='width:600px;' width='600'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style='padding: 10px 0px 20px;'>
                                                                                    <h2
                                                                                        style='font-family: Arial; font-size: 28px; color: #000001; line-height: 41px;padding: 0; margin: 0;'>
                                                                                    </h2>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <p
                                                                                        style='font-family: Arial; font-size: 16px; color: #000001; line-height: 23px;padding: 0; margin:0;'>
                                                                                        Hello #name,<br><br>We’ve noticed that it’s been over
                                                                                        a year since you used the BBC account connected
                                                                                        with this email address.<br><br>We don't want to
                                                                                        keep your data for longer than we need to. So
                                                                                        assuming you’re no longer using this account,
                                                                                        we're planning to delete it after <strong>{year}</strong>.<br><br>If you want to
                                                                                        keep the account open, please sign in before
                                                                                        then.</p>
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
                                </td>
                            </tr>
                            <tr>
                                <td align='center'>
                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='min-width: 100%; '
                                        class='stylingblock-content-wrapper'>
                                        <tbody>
                                            <tr>
                                                <td class='stylingblock-content-wrapper camarker-inner'>
                                                    <meta name='ROBOTS' content='NOINDEX, NOFOLLOW'>
                                                    <meta name='referrer' content='no-referrer'>
                                                    <style type='text/css'>
                                                        @media screen and (max-device-width: 600px),
                                                        screen and (max-width: 600px) {
                                                            .mobile-margin {
                                                                padding: 0px 20px 0px 20px
                                                            }

                                                            .wrapto100pc,
                                                            .w100pc {
                                                                width: 100% !important;
                                                                height: auto !important;
                                                                min-width: 100% !important;
                                                            }

                                                            .menu-border {
                                                                border-bottom: 1px solid #424242 !important;
                                                                border-right: none !important;
                                                                padding: 15px 0 15px 0 !important
                                                            }

                                                            .textcenter {
                                                                display: block !important;
                                                                text-align: center !important;
                                                                padding: 5px 0 !important;
                                                            }
                                                        }
                                                    </style>
                                                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                                                    <!--[if !mso]><!-- -->
                                                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                                                    <!--<![endif]-->
                                                    <meta name='format-detection' content='telephone=no'>
                                                    <meta name='x-apple-disable-message-reformating'>
                                                    <title></title>
                                                    <style type='text/css'>


                                                        @font-face {
                                                        font-family: 'Helvetica';
                                                        src: url('font/Helvetica.eot');
                                                        src: url('font/Helvetica.ttf');
                                                        src: url('font/Helvetica.woff');
                                                        src: url('font/Helvetica.woff2');
                                                        font-weight: normal;
                                                        font-style: normal;
                                                        font-display: swap;
                                                        }


                                                        div,
                                                        p,
                                                        a,
                                                        li,
                                                        td {
                                                            -webkit-text-size-adjust: none;
                                                            -ms-text-size-adjust: none;
                                                        }

                                                        body {
                                                            margin: 0;
                                                            padding: 0;
                                                            background-color: #eeeeee;
                                                        }

                                                        table td {
                                                            border-collapse: collapse;
                                                        }

                                                        table th {
                                                            margin: 0 !important;
                                                            padding: 0 !important;
                                                            vertical-align: top;
                                                            font-weight: normal;
                                                        }

                                                        div[style*='margin: 16px 0'] {
                                                            margin: 0 !important;
                                                        }

                                                        .ExternalClass {
                                                            width: 100%;
                                                        }

                                                        .ExternalClass * {
                                                            line-height: 110%
                                                        }

                                                        img {
                                                            -ms-interpolation-mode: bicubic;
                                                        }

                                                        .appleLinksgrey a {
                                                            color: #9ca299 !important;
                                                            text-decoration: none;
                                                        }

                                                        /* control text changed to links by phones */



                                                        @media only screen {
                                                            body {
                                                                width: 100% !important;
                                                                min-width: 100% !important;
                                                            }

                                                            a[x-apple-data-detectors] {
                                                                color: inherit !important;
                                                                text-decoration: none !important;
                                                                font-size: inherit !important;
                                                                font-family: inherit !important;
                                                                font-weight: inherit !important;
                                                                line-height: inherit !important;
                                                            }
                                                        }

                                                        /* Yahoo and apple mail reset on desktop */



                                                        @media screen and (min-width: 600px) {
                                                            .wrapto680px {
                                                                width: 670px !important;
                                                                height: auto !important;
                                                            }
                                                        }
                                                    </style>
                                                    <style type='text/css'>
                                                        @media screen and (max-device-width: 600px),
                                                        screen and (max-width: 600px) {
                                                            /* responsive rules */





                                                            .wrapto100pc,
                                                            .w100pc {
                                                                width: 100% !important;
                                                                height: auto !important;
                                                                min-width: 100% !important;
                                                            }

                                                            .nomob {
                                                                display: none !important;
                                                                width: 0px !important;
                                                                height: 0px !important;
                                                            }

                                                            .mobile-margin {
                                                                padding: 0px 20px 0px 20px
                                                            }

                                                            .show {
                                                                display: block !important;
                                                                width: 100% !important;
                                                                max-height: inherit !important;
                                                                overflow: visible !important;
                                                            }
                                                        }
                                                    </style>
                                                    <style type='text/css'>
                                                        /* more for you to enjoy css */





                                                        @media screen and (max-device-width: 600px),
                                                        screen and (max-width: 600px) {
                                                            .padding-top {
                                                                padding: 10px !important;
                                                            }

                                                            .display {
                                                                display: block !important;
                                                                padding-top: 30px;
                                                            }

                                                            .headerwidth {
                                                                width: 320px !important;
                                                            }

                                                            .colsplit {
                                                                width: 100% !important;
                                                                float: left !important;
                                                                display: block !important;
                                                            }

                                                            .nopad {
                                                                padding: 0 !important;
                                                            }

                                                            .colsplit-top {
                                                                width: 100% !important;
                                                                display: table-row-group !important;
                                                            }

                                                            .colsplit-bottom {
                                                                width: 100% !important;
                                                                display: table-footer-group !important;
                                                            }

                                                            .header-padding {
                                                                padding: 25px 5px 5px 5px !important
                                                            }

                                                            .colsplit-padding {
                                                                width: 100% !important;
                                                                float: left !important;
                                                                display: block !important;
                                                                padding-top: 10px !important;
                                                            }

                                                            .break {
                                                                display: block !important
                                                            }

                                                            .mobile-banner {
                                                                padding: 5px 0px 10px 0px !important;
                                                            }

                                                            .w100pcmax {
                                                                width: auto !important;
                                                                height: auto !important;
                                                                max-width: 100% !important;
                                                                display: block !important;
                                                            }
                                                        }
                                                    </style>
                                                    <style type='text/css'>
                                                        /*footer style */



                                                        @media screen and (max-device-width: 600px),
                                                        screen and (max-width: 600px) {
                                                            .textleft {
                                                                display: block !important;
                                                                text-align: left !important;
                                                                padding: 5px 0 !important;
                                                            }

                                                            .textcenter {
                                                                display: block !important;
                                                                text-align: center !important;
                                                                padding: 5px 0 !important;
                                                            }

                                                            .txtleft {
                                                                text-align: left !important;
                                                                padding: 10px 0 !important;
                                                            }

                                                            .bg-1e1e1e {
                                                                background-color: #1e1e1e !important;
                                                                background: #1e1e1e !important;
                                                            }

                                                            .menu-border {
                                                                border-bottom: 1px solid #424242 !important;
                                                                border-right: none !important;
                                                                padding: 15px 0 15px 0 !important
                                                            }

                                                            .mobile-margin {
                                                                padding: 0 20px 0 20px !important;
                                                            }

                                                            .button-length {
                                                                width: 280px !important;
                                                            }

                                                            .mobile-align {
                                                                text-align: center;
                                                            }

                                                            .pr0 {
                                                                padding-right: 0px !important;
                                                            }

                                                            .pl0 {
                                                                padding-left: 0px !important;
                                                            }
                                                        }
                                                    </style>

                                                    <!--[if gte mso 9]><xml> <o:OfficeDocumentSettings> <o:AllowPNG/> <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml><![endif]-->
                                                    <!-- Stand alone CTA -->
                                                    <table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' width='100%'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' style='padding: 0 30px;'>
                                                                    <table border='0' cellpadding='0' cellspacing='0' class='w100pc'
                                                                        style='width: 600px;' width='600'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center'>
                                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                                        width='100%'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td align='center'
                                                                                                    style='padding: 0px 0;'>
                                                                                                    <table align='left'
                                                                                                        bgcolor='#006def' border='0'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        role='presentation'
                                                                                                        style='background-color: #006def; border-radius: 25px; color: #ffffff; display: inline-block; font-family: sans-serif; font-size: 13px; font-weight: bold; line-height: 22px; text-align: center; text-decoration: none; text-size-adjust: none;'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td align='center'
                                                                                                                    height='50'
                                                                                                                    style='padding: 0px 30px;'
                                                                                                                    valign='middle'>
                                                                                                                    <table border='0'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        role='presentation'
                                                                                                                        width='100%'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td align='center'
                                                                                                                                    style='color: #000000; font-size: 18px; line-height: 24px; display: block; font-family: 'bbcreithsansabd', Arial, sans-serif;'
                                                                                                                                    valign='top'>
                                                                                                                                    <a data-linkto='https://'
                                                                                                                                        href='https://www.bbc.co.uk/'
                                                                                                                                        style='color:#ffffff;text-decoration:none;display: block;'
                                                                                                                                        target='_blank'
                                                                                                                                        title='Take part'>Sign
                                                                                                                                        in</a>
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
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table><!-- /Stand alone CTA -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align='center'>
                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='min-width: 100%; '
                                        class='stylingblock-content-wrapper'>
                                        <tbody>
                                            <tr>
                                                <td class='stylingblock-content-wrapper camarker-inner'>
                                                    <!-- Did you know -->
                                                    <table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0'
                                                        role='presentation' width='100%'>
                                                        <tbody>
                                                            <tr>
                                                                <!-- <td><img alt='' height='1'
                                                                        src='https://image.e.bbcmail.co.uk/lib/fe9013727761077872/m/18/sounds-welcome-sp.gif'
                                                                        width='30'></td> -->
                                                                <td align='center' style='padding-bottom: 20px;'>
                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                        class='wrapto100pc' style='width:600px;' width='600'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style='padding: 0px 0px 20px;'></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <p
                                                                                        style='font-family: bbcreithsansalt, Arial; font-size: 16px; color: #000001; line-height: 23px;padding: 0; margin:0;'>
                                                                                        You can also sign in by visiting
                                                                                        bbc.com/stay<br><br>Other BBC accounts you’ve
                                                                                        used recently will not be affected by this.</p>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <!-- <td><img alt='' height='1'
                                                                        src='https://image.e.bbcmail.co.uk/lib/fe9013727761077872/m/18/sounds-welcome-sp.gif'
                                                                        width='30'></td> -->
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='min-width: 100%; '
                                        class='stylingblock-content-wrapper'>
                                        <tbody>
                                            <tr>
                                                <td class='stylingblock-content-wrapper camarker-inner'>
                                                    <!-- Did you know -->
                                                    <table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0'
                                                        role='presentation' width='100%'>
                                                        <tbody>
                                                            <tr>
                                                                <!-- <td><img alt='' height='1'
                                                                        src='https://image.e.bbcmail.co.uk/lib/fe9013727761077872/m/18/sounds-welcome-sp.gif'
                                                                        width='30'></td> -->
                                                                <td align='center' style='padding-bottom: 20px;'>
                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                        class='wrapto100pc' style='width:600px;' width='600'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style='padding: 10px 0px 20px;'>
                                                                                    <h2
                                                                                        style='font-family: 'bbcreithsansabd', Arial; font-size: 28px; color: #000001; line-height: 41px;padding: 0; margin: 0;'>
                                                                                        Should I keep my account?</h2>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <p
                                                                                        style='font-family: bbcreithsansalt, Arial; font-size: 16px; color: #000001; line-height: 23px;padding: 0; margin:0;'>
                                                                                        You'll need a BBC account to follow your
                                                                                        favourite sports and teams, and listen to music
                                                                                        and podcasts on BBC Sounds. It also means you
                                                                                        can have your say on the news stories of the
                                                                                        day.<br><br>Find out more about <a
                                                                                            href='https://www.bbc.co.uk/'
                                                                                            style='color:#006def; text-decoration: underline;'
                                                                                            target='_blank' title='Privacy Notice'>what
                                                                                            you can do with your BBC
                                                                                            account.</a><br><br>All the
                                                                                        best,<br><br><strong>The BBC</strong></p>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <!-- <td><img alt='' height='1'
                                                                        src='https://image.e.bbcmail.co.uk/lib/fe9013727761077872/m/18/sounds-welcome-sp.gif'
                                                                        width='30'></td> -->
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
                    </table><!-- Footer -->
                    <table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' role='presentation'
                        style='border-top:1px solid #e6e6e6; min-width: 100%;' width='100%'>
                        <tbody>
                            <tr>
                                <td align='center' bgcolor='#ffffff' width='100%'>
                                    <table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' class='w100pc'
                                        role='presentation' width='650' style='width: 650px;min-width: 650px;'>
                                        <tbody>
                                            <tr>
                                                <td width='25'>&nbsp;</td>
                                                <td valign='top'>
                                                    <table border='0' cellpadding='0' cellspacing='0' role='presentation' width='100%'
                                                        style='min-width:100%;'>
                                                        <tbody>

                                                            <tr>
                                                                <td align='center'>
                                                                    <table cellpadding='0' cellspacing='0' width='100%'
                                                                        role='presentation' style='min-width: 100%; '
                                                                        class='stylingblock-content-wrapper'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class='stylingblock-content-wrapper camarker-inner'>
                                                                                    <!-- footer ts and cs -->
                                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                                        role='presentation'
                                                                                        style='border-top:1px solid #e6e6e6; min-width: 100%;'
                                                                                        width='100%'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td align='center' bgcolor='#ffffff'
                                                                                                    class='nopad'
                                                                                                    style='padding: 0 30px;'>
                                                                                                    <p
                                                                                                        style='color:#000001; font-size:13px; font-family: Helvetica, Arial, sans-serif; line-height:22px;padding: 0; margin:0;'>
                                                                                                        BBC
                                                                                                        Broadcasting House, Portland
                                                                                                        Place, London W1A 1AA,
                                                                                                        UK<br>Copyright © {year} BBC</p>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td height='20'
                                                                                                    style='font-size:1px; line-height:1px;'
                                                                                                    width='100%'></td>
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
                                                </td>
                                                <td width='25'>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align='center' bgcolor='#ffffff' height='20' width='100%'>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    </div></body>
                    

                </html>"
                ];
                 $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
