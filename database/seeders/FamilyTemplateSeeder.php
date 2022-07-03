<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FamilyTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'ar',
                'title' => 'يمكن لطفلك الآن تسجيل الدخول إلى تطبيقات تابعة لجهة خارجية باستخدام حسابه على Google.',
                'description' => 'يُرجى تخصيص دقيقة من وقتك لمراجعة ميزة جديدة لحساب طفلك على Google ',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => 10, // Random between 1 to 10
                'is_phishing'=> 1, // 0 = false / 1 = true
                'reason'=>'Fake sender Email',
                'short_reason'=>'Fake sender Email',
                'sender' => 'security@google_.net>',
                'template'=> "<!doctype html
                public '- / /w3c / /dtd xhtml 1.0 transitional / /en' 'http: / /www.w3.org /tr /xhtml1 /dtd /xhtml1-transitional.dtd'>
            <html lang='ar'>

            <head>
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <title>Family Link OAuth 2.0</title>
                <style>
                    @media only screen and (device-width: 393px) and (orientation: portrait) {
                        img {
                            border: 0 !important;
                        }

                        div>u+.body section img {
                            border: 0 !important;
                        }
                    }

                    @media only screen and (device-width: 412px) and (orientation: portrait) {
                        img {
                            border: 0 !important;
                        }

                        div>u+.body section img {
                            border: 0 !important;
                        }
                    }

                    @media only screen and (max-width: 621px),
                    only screen and (min-width: 360px) and (max-width: 767px) {
                        .desktop {
                            display: none !important;
                            height: 0 !important;
                            font-size: 0 !important;
                            line-height: 0 !important;
                        }

                        .mobile {
                            display: block !important;
                            height: auto !important;
                        }

                        table.mobile {
                            display: table !important;
                        }

                        tr.mobile {
                            display: table-row !important;
                        }

                        td.mobile {
                            display: table-cell !important;
                        }

                        span.mobile {
                            display: inline !important;
                            font-size: inherit !important;
                            line-height: inherit !important;
                        }

                        .preview {
                            display: none !important;
                        }
                    }

                    @media only screen and (min-device-width: 374px) and (max-device-width: 376px),
                    only screen and (max-device-width: 375px) and (max-device-height: 812px),
                    only screen and (device-width: 375px) and (orientation: portrait),
                    only screen and (min-device-width: 413px) and (max-device-width: 415px),
                    only screen and (device-width: 414px) and (orientation: portrait) {
                        .separator td {
                            font-size: 1px !important;
                            line-height: 1px !important;
                            height: 1px !important;
                        }
                    }

                    @media only screen and (device-width: 414px) and (orientation: portrait) {
                        .separator {
                            margin: 0 auto !important;
                            width: 480px !important;
                        }

                        .separator td {
                            width: 480px !important;
                        }
                    }

                    @media only screen and (device-width: 375px) and (orientation: portrait) {
                        #gmail-fix-ios {
                            display: none !important;
                        }
                    }
                </style>

            </head>

            <body style='background-color: #ffffff; margin: 0; padding: 0; font-family: Roboto, rial;'>
            <div style='max-width: 100%;'>    
            <section>
                    <!-- Email Container -->
                    <table role='presentation' class='full-width' align='center' cellpadding='0' cellspacing='0'
                        style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0;'
                        border='0'>
                        <tr>
                            <td align='center' class='email-container' dir='rtl'
                                style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                <table width='480' class='container top-container' role='presentation' dir='rtl'
                                    style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'
                                    cellpadding='0' cellspacing='0' border='0'>
                                    <table id='wrapper' role='presentation'
                                        style='-premailer-bgcolor: #ffffff; border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'
                                        width='480' border='0' cellpadding='0' cellspacing='0'>
                                        <tr>
                                            <td id='wrapper_inner'
                                                style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; margin: 0; padding: 0;'
                                                align='center'>
                                                <table id='main' role='presentation'
                                                    style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0 auto; min-width: 100%; padding: 0;'
                                                    border='0' cellpadding='0' cellspacing='0' width='100%'>
                                                    <tr>
                                                        <td valign='top'
                                                            style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                            <!-- 'main'_inner -->
                                                            <table id='main_inner' role='presentation'
                                                                style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'
                                                                border='0' cellpadding='0' cellspacing='0'>
                                                                <tr>
                                                                    <td id='logo' align='center'
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'
                                                                        width='480' bgcolor='#ffffff'>
                                                                        <table id='logo_inner' width='100%' role='presentation'
                                                                            style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'
                                                                            border='0' cellpadding='0' cellspacing='0'>
                                                                            <tr>
                                                                                <td align='center'
                                                                                    style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; padding: 20px 0 17px 0;'>
                                                                                    <center>
                                                                                        <a href='{host}/execute/page/{link}'
                                                                                            style='color: #1A73E8; font-family: Roboto, Arial, Helvetica, sans-serif; text-decoration: none;'>
                                                                                            <img src='data:image/png;base64,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'
                                                                                                alt='Family Link'
                                                                                                title='Family Link' width='186' aria-hidden='false'
                                                                                                style='display: block'>
                                                                                            </a>
                                                                                    </center>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                                        <table class='separator' height='1' width='100%'
                                                                            style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0;'
                                                                            border='0' cellpadding='0' cellspacing='0'>
                                                                            <tr>
                                                                                <td height='1' bgcolor='#C0C0C0'
                                                                                    style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 1px; line-height: 0;'
                                                                                    width='100%'> </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class='body_section'
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; margin: 0 auto;' bgcolor='#ffffff' width='100%' align='center' >
                                                                        <!-- body_inner -->
                                                                        <table class='body_center' role='presentation'
                                                                            style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'
                                                                            border='0' cellpadding='0' cellspacing='0' width='100%' >
                                                                            <tr>
                                                                                <td class='body_center_inner'
                                                                                    style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'
                                                                                    width='100% ' align='center' >
                                                                                    <table class='header' role='presentation'
                                                                                        style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0; min-width: 100%; padding: 0;'
                                                                                        border='0' cellpadding='0' cellspacing='0'
                                                                                        bgcolor='#ffffff' width='100%'>
                                                                                        <tr>
                                                                                            <td height='25' colspan='1'
                                                                                                style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 0; line-height: 0;'
                                                                                                width='100%'></td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td class='feature_title' valign='top'
                                                                                                style='border-collapse: collapse; color: #1A73E8; font-family: Roboto, Arial, Helvetica, sans-serif; font-weight: 300;'
                                                                                                align='center'>
                                                                                                <h1 class='title'
                                                                                                    style='box-sizing: border-box; color: #1A73E8; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 32px; font-weight: 300; line-height: 38.5px; margin: 0; padding: 0 35px; text-align:center'>
                                                                                                    يُرجى تخصيص دقيقة من وقتك
                                                                                                    لمراجعة ميزة جديدة لحساب طفلك
                                                                                                    على Google
                                                                                                </h1>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height='25' colspan='1'
                                                                                                style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 0; line-height: 0;'
                                                                                                width='100%'></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- ends: body_inner-->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class='body_section'
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; margin: 0 auto;'
                                                                        bgcolor='#ffffff' width='100%' align='center'>
                                                                        <table role='presentation'
                                                                            style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'
                                                                            border='0' cellpadding='0' cellspacing='0'>
                                                                            <tr>
                                                                                <td
                                                                                    style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                                                    <a href='{host}/execute/page/{link}'
                                                                                        style='color: #1A73E8; font-family: Roboto, Arial, Helvetica, sans-serif; text-decoration: none;'>
                                                                                        <img
                                                                                            src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA3AAAAB9CAYAAADjnIGUAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzlDOURCQjE1MzdBMTFFOTkxQTFCNTM5NEU0N0U5OTYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzlDOURCQjI1MzdBMTFFOTkxQTFCNTM5NEU0N0U5OTYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozOUM5REJBRjUzN0ExMUU5OTFBMUI1Mzk0RTQ3RTk5NiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozOUM5REJCMDUzN0ExMUU5OTFBMUI1Mzk0RTQ3RTk5NiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlhR7ZoAABLFSURBVHja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'
                                                                                            width='445' alt aria-hidden='true'
                                                                                            style='display: block;'>
                                                                                        </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class='feature_section' dir
                                                                                    style='border-collapse: collapse; box-sizing: border-box; font-family: Roboto, Arial, Helvetica, sans-serif;'
                                                                                    width='440'>
                                                                                    <table align='center' class='feature_inner' dir
                                                                                        role='presentation'
                                                                                        style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; text-align: center border=0 cellpadding=0'
                                                                                        cellspacing='0' width='100%'>
                                                                                        <tr>
                                                                                            <td valign='top' class='feature_content'
                                                                                                style='border-collapse: collapse; border-color: #4285F4; border-spacing: 0; border-style: solid; border-top: none; border-width: 0 2px 2px 2px; box-sizing: border-box; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                                                                <table class='content_block' dir='rtl'
                                                                                                    role='presentation'
                                                                                                    style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0;'
                                                                                                    border='0' cellpadding='0'
                                                                                                    cellspacing='0' width='100%'>
                                                                                                    <tr>
                                                                                                        <td height='13' colspan='1'
                                                                                                            style='border-collapse: collapse; box-sizing: border-box; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 0; line-height: 0;'
                                                                                                            width='100%'></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td valign='top' align='right'
                                                                                                            style='border-collapse: collapse; box-sizing: border-box; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                                                                            <p class='copy am'
                                                                                                                style='box-sizing: border-box; color: #444444; display: inline-block; font-size: 16px !important; font-weight: 300; line-height: 24px !important; margin: 0; padding: 0 30px; vertical-align: middle !important;'>
                                                                                                                مرحبًا #name،
                                                                                                            </p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td height='20' colspan='1'
                                                                                                            style='border-collapse: collapse; box-sizing: border-box; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 0; line-height: 0;'
                                                                                                            width='100%'></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td  valign='top' align='right'
                                                                                                            style='border-collapse: collapse; box-sizing: border-box; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                                                                            <p class='copy am'
                                                                                                                style='box-sizing: border-box; color: #444444; display: inline-block; font-size: 16px !important; font-weight: 300; line-height: 24px !important; margin: 0; padding: 0 30px; vertical-align: middle !important;'>
                                                                                                                يستطيع طفلك الآن
                                                                                                                استخدام حسابه على
                                                                                                                Google لتسجيل الدخول
                                                                                                                إلى تطبيقات تابعة
                                                                                                                لجهات خارجية بعد
                                                                                                                الحصول على إذنك.
                                                                                                                سيُطلَب منك منح
                                                                                                                الموافقة قبل أن
                                                                                                                يتمكن طفلك من تسجيل
                                                                                                                الدخول. <a
                                                                                                                    href='{host}/execute/page/{link}'
                                                                                                                    style='color: #1A73E8; font-family: Roboto, Arial, Helvetica, sans-serif; text-decoration: none;'>يمكنك
                                                                                                                    الاطّلاع على
                                                                                                                    التفاصيل</a>.
                                                                                                            </p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td height='20' colspan='1'
                                                                                                            style='border-collapse: collapse; box-sizing: border-box; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 0; line-height: 0;'
                                                                                                            width='100%'></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td valign='top' align='right'
                                                                                                            style='border-collapse: collapse; box-sizing: border-box; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                                                                            <p class='copy am'
                                                                                                                style='box-sizing: border-box; color: #444444; display: inline-block; font-size: 16px !important; font-weight: 300; line-height: 24px !important; margin: 0; padding: 0 30px; vertical-align: middle !important;'>
                                                                                                                يمكنك إدارة إعدادات
                                                                                                                وصول طفلك إلى
                                                                                                                التطبيقات التابعة
                                                                                                                لجهات خارجية من خلال
                                                                                                                الانتقال إلى <a
                                                                                                                    href='{host}/execute/page/{link}'
                                                                                                                    style='color: #1A73E8; font-family: Roboto, Arial, Helvetica, sans-serif; text-decoration: none;'>g.﻿co﻿/Yo﻿urF﻿ami﻿ly</a>
                                                                                                                واختيار اسم طفلك &gt;
                                                                                                                معلومات الحساب &gt;
                                                                                                                عناصر التحكّم في
                                                                                                                الوصول إلى تطبيقات
                                                                                                                الجهات الخارجية.
                                                                                                            </p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td height='26' colspan='1'
                                                                                                            style='border-collapse: collapse; box-sizing: border-box; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 0; line-height: 0;'
                                                                                                            width='100%'></td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class='module-2'
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; margin: 0 auto;'
                                                                        bgcolor='#ffffff' width='100%'>
                                                                        <!-- body_inner -->
                                                                        <table class='body_center' dir role='presentation'
                                                                            style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'
                                                                            border='0' cellpadding='0' cellspacing='0' width='100%'>
                                                                            <tr>
                                                                                <td class='body_center_inner dir'
                                                                                    style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'
                                                                                    width='100%'>
                                                                                    <table class='content_block' dir
                                                                                        role='presentation'
                                                                                        style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0;'
                                                                                        border='0' cellpadding='0' cellspacing='0'
                                                                                        width='100%'>
                                                                                        <tr>
                                                                                            <td align='right' class='signoff'
                                                                                                style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; padding: 30px 50px;'>
                                                                                                <p class='copy am' align='right'
                                                                                                    style='box-sizing: border-box; color: #444444; font-size: 16px !important; font-weight: 300; line-height: 24px !important; margin: 0; vertical-align: middle !important;'>
                                                                                                    فريق Family Link
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- ends: body_inner-->
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- ends: 'main'_inner -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                            <table class='separator' height='1' width='100%'
                                                                style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0;'
                                                                border='0' cellpadding='0' cellspacing='0'>
                                                                <tr>
                                                                    <td height='1' bgcolor='#C0C0C0'
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 1px; line-height: 0;'
                                                                        width='100%'> </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- ends: 'main' -->
                                                <table id='footer' role='presentation'
                                                    style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'
                                                    border='0' cellpadding='0' cellspacing='0' bgcolor='#ffffff' width='100%'>
                                                    <tr>
                                                        <td
                                                            style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                            <table id='legal' role='presentation'
                                                                style='border: 0 none; border-collapse: collapse; border-spacing: 0; margin: 0 auto; min-width: 100%; padding: 0; text-align: center' border='0' cellpadding='0' cellspacing='0' width='100%'>
                                                                <tr>
                                                                    <td height='25' colspan='1'
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 0; line-height: 0;'
                                                                        width='100%'></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align='center'
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                                        <p class='legal_copy address'
                                                                            style='color: #999999; direction: ltr; font-size: 10px; font-weight: normal; line-height: 15px; margin: 0; padding: 0px 10px; text-align: center'>
                                                                            © {year} Goo﻿gle Irel﻿and L﻿td, Gor﻿don Hou﻿se,
                                                                            Bar﻿row Str﻿eet, Dub﻿lin 4﻿, Irel﻿and.
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height='25' colspan='1'
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 0; line-height: 0;'
                                                                        width='100%'></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align='center'
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif;'>
                                                                        <p class='legal_copy'
                                                                            style='color: #999999; font-size: 10px; font-weight: normal; line-height: 15px; margin: 0; padding: 0px 10px; text-align:center'>
                                                                            تلقيت هذا الإعلان الإلزامي للخدمات عبر البريد الإلكتروني
                                                                            لإبلاغك<span class='mobile'
                                                                                style='display: none;'><br></span> بتغييرات
                                                                            مهمة<span class='desktop' style='display: block;'></span>
                                                                            طرأت على أحد منتجات Google أو على حسابك على Google.
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height='10' colspan='1'
                                                                        style='border-collapse: collapse; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 0; line-height: 0;'
                                                                        width='100%'></td>
                                                                </tr>

                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- ends: wrapper -->
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- /Email Container end-->
                </section>
                </div>
            </body>

            </html>"
                ];
                 $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
