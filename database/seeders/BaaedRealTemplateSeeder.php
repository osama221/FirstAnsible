<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BaaedRealTemplateSeeder extends Seeder
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
                'title' => 'لديك وظيفتان عن بعد لتتقدم لها هذا الأسبوع',
                'description' => 'لديك وظيفتان عن بعد لتتقدم لها هذا الأسبوع',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => null, // Random between 1 to 10
                'is_phishing'=> 0, // 0 = false / 1 = true
                'reason'=>'Fake sender Email',
                'short_reason'=>'Fake sender Email',
                'sender' => 'security@mg.baaed.com>',
                'template'=> "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                <html dir='rtl' xmlns='http://www.w3.org/1999/xhtml'>
                <head>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                <link href='https://static.hsoubcdn.com/assets/fonts/css/NotoArabic.css' rel='stylesheet'>
                <title>بعيد</title>
                <style type='text/css'>
                    h4
                    {
                        text-align: left;
                    }

                @media screen
                {

                    .headerLineTitle
                    {
                        width:1.5in;
                        display:inline-block;
                        margin:0in;
                        margin-bottom:.0001pt;
                        font-size:11.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:bold;
                    }

                    .headerLineText
                    {
                        display:inline;
                        margin:0in;
                        margin-bottom:.0001pt;
                        font-size:11.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:normal;
                    }

                   .pageHeader
                   {
                        font-size:14.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:bold;
                        visibility:hidden;
                        display:none;
                   }
                }

                @media print
                {
                    .headerLineTitle
                    {
                        width:1.5in;
                        display:inline-block;
                        margin:0in;
                        margin-bottom:.0001pt;
                        font-size:11.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:bold;
                    }

                    .headerLineText
                    {
                        display:inline;
                        margin:0in;
                        margin-bottom:.0001pt;
                        font-size:11.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:normal;
                    }

                   .pageHeader
                   {
                        font-size:14.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:bold;
                        visibility:visible;
                        display:block;
                   }

                }
                @media  only screen and (max-width: 600px) {
                            .inner-body {
                                width: 100% !important;
                            }

                            .footer {
                                width: 100% !important;
                            }
                        }

                        @media  only screen and (max-width: 500px) {
                            .button {
                                width: 100% !important;
                            }
                        }
                </style>
                </head>

                <body style=' box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; direction: rtl; background-color: #f5f8fa; color: #262626; height: 100%; hyphens: auto; line-height: 1.5; margin: 0; -moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none; word-break: break-word;'>
                   
                <div style='max-width: 100%;'>

                <table class='wrapper' width='100%' cellpadding='0' cellspacing='0' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; background-color: #7566F1; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;'><tr>
                <td align='center' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;'>
                                <table class='content' width='100%' cellpadding='0' cellspacing='0' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;'>
                <tr>
                <td class='header' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; padding: 25px 0; text-align: center;'>
                        <a class='header-link' href='https://baaeed.com/' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #fff; text-decoration: none;'>
                            <span class='header-text' style='font-size: 40px;'>بعيد</span>
                        </a>
                    </td>
                </tr>
                <!-- Email Body --><tr>
                <td class='body' width='100%' cellpadding='0' cellspacing='0' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; background-color: #FFFFFF; border-bottom: 1px solid #EDEFF2; border-top: 1px solid #EDEFF2; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;'>
                                            <table class='inner-body' align='center' width='570' cellpadding='0' cellspacing='0' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; background-color: #FFFFFF; margin: 0 auto; padding: 0; width: 100%; max-width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;'>
                <!-- Body content --><tr>
                <td class='content-cell' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; padding: 35px 10px;'>
                                                        <p style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; text-align: right; color: #262626; font-size: 16px; line-height: 1.55; margin-top: 0;'> مرحبا #name،</p>
                <p style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; text-align: right; color: #262626; font-size: 16px; line-height: 1.55; margin-top: 0;'>لديك وظيفتان عن بعد تنتظرك للتقدم إليها هذا الأسبوع على موقع بعيد.</p>
                <table class='email-list' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; margin-bottom: 1em;'>
                <!--Get Category Name-->
                <!--Get Category Name-->
                </table>
                <table class='action' align='center' width='100%' cellpadding='0' cellspacing='0' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; margin: 30px auto; padding: 0; text-align: center; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;'><tr>
                <td align='center' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;'>
                            <table width='100%' border='0' cellpadding='0' cellspacing='0' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;'><tr>
                <td align='center' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;'>
                                        <table class='text-center' border='0' cellpadding='0' cellspacing='0' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; text-align: center;'><tr>
                <td style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;'>
                                                    <a href='https://baaeed.com/' class='button button-blue' target='_blank' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #FFF; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; font-size: 16px; background-color: #7566F1; border-top: 10px solid #7566F1; border-right: 18px solid #7566F1; border-bottom: 10px solid #7566F1; border-left: 18px solid #7566F1;'>اكتشف أحدث الوظائف</a>
                                                </td>
                                            </tr></table>
                </td>
                                </tr></table>
                </td>
                    </tr></table>
                <p class='contact_us' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; text-align: right; color: #262626; font-size: 16px; line-height: 1.55; margin-top: 0;'>تحتاج لمزيد من المساعدة؟ نحن هنا في خدمتك دائما. لا تتردد في التواصل معنا بالرد على هذه الرسالة إن كان لديك أي استفسارات.</p>
                <p style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; text-align: right; color: #262626; font-size: 16px; line-height: 1.55; margin-top: 0;'>مع أطيب التحيات،<br>فريق بعيد<br><a href='https://baaeed.com/' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #7566F1; text-decoration: none;'></a><a href='https://baaeed.com/' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #7566F1; text-decoration: none;'>https://baaeed.com</a></p>
                <table class='subcopy' width='100%' cellpadding='0' cellspacing='0' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; border-top: 1px solid #EDEFF2; margin-top: 25px; padding-top: 25px;'><tr>
                <td style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;'>
                            <p style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; text-align: right; line-height: 1.55; margin-top: 0; font-size: 12px; color: #74787E;'><span class='small' style='font-size: 12px;'></span></p>
                <p style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; text-align: right; line-height: 1.55; margin-top: 0; font-size: 12px; color: #74787E;'>من فضلك <a href='https://baaeed.com/' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #7566F1; text-decoration: none;'>اضغط هنا</a> لتعديل إعدادات النشرة البريدية. لإلغاء اشتراكك في النشرة البريدية، <a href='https://baaeed.com/' style='box-sizing: border-box; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #7566F1; text-decoration: none;'>اضغط هنا</a>
                <span></span></p>
                        </td>
                    </tr></table>
                </td>
                                                </tr>
                </table>
                </td>
                                    </tr>
                </table>
                </td>
                        </tr></table>
                        </div>
                </body>
                </html>
                "
                ];
                 $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
