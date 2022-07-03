<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DuolingoAnalyticsRealTemplateSeeder extends Seeder
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
                'title' => 'كيف = دوولينجو 4 فصول دراسية جامعية من تعلم اللغات',
                'description' => 'نتيح للجميع تعليمًا بمستوى جامعي ',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => null, // Random between 1 to 10
                'is_phishing'=> 0, // 0 = false / 1 = true
                'reason'=>'Fake sender Email',
                'short_reason'=>'Fake sender Email',
                'sender' => 'security@diolingo.net>',
                'template'=> "<!DOCTYPE html>
                <html lang='ar' xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml'><head>
                <title>Duolingo</title>
                <meta name='x-apple-disable-message-reformatting'/>
                <meta content='text/html; charset=utf-8'>
                <meta content='width=device-width, initial-scale=1.0' name='viewport'/>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta content='IE=edge' http-equiv='x-ua-compatible'/>
                <meta content='light dark' name='color-scheme'/>
                <meta content='light dark' name='supported-color-schemes'/>
                <style type='text/css'>
                @media (prefers-color-scheme: dark) {
                .chameleon-bg {
                background-color: #000000 !important;
                }
                .chameleon-heading {
                color: #FFFFFF !important;
                }
                .chameleon-text {
                color: #ccc !important;
                }
                .chameleon-line {
                border-color: #666 !important;
                }
                .chameleon-language {
                background-color: transparent !important;
                border-color: #666 !important;
                box-shadow: 0 2px 0 0 #666 !important;
                }
                .chameleon-language-label {
                color: #ccc !important;
                }
                .chameleon-green-bg {
                background-color: #58CC02 !important;
                }
                }
                #outlook a{ padding:0;  color:inherit;}
                .ReadMsgBody{width:100%;}
                .ExternalClass{width:100%;}
                .ExternalClass,.ExternalClass span,.ExternalClass td,.ExternalClass div{line-height:100%;}
                body,table,td,a{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;}
                img{-ms-interpolation-mode:bicubic;}
                body{font-family: Helvetica, ArialMT, sans-serif;height:100% !important;margin:0 !important;padding:0 !important;width:100% !important;}
                img{border:0;height:auto;line-height:100%;outline:none;text-decoration:none;}
                a[x-apple-data-detectors]{
                color:inherit !important;
                text-decoration:none !important;
                font-size:inherit !important;
                font-family:inherit !important;
                font-weight:inherit !important;
                line-height:inherit !important;
                }
                .webkit-hide{display:none !important;}
                .webkit-show{
                height:auto !important;
                width:auto !important;
                max-width:none !important;
                max-height:none !important;
                overflow:auto !important;
                visibility:visible !important;
                display:block !important;
                }
                #font-weight-normal{font-weight:normal !important;}
                .link-hover:hover{text-decoration:none !important;}

                @media only screen and (max-width: 600px){
                body[yahoo] .deviceWidth{width:100%!important;padding:0;min-width:100%!important;}
                .deviceWidth{width:100%!important;padding:0 !important;min-width:100%!important;}
                .mobile-hide{display:none !important;}
                .mobile-center{text-align:center !important;}
                .mobile-center2{margin:0 auto;}
                .img-max{max-width:100% !important;height:auto !important;}
                .img-max2{width:100% !important;max-width:100% !important;height:auto !important;}
                .responsive-table{width:100% !important;max-width:100% !important;}
                .pt8{ padding-top:8px !important;}
                .mobilespace24 {height: 24px !important;min-height: 24px !important;max-height: 24px !important;line-height: 24px !important;}
                .mobilespace32 {height: 32px !important;min-height: 32px !important;max-height: 32px !important;line-height: 32px !important;}
                .f28{font-size:25px !important; line-height:32px !important;}

                .mw169{ width:169px !important; min-width:169px !important;}
                .mw11{ width:11px !important; min-width:11px !important;}
                .mspace8{ height:8px !important; line-height:8px !important; max-height:8px !important;}
                .m_padding10{padding-left:10px !important; padding-right:10px !important;}
                }
                @media only screen and (max-width: 361px){
                .mw169{
                width:100% !important;
                max-width:100% !important;
                min-width:100% !important;}
                .mw11{ width:21px !important; min-width:21px !important;}
                .m_padding{ padding-top:0px !important;}

                }
                @media only screen and (min-width:480px){
                .w214{width:214px !important;min-width:214px !important;max-width:214px !important;}
                .w316{width:316px !important;min-width:316px !important;max-width:316px !important;}
                .w141{width:141px !important;min-width:141px !important;max-width:141px !important;}
                .w290{width:290px !important;min-width:290px !important;max-width:290px !important;}
                }
                @media only screen and (max-width: 480px){
                .emailbody{ width: 100vw !important; padding:0 !important; margin:0 !important;}
                u + .emailbody{
                width:100% !important;
                }
                }
                [owa] .w214{width:214px !important;min-width:214px !important;max-width:214px !important;}
                [owa] .w316{width:316px !important;min-width:316px !important;max-width:316px !important;}
                [owa] .w141{width:141px !important;min-width:141px !important;max-width:141px !important;}
                [owa] .w290{width:290px !important;min-width:290px !important;max-width:290px !important;}
                @media only screen and (min-width: 520px){
                .desktop-hide{display:none !important;}
                .desktop-show{
                display:table !important;
                }
                }
                </style>

                </head>
                <body class='emailbody chameleon-bg' dir='rtl' style='margin: 0; padding:0; font-family: ArialMT;'>

                <div style='max-width: 100%;'>

                <div style='display:none;font-size:1px;color:#ffffff;line-height:1px;font-family:ArialMT, Helvetica, sans-serif;max-height:0px;max-width:0px;opacity:0;overflow:hidden;'>
                اكتشف كيف يمكن لدوولينجو زيادة سرعة تعلمك.
                </div>
                <div style='display: none; max-height: 0px; overflow: hidden; color:#ffffff;'>
                ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌  ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌  ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌  ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌  ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌  ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌  ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌  ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌ ‌
                </div>
                <table align='center' border='0' cellpadding='0' cellspacing='0' class='deviceWidth' style='width:100%; min-width:100%;' width='100%'>
                <tbody><tr>
                <td align='center' style='padding:5px;'>
                <!--[if (gte mso 9)|(IE)]>
                <table align='center' border='0' cellspacing='0' cellpadding='0' width='600'>
                <tr>
                <td align='center' valign='top' width='600'>
                <![endif]-->

                <!-- header -->
                <table border='0' cellpadding='0' cellspacing='0' class='deviceWidth' style='width:100%; max-width:600px;' width='600'>
                <tbody><tr>
                <td height='32' style='height:32px; min-height:32px; line-height:32px; font-size:1px;'> </td>
                </tr>
                <tr>
                <td align='center'>
                <a class='brand-logo-link' href='https://ar.duolingo.com/' link-id='139491' target='_blank'>
                <img class='brand-logo-img' height='auto' src='data:image/png;base64,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' style='display:block; border:0px;text-decoration: none;  border-style: none;  color: #ffffff; border-width:0;' width='103'/>
                </a>
                </td>
                </tr>
                <tr>
                <td height='24' style='height:24px; min-height:24px; line-height:24px; font-size:1px;'> </td>
                </tr>
                </tbody></table>
                <!-- / header -->

                <!-- section -->
                <table border='0' cellpadding='0' cellspacing='0' class='deviceWidth' style='width:100%;max-width: 600px;' width='600'>
                <tbody><tr>
                <td align='center' style='padding-top:16px;'>
                <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                <tbody><tr>
                <td align='center' style='padding-left:68px; padding-right:68px;'>
                <!--[if (gte mso 9)|(IE)]>
                <table align='center' border='0' cellspacing='0' cellpadding='0' width='236'>
                <tr>
                <td align='center' valign='top' width='236'>
                <![endif]-->
                <a href='https://ar.duolingo.com/' link-id='139492' target='_blank'>
                <img height='auto' src='data:image/png;base64,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' style='display:block; border:0px; width:100%; max-width:236px; ' width='236'/>
                </a>
                <!--[if (gte mso 9)|(IE)]>
                </td></tr></table>
                <![endif]-->
                </td>
                </tr>
                <tr>
                <td style='padding-top:20px;' valign='top'>
                <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                <tbody><tr>
                <td align='center' style='padding-left:24px; padding-right:24px;'>
                <table align='left' border='0' cellpadding='0' cellspacing='0' width='100%'>

                <tbody><tr>
                <td align='center'>
                <!--[if (gte mso 9)|(IE)]>
                <table align='center' border='0' cellspacing='0' cellpadding='0' width='400'>
                <tr>
                <td align='center' valign='top' width='400'>
                <![endif]-->
                <h1 class='f28 chameleon-heading' style='Margin:0; margin:0; font-family:ArialMT, Helvetica, sans-serif; font-size:28px; line-height:38px; font-weight:700; letter-spacing:0; color:#4c4c4c; max-width:400px;'>
                نتيح للجميع تعليمًا بمستوى جامعي
                </h1>
                <!--[if (gte mso 9)|(IE)]>
                </td></tr></table>
                <![endif]-->
                </td>
                </tr>
                <tr>
                <td align='center' class='pt8' style='padding-top:12px;'>
                <!--[if (gte mso 9)|(IE)]>
                <table align='center' border='0' cellspacing='0' cellpadding='0' width='480'>
                <tr>
                <td align='center' valign='top' width='480'>
                <![endif]-->
                <p class='chameleon-text' style='Margin:0; margin:0; font-family:ArialMT, Helvetica, sans-serif; font-size:16px; line-height:26px; font-weight:400; letter-spacing:0; color:#777777; max-width:480px;'>
                رسالتنا في دوولينجو هي إتاحة تعلم اللغات عالي الجودة للعالم أجمع. اطلع على بعض المقتطفات من دراسة الفعالية الخاصة بنا، وتعرف على خاصية جديدة تساعدك علي إشعال حماسك بمتابعة اصدقائك!
                </p>
                <!--[if (gte mso 9)|(IE)]>
                </td></tr></table>
                <![endif]-->
                </td>
                </tr>
                <tr>
                <td align='center' style='padding-top:24px;'>
                <div>
                <table border='0' cellpadding='0' cellspacing='0' style='width:260px;border-spacing:0;border-collapse:collapse;' width='260'>
                <tbody><tr>
                <td align='center' height='43' style='border-collapse:collapse;background-color:#1cb0f6;-moz-border-radius:9px;-webkit-border-radius:9px;border-radius:9px;  box-shadow: 0 3px 0 0 #0a9be0; white-space:nowrap;'>

                <a href='https://ar.duolingo.com/' link-id='139493' style='display:inline-block; width:100%;font-family:ArialMT, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:19px; letter-spacing:0.8px; text-transform:uppercase;color:#ffffff;text-align:center;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:100%; background-color:#1cb0f6;border-radius:14px; border-top:12px solid #1cb0f6; border-bottom:12px solid #1cb0f6;'>
                تابع التعلم
                </a>

                </td>
                </tr>
                </tbody></table>
                <!--<![endif]--></div>
                </td>
                </tr>
                </tbody></table>
                </td>
                </tr>
                </tbody></table>
                </td>
                </tr>
                <tr>
                <td class='mobilespace32 chameleon-line' height='40' style='height:40px; min-height:40px; line-height:40px; font-size:1px; border-bottom:2px solid #f2f2f2;'> </td>
                </tr>
                </tbody></table>
                </td>
                </tr>
                </tbody></table>
                <!-- / section -->

                <!-- Footer -->
                <table border='0' cellpadding='0' cellspacing='0' class='deviceWidth' style='max-width: 600px;' width='100%'>
                <tbody><tr>
                <td align='center' style='padding-top:16px;'>
                <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                <tbody><tr>
                <td style='width:32px; min-width:32px; max-width:32px;' width='32'> </td>
                <td valign='top'>
                <!--[if (gte mso 9)|(IE)]>
                <table align='center' border='0' cellspacing='0' cellpadding='0' width='536' dir='rtl'>
                <tr>
                <td align='center' valign='top' width='141'>
                <![endif]-->
                <table align='left' border='0' cellpadding='0' cellspacing='0' class='responsive-table w141' dir='ltr' style='min-width:100%; width:27%; max-width:100%;min-width:-webkit-calc(27%); min-width:calc(27%);width:-webkit-calc(287296px - 53600%);width: calc(287296px - 53600%);' width='141'>
                <tbody><tr>
                <td align='right' style='padding-top:4px; padding-bottom:16px;'>
                <table border='0' cellpadding='0' cellspacing='0' dir='rtl' width='141'>
                <tbody>
                </tbody></table>
                </td>
                </tr>
                </tbody></table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                <td align='center' valign='top' width='394'>
                <![endif]--><table align='right' border='0' cellpadding='0' cellspacing='0' class='responsive-table w290' dir='ltr' style='min-width:100%; width:54%; max-width:100%;min-width:-webkit-calc(54%); min-width:calc(54%);width:-webkit-calc(287296px - 53600%);width: calc(287296px - 53600%);' width='290'>
                <tbody><tr>
                <td align='center'>
                <!--[if (gte mso 9)|(IE)]>
                <table align='center' border='0' cellspacing='0' cellpadding='0' width='300'>
                <tr>
                <td align='center' valign='top' width='300'>
                <![endif]--><table align='left' border='0' cellpadding='0' cellspacing='0' width='100%'>
                <tbody><tr>
                <td align='right'>
                <p style='Margin:0; margin:0; font-family:ArialMT, Helvetica, sans-serif; font-size:13px; line-height:15px; font-weight:400; color:#a7a7a7;'>5900 Penn Avenue, Pittsburgh PA 15206, USA</p>


                </td>
                </tr>
                </tbody></table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]--></td>
                </tr>
                </tbody></table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]--></td>
                <td style='width:32px; min-width:32px; max-width:32px;' width='32'> </td>
                </tr>
                <tr>
                <td style='width:32px; min-width:32px; max-width:32px;' width='32'> </td>
                <td align='right' style='padding-top:5px;'>

                <p style='Margin:0; margin:0; margin-top:px; font-family:ArialMT, Helvetica, sans-serif; font-size:13px; line-height:17px; font-weight:400; color:#a7a7a7;'>

                </p>


                </td>
                <td style='width:32px; min-width:32px; max-width:32px;' width='32'> </td>
                </tr>
                </tbody></table>
                </td>
                </tr>

                <tr>
                <td height='60' style='height:60px; min-height:60px; line-height:60px; font-size:1px;'> </td>
                </tr>
                </tbody></table>
                <!-- / Footer -->

                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
                </td>
                </tr>
                </tbody></table>


                <!-- FIX FOR GMAIL iOS -->
                <div style='display:none; white-space:nowrap; font:15px courier; color:#ffffff;'>
                - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                </div>
                <!-- FIX FOR GMAIL iOS -->
                </div>
                </body></html>"
                ];
                 $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
