<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BbcRealTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'en', // en or ar
                'title' => 'Welcome to your BBC account - lets get you started',
                'description' => 'Just a quick note to say a big welcome and an even bigger thank you for registering with the BBC.',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => null, // Random between 1 to 10
                'is_phishing'=> 0, // 0 = false / 1 = true
                'reason'=>'real sender Email',
                'short_reason'=>'real sender Email',
                'sender' => 'security@bbc.co.uk>',
                'template'=> "<!DOCTYPE html>
                <html>

                <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta name='apple-mobile-web-app-capable' content='yes'>
                    <meta content='yes' name='apple-touch-fullscreen'>
                    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
                    <meta name='format-detection' content='telephone=no'>
                    <meta name='format-detection' content='date=no'>
                    <meta name='format-detection' content='address=no'>
                    <meta name='format-detection' content='email=no'>
                    <!--[if !mso]><!-->
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <!--<![endif]-->
                    <title>BBC account</title>
                    <style type='text/css'>
                        .gmailfix {
                            display: none;
                            display: none !important;
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
                            background-color: #ffffff;
                        }

                        table td {
                            border-collapse: collapse;
                        }

                        .ExternalClass {
                            width: 100%;
                        }

                        .ExternalClass * {
                            line-height: 110%
                        }

                        * a {
                            color: inherit;

                        }

                        .appleLinksPink a {
                            color: #d64d88 !important;
                            text-decoration: none !important
                        }

                        /*hover over blue links turn them white*/
                        a:hover.udl {
                            color: #ffffff !important;
                            text-decoration: none !important;
                        }

                        @media only screen and (max-width: 800px) {
                            *[class=holder] {
                                width: 100% !important;
                            }

                            *[class=wrapto100pc-clearbg] {
                                width: 100% !important;
                            }
                        }

                        @media only screen and (max-width: 500px) {
                            *[class=nomob] {
                                display: none !important;
                            }

                            *[class=wrapto100pc] {
                                width: 100% !important;
                                height: auto !important;
                                min-width: 1px !important;
                            }

                            *[class=mobile-align] {
                                padding: 20px 10px 0 0 !important;
                                vertical-align: text-top !important;
                                width: 100% !important;
                                height: auto !important;
                                font-size: 30px !important;
                                line-height: 35px !important;
                            }

                            *[class=padding-20] {
                                padding: 0 20px 0 20px 0 !important;
                            }

                            *[class=bgf5f5f5] {
                                background-color: #f5f5f5 !important;
                            }

                            *[class=footer-button] {
                                display: block !important;
                                padding: 7px 1px;
                                margin-top: 15px !important;
                                font-size: 15px;
                                text-align: left !important;
                            }
                        }

                        @media only screen {
                            a[x-apple-data-detectors] {
                                color: inherit !important;
                                text-decoration: none !important;
                                font-size: inherit !important;
                                font-family: inherit !important;
                                font-weight: inherit !important;
                                line-height: inherit !important;
                            }
                        }

                        @media only screen and (max-width: 444px) {
                            *[class=mobile-align] {
                                padding: 14px 10px 0 0 !important;
                                vertical-align: text-top !important;
                                width: 100% !important;
                                height: auto !important;
                                font-size: 25px !important;
                                line-height: 26px !important;
                            }
                        }
                    </style>
                    <!--[if gte mso 9]>
                    <xml>
                    <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>
                    96</o:PixelsPerInch>
                    </o:OfficeDocumentSettings>
                    </xml>
                    <![endif]-->
                </head>

                <body
                    style='background-color:#e3e2d8; margin: 0px; padding:0px; -webkit-text-size-adjust:none; -ms-text-size-adjust: none; min-width:100%; font-family: Helvetica, ArialMT;'>
                    <style type='text/css'>
                        div.preheader {
                            display: none !important;
                        }
                    </style>
                    <div style='max-width: 100%;'>
                    <div class='preheader' style='font-size: 1px; display: none !important;'>Your account is key to getting much more
                        from the BBC</div>
                    <div style='background-color: #e3e2d8;'>
                        <!--[if gte mso 9]>
                    <body background-color:#e3e2d8; link='#FFFFFF' vlink='#FFFFFF' alink='#FFFFFF' >
                    <![endif]-->
                        <div class='gmailfix'
                            style='white-space:nowrap; font:15px courier; color:#ffffff; line-height:0; width:620px !important; min-width:620px !important; max-width:620px !important;'>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </div><!-- header -->
                        <table width='100%' border='0' cellspacing='0' cellpadding='0' style='min-width:600px;' class='wrapto100pc'>
                            <tbody>
                                <tr>
                                    <td align='left' valign='top'>
                                        <table cellpadding='0' cellspacing='0' border='0' bordercolor='' width='100%' bgcolor=''>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table width='100%' bgcolor='' border='0' bordercolor='' cellpadding='0'
                                                            cellspacing='0'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family: ArialMT; font-size:13px'>
                                                                        <table width='100%' cellspacing='0' cellpadding='0' border='0'
                                                                            class='dashedBorder'>

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
                                    <td align='left' valign='top'>
                                        <table cellpadding='0' cellspacing='0' border='0' bordercolor='' width='100%' bgcolor=''>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table width='100%' bgcolor='' border='0' bordercolor='' cellpadding='0'
                                                            cellspacing='0'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family:ArialMT; font-size:13px'>
                                                                        <style type='text/css'>
                                                                            @media only screen and (max-width: 600px) {
                                                                                *[class=padding0] {
                                                                                    padding-left: 0px !important;
                                                                                }
                                                                            }
                                                                        </style>
                                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                                                            bgcolor='#006def'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width='100%' align='center' bgcolor='#006def'>
                                                                                        <table width='650' border='0' cellspacing='0'
                                                                                            cellpadding='0' class='wrapto100pc'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td width='20'>&nbsp;</td>
                                                                                                    <td valign='top'>
                                                                                                        <table width='100%' border='0'
                                                                                                            cellspacing='0'
                                                                                                            cellpadding='0'>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <table
                                                                                                                            width='370'
                                                                                                                            border='0'
                                                                                                                            cellspacing='0'
                                                                                                                            cellpadding='0'
                                                                                                                            class='wrapto100pc'
                                                                                                                            align='left'>
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td>
                                                                                                                                        <table
                                                                                                                                            width='100%'
                                                                                                                                            border='0'
                                                                                                                                            class='wrapto100pc'
                                                                                                                                            cellspacing='0'
                                                                                                                                            cellpadding='0'>
                                                                                                                                            <tbody>
                                                                                                                                                <tr>
                                                                                                                                                    <td width='100%'
                                                                                                                                                        height='10'
                                                                                                                                                        style='font-size: 1px; line-height: 1px;'>
                                                                                                                                                        &nbsp;
                                                                                                                                                    </td>
                                                                                                                                                </tr>
                                                                                                                                                <tr>
                                                                                                                                                    <td width='100%'
                                                                                                                                                        align='left'
                                                                                                                                                        style='padding-left: 10px;'
                                                                                                                                                        class='padding0'>
                                                                                                                                                        <a href='https://www.bbc.co.uk/'
                                                                                                                                                            target='_blank'
                                                                                                                                                            title=''><img
                                                                                                                                                                style='display: block; width: 84px; height: 24px; border-color: #000000; margin: 0px;'
                                                                                                                                                                border='0'
                                                                                                                                                                src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANwAAAA+CAYAAABA1nUIAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTVDMzRDRUZGNThBMTFFNUEwRDVDNzRBQjk5MTIyRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTVDMzRDRjBGNThBMTFFNUEwRDVDNzRBQjk5MTIyRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBNUMzNENFREY1OEExMUU1QTBENUM3NEFCOTkxMjJFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBNUMzNENFRUY1OEExMUU1QTBENUM3NEFCOTkxMjJFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Puon284AAAjNSURBVHja7F0JjBRFFP24iAjosrhEBMGIsOABKofEA11RUFyvaFCCR1DBeGCIQhAUFVDEGARE8VZIiKhRFBQENRyiAh4cYlTWC1CRXYRdlksUEP+j/4KzylT1TPdsV89/ycsmOzU9XdX1qqt+/f+rRllZ2R5SAI8wh+Tl5R2wQHl5Of4UMWdoc+3FxcyZFm32FPNWbS6ig7QJFAoVnEKhglMoFCo4hUIFp1AoVHAKhQpOocgW1AzoOl8xV6b43TpMbOTUZzZn1s6Stn+fWZHid3OlzfKZx+jA+b8oZS5ifs0sZq5llldpc/S1I5hNmccyT2SeyiwIq02DEtwU8jaOg7gfVPosZg9m5xh3poEyUKWLetJJLpA2K8hSgcGBYyHzDRnMvknjWrnS984jz9GhZVynlLuYXzInMAuZrZkvMv/WAfuA2Mr8iDmU2UqE90kW1X8zcwyzhQzU49IUG8lbEN5Ed8oAhpfAsDRmcc6s4b5n9mF2CqKyWTRVxeh8k4gxrviDOVKm1AOYP4X4WxDwcObxzI7yQtgaR8FV4gvmaTKSK+ymVy/JiP97DOs3m3mSvNU3VUNf7Mf8MM6CA7YwL2SuUD1ZA9PzbvI2iAN2MvszLwr5jRYaXDNIbGdeJX8VdljOvCsG9SiXwWO8vMGdRM0M/Q6MH20O8NlG5mrmKsuGLJZF8tCYC+Vc8sz+VQED0m/MH3xMF59l9mW2c7QtUE9YDP1adXOkzh3E8NGMWZc8K+QOWYetZ64RG8FS+bvHdcFdzhxlKFPCfEUWwhsNZZ9kDmLWirHgRsgaLBkwvX6G+Rxzt2FNN5Y52cF2gMWwq0+xwcjWR/pdvs/f28Ccw5xGnqUyUMNTlKaUjcgzw2Ld0cJQtjTVRWvM0Ja84M4ZFoMPOtCfjtUPA8U10idsAMPaPOZiEVx+Cr+J71wtg/868oxP7eIouEo0Yb5sUW6h6m0fYEwabCizldwzOD3KnGlRDh4jT5DnWVIY4O/DqeAG5hLmfFlDxtJogpHqBEOZVaqzBPS2KLPaofpgLfWARbmjZPDtF3J/Pof5HnlbU2dGfQ2XCrDITeYxoN4niYAvIPxSk1lwdztUn4EWU2D43s4lb/M7U8C6+mNKcaslytsCOYbPD1eN+W6zXEfqscBiKom6zMqw2P6NQ+MmONOUsbnqKwGw7G6JSZuNsSiD/TjnHLWjKri1slBNhtNVYwmYbvgc1reWDtTjV+Y7hjIwEl3v4kOKouBgCsb2wK4kZbCB2Uk1tg/YGB5uKHMlueFZ9KbF+nykqw8qag8Apusbma8byg0hDbqsBCIqsDH8c5Iyh5A77l1vGT5HJISrHjORsFIinmmZLJIR+1ZmKH8+eW5K2QxMuT9jvsacapgNVL4RXFjv7JZ6JUNPlx9cpgQ3iflBlf9tl4X+eh/XgUkWEb05WSAqeErUq/I/uDmVkD93I2yID3CkzivJ7JjeTQVnRokwVdQgb2MTngfZkvOkOM3vw2wO74vrHKrzCos6HaeCC3+dOUxG6oN1yWYFJBiCe1x3x+57neHzpjL4OgsXDA+wWN3PPFr+blI9GYHYMQRpIip6MrnjlWMKN8p3/cG4ZOnDWu9BmVIgPEeP2TIDKeKwX4WoggUO3K/J9SxHBZd5wIp5B/My5jbVlLXwENA6KuL3aRLUFhVc9QHeCNh/0nQL9lPze4RRhWnKuMb1h5Apo0lv8qyMyYCQd+wvwTqHvIrzyewtjvinvmQXP+caXmCeYiiDPczV8gZD4OVSi+uOkrVdrwjW2eTricBjWLsbqeCSAw3U3ud3sEeHtABwZE0WCjFFOk9RzATXKoU2g/DuI7O3Bqbk8EdsELE6t7Eog3i0HjqlDB7I+f4Q81NmQ0PZ4aQAEEMIX8TnKbn5HOvg8RG8f6TWaGIoM1XXcOGPehMNZT6nYPL0xwXwUjEdYj+JomnpNe0d4u29TgUXLopk3ZEMs1VnCRhkYYD4NoL3bVpb/kXBHByjgjOgs+Hz5aqxBCASupmDbVZIZkfrp8lzeFfBhYg6hs/Xq8b+g7oOthnWnqYMZDvlTVihggsPxaofX0CnNOXfj6q3zrVk3iJAZAGcH6pjHxbT2ulxFhx8A+cZyhypGksAksOa9jGjup8FJ/WxFuWQDBhGlg0ZvDcYbWANHh1nwSGey+TG1V41tg8VFtMyIMqR05eS3eb8AqnHnBDvBTMB5KQ8g3kFeec6xHJKiekCDhacaFG2SHW2F0i5gIMvvjOUw55Xq4jXBWncbRIf/UKem19PCvbgTkSmPE7eQYxwFFiU7gWjGg+HBLDTpMHXWpQvpOw927pyTQEHgVfJ21+zWdfc7EC9cmVqjAxtptQbeAsh5QTy4eDYZZxJgBClPJ+/iT2+d5lvk5elINCz9TIlOIjnR4tOUyIjdJmPa8OqNSKGIkLsn8mZd5uM7mizHT6u3ZjMG+NRQYEIAKkVNluUh5P2LCH698nkHROM6yCAtb4QAt0o6z/sScJxYjGF7CCdKcGtpPDO6L6dzHt0LmJeSNfFAAXXr3oOtQVSIs6VZUOpj+8hudISMuc4zRhcTzXXhfmYLtt84WGZarkGGMXgwtfB5cZ3WXBFMs+upRqyftZwiRrscB0wJUTo1r1U/fltameL4DD/Hidiq6s6sgKO/oLZ/O4Y1AUDLKJIllP1WKZh3Z0g/S+ya7gggIU+sjL3pxgkk8ngNOw28vKa1IxZ3TCIwIKJxLGImURY0s4Q32aXkLdF1TWdF1WUHwJ8JxGaczZ52Za7xLDTBA3EDbaTtsK+UdssqDMO78R2CDJ+IVYOLlc4vy3ds7lx3h4OYewuPCyImw2qA/eiYLwW6ovQmskbLc4ZluEaVBHA80NHaCDrm4aUvUDdbxHCOrlMCB9ceIbAUbuM9qeFx1sLZ7zBWpsr7YeMcK3J20poHMZNBiW4NmQXHq/Yj27aBKEB/bqjMFLQE2gUChWcQqGCUygUKjiFQgWnUChUcAqFCk6hyBr8I8AAn76biYqXGo4AAAAASUVORK5CYII=' width='84'
                                                                                                                                                                height='24'
                                                                                                                                                                alt='BBC Logo'
                                                                                                                                                                title='BBC Logo'
                                                                                                                                                                mdid='c8373c2e-f96a-4383-84e2-08d5f95f4c9f'></a>
                                                                                                                                                    </td>
                                                                                                                                                </tr>
                                                                                                                                                <tr>
                                                                                                                                                    <td>
                                                                                                                                                        <table
                                                                                                                                                            width='370'
                                                                                                                                                            border='0'
                                                                                                                                                            cellspacing='0'
                                                                                                                                                            cellpadding='0'
                                                                                                                                                            align='left'
                                                                                                                                                            class='wrapto100pc'>
                                                                                                                                                            <tbody>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td height='168'
                                                                                                                                                                        valign='middle'
                                                                                                                                                                        align='left'
                                                                                                                                                                        style='font-family: Helvetica, ArialMT, sans-serif; color: #ffffff; font-size: 44px; line-height: 48px; vertical-align: middle; letter-spacing: -1px; padding: 0px 10px;'
                                                                                                                                                                        class='mobile-align'>
                                                                                                                                                                        <strong>Welcome
                                                                                                                                                                            to
                                                                                                                                                                            your
                                                                                                                                                                            BBC
                                                                                                                                                                            account</strong>
                                                                                                                                                                    </td>
                                                                                                                                                                </tr>
                                                                                                                                                            </tbody>
                                                                                                                                                        </table>
                                                                                                                                                    </td>
                                                                                                                                                </tr>
                                                                                                                                                <tr>
                                                                                                                                                    <td>&nbsp;
                                                                                                                                                    </td>
                                                                                                                                                </tr>
                                                                                                                                            </tbody>
                                                                                                                                        </table>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                    <td valign='bottom'>
                                                                                                                        <table
                                                                                                                            class='wrapto100pc'
                                                                                                                            width='226'
                                                                                                                            border='0'
                                                                                                                            cellspacing='0'
                                                                                                                            cellpadding='0'
                                                                                                                            align='left'>
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td width='20' class='nomob'>&nbsp;
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
                        </table><!-- /header -->
                        <!-- body -->
                        <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#f5f5f5'>
                            <tbody>
                                <tr>
                                    <td width='100%' align='center' bgcolor='#f5f5f5' height='20'>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width='100%' align='center' bgcolor='#f5f5f5' style='padding:0 20px 0 20px'>
                                        <table width='600' border='0' cellspacing='0' cellpadding='0' class='wrapto100pc'
                                            bgcolor='#ffffff'>
                                            <tbody>
                                                <tr>
                                                    <td width='25'>&nbsp;</td>
                                                    <td valign='top'>
                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='100%' height='25'
                                                                        style='font-size:1px; line-height:1px;'></td>
                                                                </tr>
                                                            </tbody>
                                                        </table><!-- /Template Level - CONTAINER WRAPPER OPEN -->
                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                            <tbody>
                                                                <tr>
                                                                    <td align='left' valign='top'>
                                                                        <table cellpadding='0' cellspacing='0' border='0' bordercolor=''
                                                                            width='100%' bgcolor=''>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width='100%' bgcolor='' border='0'
                                                                                            bordercolor='' cellpadding='0'
                                                                                            cellspacing='0'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td
                                                                                                        style='font-family:ArialMT; font-size:13px'>
                                                                                                        <table width='100%' border='0'
                                                                                                            cellspacing='0'
                                                                                                            cellpadding='0'>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td align='left'
                                                                                                                        valign='top'
                                                                                                                        bgcolor='#ffffff'
                                                                                                                        style='font-family: Helvetica, ArialMT, sans-serif; color: #000001; font-size: 14px; line-height: 22px;'>
                                                                                                                        Hello,</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td width='100%'
                                                                                                                        height='20'
                                                                                                                        style='font-size: 1px; line-height: 1px;'>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td bgcolor='#ffffff'
                                                                                                                        valign='top'
                                                                                                                        style='font-family: Helvetica, ArialMT, sans-serif; color: #000001; font-size: 14px; line-height: 22px;'>
                                                                                                                        Just a quick
                                                                                                                        note to say a
                                                                                                                        big welcome and
                                                                                                                        an even bigger
                                                                                                                        thank you for
                                                                                                                        registering with
                                                                                                                        the
                                                                                                                        BBC.&nbsp;<br><br>A
                                                                                                                        couple of things
                                                                                                                        you should
                                                                                                                        know... <br><br>
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
                                                                    <td align='left' valign='top'>
                                                                        <table cellpadding='0' cellspacing='0' border='0' bordercolor=''
                                                                            width='100%' bgcolor=''>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width='100%' bgcolor='' border='0'
                                                                                            bordercolor='' cellpadding='0'
                                                                                            cellspacing='0'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td
                                                                                                        style='font-family:ArialMT; font-size:13px'>
                                                                                                        <table width='100%' border='0'
                                                                                                            cellspacing='0'
                                                                                                            cellpadding='0'>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td bgcolor='#ffffff'
                                                                                                                        valign='top'
                                                                                                                        style='color: #000001; font-size: 14px; line-height: 22px; font-family: Helvetica, ArialMT, sans-serif;'>
                                                                                                                        <!-- ordered bullet point -->
                                                                                                                        <table
                                                                                                                            width='100%'
                                                                                                                            border='0'
                                                                                                                            cellspacing='0'
                                                                                                                            cellpadding='0'>
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td width='20'
                                                                                                                                        align='left'
                                                                                                                                        valign='top'
                                                                                                                                        style='color: #000001; font-size: 14px; line-height: 22px; font-family: Helvetica, ArialMT, sans-serif; padding-right: 3px; padding-top: 1px;'>
                                                                                                                                        1.
                                                                                                                                    </td>
                                                                                                                                    <td align='left'
                                                                                                                                        valign='top'
                                                                                                                                        style='color: #000001; font-size: 14px; line-height: 22px; font-family: Helvetica, ArialMT, sans-serif;'>
                                                                                                                                        We'll
                                                                                                                                        always
                                                                                                                                        keep
                                                                                                                                        your
                                                                                                                                        data
                                                                                                                                        safe
                                                                                                                                        and
                                                                                                                                        secure.
                                                                                                                                        And
                                                                                                                                        we'll
                                                                                                                                        only
                                                                                                                                        email
                                                                                                                                        again
                                                                                                                                        if
                                                                                                                                        we
                                                                                                                                        need
                                                                                                                                        to
                                                                                                                                        tell
                                                                                                                                        you
                                                                                                                                        about
                                                                                                                                        changes
                                                                                                                                        to
                                                                                                                                        your
                                                                                                                                        account.<br><br>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                        <!-- / ordered bullet point -->
                                                                                                                        <!-- ordered bullet point -->
                                                                                                                        <table
                                                                                                                            width='100%'
                                                                                                                            border='0'
                                                                                                                            cellspacing='0'
                                                                                                                            cellpadding='0'>
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td width='20'
                                                                                                                                        align='left'
                                                                                                                                        valign='top'
                                                                                                                                        style='color: #000001; font-size: 14px; line-height: 22px; font-family: Helvetica, ArialMT, sans-serif; padding-right: 3px; padding-top: 1px;'>
                                                                                                                                        2.
                                                                                                                                    </td>
                                                                                                                                    <td align='left'
                                                                                                                                        valign='top'
                                                                                                                                        style='color: #000001; font-size: 14px; line-height: 22px; font-family: Helvetica, ArialMT, sans-serif;'>
                                                                                                                                        You
                                                                                                                                        can
                                                                                                                                        manage
                                                                                                                                        your
                                                                                                                                        details
                                                                                                                                        and
                                                                                                                                        preferences
                                                                                                                                        in
                                                                                                                                        your
                                                                                                                                        <b><u><a href='https://www.bbc.co.uk/'
                                                                                                                                                    title=''>
                                                                                                                                                    <font
                                                                                                                                                        color='#000000'>
                                                                                                                                                        account
                                                                                                                                                        settings
                                                                                                                                                    </font>
                                                                                                                                                </a></u></b>.<br><br>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                        <!-- / ordered bullet point -->
                                                                                                                        <!-- ordered bullet point -->
                                                                                                                        <table
                                                                                                                            width='100%'
                                                                                                                            border='0'
                                                                                                                            cellspacing='0'
                                                                                                                            cellpadding='0'>
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td width='20'
                                                                                                                                        align='left'
                                                                                                                                        valign='top'
                                                                                                                                        style='color: #000001; font-size: 14px; line-height: 22px; font-family: Helvetica, ArialMT, sans-serif; padding-right: 3px; padding-top: 1px;'>
                                                                                                                                        3.
                                                                                                                                    </td>
                                                                                                                                    <td align='left'
                                                                                                                                        valign='top'
                                                                                                                                        style='color: #000001; font-size: 14px; line-height: 22px; font-family: Helvetica, ArialMT, sans-serif;'>
                                                                                                                                        Your
                                                                                                                                        account
                                                                                                                                        is
                                                                                                                                        the
                                                                                                                                        key
                                                                                                                                        to
                                                                                                                                        getting
                                                                                                                                        much
                                                                                                                                        more
                                                                                                                                        out
                                                                                                                                        of
                                                                                                                                        the
                                                                                                                                        BBC.
                                                                                                                                        For
                                                                                                                                        instance,
                                                                                                                                        you
                                                                                                                                        can
                                                                                                                                        now:<br><br>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                        <!-- / ordered bullet point -->
                                                                                                                        <!-- bullet point -->
                                                                                                                        <table
                                                                                                                            width='100%'
                                                                                                                            border='0'
                                                                                                                            cellspacing='0'
                                                                                                                            cellpadding='0'>
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td align='left'
                                                                                                                                        valign='top'
                                                                                                                                        style='color: #000001; font-size: 14px; line-height: 22px; font-family: Helvetica, ArialMT, sans-serif;'>
                                                                                                                                        <ul>
                                                                                                                                            <li>Personalise
                                                                                                                                                the
                                                                                                                                                topics
                                                                                                                                                of
                                                                                                                                                the
                                                                                                                                                News
                                                                                                                                                and
                                                                                                                                                Sports
                                                                                                                                                apps
                                                                                                                                            </li>
                                                                                                                                            <li>Follow
                                                                                                                                                your
                                                                                                                                                favourite
                                                                                                                                                sports
                                                                                                                                                and
                                                                                                                                                teams
                                                                                                                                            </li>
                                                                                                                                            <li>Get
                                                                                                                                                notifications
                                                                                                                                                about
                                                                                                                                                stuff
                                                                                                                                                you
                                                                                                                                                care
                                                                                                                                                about.
                                                                                                                                            </li>
                                                                                                                                        </ul>
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
                                                                    <td align='left' valign='top'></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align='left' valign='top'>
                                                                        <table cellpadding='0' cellspacing='0' border='0' bordercolor=''
                                                                            width='100%' bgcolor=''>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width='100%' bgcolor='' border='0'
                                                                                            bordercolor='' cellpadding='0'
                                                                                            cellspacing='0'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td
                                                                                                        style='font-family:ArialMT; font-size:13px'>
                                                                                                        <table width='100%' border='0'
                                                                                                            cellspacing='0'
                                                                                                            cellpadding='0'>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td bgcolor='#ffffff'
                                                                                                                        valign='top'
                                                                                                                        style='color: #000001; font-size: 14px; font-family: Helvetica, ArialMT, sans-serif; line-height: 22px;'>
                                                                                                                        And that's just
                                                                                                                        for starters...
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td width='100%'
                                                                                                                        height='20'
                                                                                                                        style='font-size: 1px; line-height: 1px;'>
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
                                                                    <td align='left' valign='top'>
                                                                        <table cellpadding='0' cellspacing='0' border='0' bordercolor=''
                                                                            width='100%' bgcolor=''>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width='100%' bgcolor='' border='0'
                                                                                            bordercolor='' cellpadding='0'
                                                                                            cellspacing='0'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td
                                                                                                        style='font-family:ArialMT; font-size:13px'>
                                                                                                        <table width='100%' border='0'
                                                                                                            cellspacing='0'
                                                                                                            cellpadding='0'>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td valign='top'
                                                                                                                        align='left'>
                                                                                                                        <table
                                                                                                                            border='0'
                                                                                                                            cellspacing='0'
                                                                                                                            cellpadding='0'
                                                                                                                            bgcolor='#006def'
                                                                                                                            class='wrapto100pc'>
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td align='center'
                                                                                                                                        valign='middle'
                                                                                                                                        bgcolor='#006def'
                                                                                                                                        style='color: #ffffff; padding: 16px; white-space: nowrap; vertical-align: middle; font-size: 14px; font-family: Helvetica, ArialMT, sans-serif;'>
                                                                                                                                        <strong><a
                                                                                                                                                style='display: block; color: #ffffff; text-align: center; text-decoration: none;'
                                                                                                                                                href='https://www.bbc.co.uk/'
                                                                                                                                                title=''>See
                                                                                                                                                what
                                                                                                                                                else
                                                                                                                                                you
                                                                                                                                                can
                                                                                                                                                do</a></strong>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td width='100%'
                                                                                                                        height='20'
                                                                                                                        style='font-size: 1px; line-height: 1px;'>
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
                                                                    <td align='left' valign='top'>
                                                                        <table cellpadding='0' cellspacing='0' border='0' bordercolor=''
                                                                            width='100%' bgcolor=''>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width='100%' bgcolor='' border='0'
                                                                                            bordercolor='' cellpadding='0'
                                                                                            cellspacing='0'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td
                                                                                                        style='font-family:ArialMT; font-size:13px'>
                                                                                                        <table width='100%' border='0'
                                                                                                            cellspacing='0'
                                                                                                            cellpadding='0'>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td bgcolor='#ffffff'
                                                                                                                        valign='top'
                                                                                                                        style='color: #000001; font-size: 14px; font-family: Helvetica, ArialMT, sans-serif; line-height: 22px;'>
                                                                                                                        All the
                                                                                                                        best,<br><br>The
                                                                                                                        BBC </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td width='100%'
                                                                                                                        height='20'
                                                                                                                        style='font-size: 1px; line-height: 1px;'>
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
                                                        </table><!-- Template Level - CONTAINER WRAPPER CLOSE -->
                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                            <tbody>
                                                                <tr>
                                                                    <td width='100%' height='25'
                                                                        style='font-size:1px; line-height:1px;'></td>
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
                                    <td width='100%' align='center' bgcolor='#f5f5f5' height='20'></td>
                                </tr>
                            </tbody>
                        </table><!-- /body-->
                        <!-- footer slot -->
                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                            <tbody>
                                <tr>
                                    <td align='left' valign='top'>
                                        <table cellpadding='0' cellspacing='0' border='0' bordercolor='' width='100%' bgcolor=''>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table width='100%' bgcolor='' border='0' bordercolor='' cellpadding='0'
                                                            cellspacing='0'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family:ArialMT; font-size:13px'>
                                                                        <style type='text/css'>
                                                                            @media only screen and (max-width: 600px) {
                                                                                *[class=bgf5f5f5] {
                                                                                    background-color: #f5f5f5 !important;
                                                                                }
                                                                            }
                                                                        </style>
                                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                                                            bgcolor='#ffffff' class='bgf5f5f5'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width='100%' align='center' bgcolor='#ffffff'
                                                                                        style='padding: 0px 20px;' class='bgf5f5f5'>
                                                                                        <table width='650' border='0' cellspacing='0'
                                                                                            cellpadding='0' class='wrapto100pc'
                                                                                            bgcolor='#ffffff'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td width='20'>&nbsp;</td>
                                                                                                    <td style='border-bottom: 1px solid #e6e6e6;'
                                                                                                        bgcolor='#ffffff'>
                                                                                                        <table width='600' border='0'
                                                                                                            cellspacing='0'
                                                                                                            cellpadding='0'
                                                                                                            class='wrapto100pc'>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td width='100%'>
                                                                                                                        <table
                                                                                                                            width='100%'
                                                                                                                            cellspacing='0'
                                                                                                                            cellpadding='0'
                                                                                                                            border='0'>
                                                                                                                            <tbody>
                                                                                                                                <tr>
                                                                                                                                    <td width='100%'
                                                                                                                                        height='15'>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td width='100%'
                                                                                                                                        valign='middle'>

                                                                                                                                        <!--[if (gte mso 9)|(IE)]></td>
                                                                    <td><![endif]-->

                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td width='100%'
                                                                                                                                        height='15'>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td width='20'>&nbsp;</td>
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
                                    <td align='left' valign='top'>
                                        <table cellpadding='0' cellspacing='0' border='0' bordercolor='' width='100%' bgcolor=''>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table width='100%' bgcolor='' border='0' bordercolor='' cellpadding='0'
                                                            cellspacing='0'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='font-family:ArialMT; font-size:13px'>
                                                                        <style type='text/css'>
                                                                            @media only screen and (max-width: 600px) {
                                                                                *[class=bgf5f5f5] {
                                                                                    background-color: #f5f5f5 !important;
                                                                                }
                                                                            }
                                                                        </style>
                                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'
                                                                            bgcolor='#ffffff' class='bgf5f5f5'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width='100%' align='center' bgcolor='#ffffff'
                                                                                        class='bgf5f5f5' style='padding: 0px 20px;'>
                                                                                        <table width='650' border='0' cellspacing='0'
                                                                                            cellpadding='0' class='wrapto100pc'
                                                                                            bgcolor='#ffffff'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td width='20'>&nbsp;</td>
                                                                                                    <td valign='top' bgcolor='#ffffff'>
                                                                                                        <table width='100%' border='0'
                                                                                                            cellspacing='0'
                                                                                                            cellpadding='0'>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td bgcolor='#ffffff'
                                                                                                                        valign='top'
                                                                                                                        align='center'
                                                                                                                        style='color: #000001; font-size: 13px; line-height: 22px; font-family: Helvetica, ArialMT, sans-serif; padding-top: 16px;'>
                                                                                                        <a
                                                                                                                                style='color: #000001;'
                                                                                                                                http:='http://www.bbc.co.uk/usingthebbc/account/'
                                                                                                                                href='https://www.bbc.co.uk/'
                                                                                                                                title=''></a>.<br><br>BBC
                                                                                                                        Broadcasting
                                                                                                                        House, Portland
                                                                                                                        Place, London,
                                                                                                                        W1A 1AA,
                                                                                                                        UK<br>Copyright
                                                                                                                        BBC © {year}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td width='100%'
                                                                                                                        height='20'
                                                                                                                        style='font-size: 1px; line-height: 1px;'>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td width='20'>&nbsp;</td>
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
                                    <td align='left' valign='top'></td>
                                </tr>
                            </tbody>
                        </table>
                        <!--This email was sent by: British Broadcasting Corporation, BBC Broadcasting House, Portland Place, LONDON, W1A 1AA, GB http://click.ma.mailenvelope.bbc.co.uk/profile_center.aspx?qs=796232f36ace1c5687ad85ee4cee113e93084ea589b7f3768d3cefa307d54ab568d6e761c23974d2-->
                    </div>
                    </div>
                </body>

                </html>"
                ];


                $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
