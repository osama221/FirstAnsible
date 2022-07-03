<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UdacityFakeTemplateSeeder extends Seeder
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
                'title' => '.مستقبل العمل الآن! انضم إلى المنحة المقدمة من وزارة الاتصالات',
                'description' => 'هذه هي فرصتك لتنمية مهاراتك في التكنولوجيا والعمل عبر الإنترنت',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => 6, // Random between 1 to 10
                'is_phishing'=> 1, // 0 = false / 1 = true
                'reason'=>'Fake sender Email',
                'short_reason'=>'Fake sender Email',
                'sender' => 'security@udacity.net>',
                'template'=> "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
                <html data-editor-version='2' class='sg-campaigns' xmlns='http://www.w3.org/1999/xhtml'>
                  <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <!--[if !mso]><!-->
                    <meta http-equiv='X-UA-Compatible' content='IE=Edge' /><!--<![endif]-->
                   <title>Udacity</title>
                    <style type='text/css'>
                      }
                      body, p, div {
                        font-family: helvetica,arial,sans-serif;
                        font-size: 14px;
                      }
                      body {
                        color: #000000;
                      }
                      body a {
                        color: #1188E6;
                        text-decoration: none;
                      }
                      p { margin: 0; padding: 0; }
                      table.wrapper {
                        width:100% !important;
                        table-layout: fixed;
                        -webkit-font-smoothing: antialiased;
                        -webkit-text-size-adjust: 100%;
                        -moz-text-size-adjust: 100%;
                        -ms-text-size-adjust: 100%;
                      }

                      .column.of-2 {
                        width: 50%;
                      }
                      .column.of-3 {
                        width: 33.333%;
                      }
                      .column.of-4 {
                        width: 25%;
                      }
                      @media screen and (max-width:480px) {
                        .preheader .rightColumnContent,
                        .footer .rightColumnContent {
                            text-align: left !important;
                        }
                        .preheader .rightColumnContent div,
                        .preheader .rightColumnContent span,
                        .footer .rightColumnContent div,
                        .footer .rightColumnContent span {
                          text-align: left !important;
                        }
                        .preheader .rightColumnContent,
                        .preheader .leftColumnContent {
                          font-size: 80% !important;
                          padding: 5px 0;
                        }
                        table.wrapper-mobile {
                          width: 100% !important;
                          table-layout: fixed;
                        }

                        a.bulletproof-button {
                          display: block !important;
                          width: auto !important;
                          font-size: 80%;
                          padding-left: 0 !important;
                          padding-right: 0 !important;
                        }
                        .columns {
                          width: 100% !important;
                        }
                        .column {
                          display: block !important;
                          width: 100% !important;
                          padding-left: 0 !important;
                          padding-right: 0 !important;
                          margin-left: 0 !important;
                          margin-right: 0 !important;
                        }
                      }
                    </style>
                    <!--user entered Head Start-->

                     <!--End Head user entered-->

                </head>
                  <body style='font-family: Helvetica,ArialMT;'>
                  <div style='max-width: 100%;'>
                    <center class='wrapper' data-link-color='#1188E6' data-body-style='font-size: 14px; font-family: helvetica,ArialMT,sans-serif; color: #000000; background-color: #ffffff;'>
                      <div class='webkit'>
                        <table cellpadding='0' cellspacing='0' border='0' width='100%' class='wrapper' bgcolor='#ffffff'>
                          <tr>
                            <td valign='top' bgcolor='#ffffff' width='100%'>
                              <table width='100%' role='content-container' class='outer' align='center' cellpadding='0' cellspacing='0' border='0'>
                                <tr>
                                  <td width='100%'>
                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                      <tr>
                                        <td>
                                          <!--[if mso]>
                                          <center>
                                          <table><tr><td width='600'>
                                          <![endif]-->
                                          <table width='100%' cellpadding='0' cellspacing='0' border='0' style='width: 100%; max-width:600px;' align='center'>
                                            <tr>
                                              <td role='modules-container' style='padding: 0px 0px 0px 0px; color: #000000; text-align: left;' bgcolor='#ffffff' width='100%' align='left'>
                    <table class='module' role='module' data-type='text' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;'>
                      <tr>
                        <td style='background-color:#ffffff;padding:0px 12px 0px 12px;line-height:22px;text-align:inherit;'
                            height='100%'
                            valign='top'
                            bgcolor='#ffffff'>
                            <p dir='ltr' style='margin-top: 0pt; margin-bottom: 0pt; font-family: helvetica, ArialMT, sans-serif; font-style: normal; font-variant-caps: normal; line-height: 1.38; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); text-align: right;'><span style='font-size:18px;'><span data-end-index='6418' data-start-index='6364' style='caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-family: ArialMT, helvetica, sans-serif;'><span data-end-index='6573' data-start-index='6418' style='caret-color: rgb(102, 102, 102); font-style: normal; font-variant-caps: normal; text-align: justify; white-space: pre-wrap;'>#name </span></span><span style='font-family: ArialMT, helvetica, sans-serif;'><span style='font-style: normal; font-variant-caps: normal; font-variant-ligatures: normal; white-space: pre;'>,</span></span></span></p>

                <p dir='ltr' style='margin-top: 0pt; margin-bottom: 0pt; font-family: helvetica, ArialMT, sans-serif; font-style: normal; font-variant-caps: normal; line-height: 1.38; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); text-align: right;'>&nbsp;</p>

                <div style='text-align: center;'><span style='font-size:18px;'><span style='font-family:ArialMT,helvetica,sans-serif;'>هل تشعر بالملل في المنزل؟</span></span><br>
                <span style='font-size:18px;'><span style='font-family:ArialMT,helvetica,sans-serif;'>متحمس للعمل عبر الإنترنت؟ مهتم بمضاعفة دخلك؟</span></span></div>

                <div style='text-align: center;'><span style='font-size:20px;'><strong><span style='font-family:ArialMT,helvetica,sans-serif;'>هذه هي فرصتك لتنمية مهاراتك في التكنولوجيا والعمل عبر الإنترنت</span></strong></span></div>

                <div style='text-align: right;'>&nbsp;</div>

                <div style='text-align: right;'><span style='font-size:18px;'><span style='font-family:ArialMT,helvetica,sans-serif;'>سجل الآن في مبادرة مستقبلنا رقمي&nbsp;</span></span><span style='caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-family: ArialMT, helvetica, sans-serif; font-size: 18px; font-style: normal; font-variant-caps: normal; text-align: right;'>و</span><font face='ArialMT, helvetica, sans-serif' size='4'>&nbsp;نمي مهاراتك في 3 تخصصات تقنية: تطوير الويب وتحليلات البيانات والتسويق الرقمي وعزز تواجدك على الإنترنت ومحفظة العمل عن بُعد&nbsp;الخاصة بك وحسن </font></div>

                <div style='text-align: right;'><font face='ArialMT, helvetica, sans-serif' size='4'>فرصتك في الحصول على وظيفة ناجحة وتسليمها</font></div>

                <div style='text-align: right;'><br>
                <font face='ArialMT, helvetica, sans-serif' size='4'>سواء كنت طالبًا تقنيًا أو عاملاً مستقلاً أو محترفًا ، أصبحت مهارات العمل عبر الإنترنت هي</font></div>

                <div style='text-align: right;'><font face='ArialMT, helvetica, sans-serif' size='4'>الضرورة الأولى لمهنة ناجحة</font></div>

                <div style='text-align: center;'>&nbsp;</div>

                <div style='text-align: center;'><span style='font-size:20px;'><strong><span style='font-family:ArialMT,helvetica,sans-serif;'>سجل الآن في مسار التحدي الخاص بنا لبدء حياتك المهنية في تطوير الويب أو تحليلات البيانات أو</span></strong></span><span style='font-size:20px;'><strong><span style='font-family:ArialMT,helvetica,sans-serif;'>التسويق الرقمي وبناء وجودك عبر الإنترنت</span></strong></span></div>

                <div style='text-align: center;'>&nbsp;</div>

                <div>
                <p dir='ltr' style='margin-top: 0pt; margin-bottom: 0pt; font-family: helvetica, ArialMT, sans-serif; font-variant-caps: normal; line-height: 1.38; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); text-align: center;'>&nbsp;</p>
                </div>
                        </td>
                      </tr>
                    </table>
                  <table border='0' cellpadding='0' cellspacing='0' class='module' data-role='module-button' data-type='button' role='module' style='table-layout:fixed' width='100%'><tbody><tr><td align='center' bgcolor='#ffffff' class='outer-td' style='padding:0px 0px 0px 0px;background-color:#ffffff'><table border='0' cellpadding='0' cellspacing='0' class='button-css__deep-table___2OZyb wrapper-mobile' style='text-align:center'><tbody><tr><td align='center' bgcolor='#87c879' class='inner-td' style='border-radius:6px;font-size:16px;text-align:center;background-color:inherit'><a style='background-color:#87c879;border:1px solid #333333;border-color:#87c879;border-width:3px;color:#000000;display:inline-block;font-family:helvetica,arial,sans-serif;font-size:30px;font-weight:bold;letter-spacing:0px;line-height:10px;padding:12px 18px 12px 18px;text-align:center;text-decoration:none;width:70%;border-radius:20px' href='https://www.udacity.com/?utm_source=gsem_brand&utm_medium=ads_r&utm_campaign=12907726228_c&utm_term=128479270744&utm_keyword=udacity_e&gclid=Cj0KCQjw6s2IBhCnARIsAP8RfAio78mla7oxrPmfn9op_ESkQ-xDBncyn_-xQ1jloU17Dm4N9vO009waAsChEALw_wcB' target='_blank'>سجل الآن</a></td></tr></tbody></table></td></tr></tbody></table>
                    <table class='module'
                           role='module'
                           data-type='spacer'
                           border='0'
                           cellpadding='0'
                           cellspacing='0'
                           width='100%'
                           style='table-layout: fixed;'>
                      <tr>
                        <td style='padding:0px 0px 30px 0px;'
                            role='module-content'
                            bgcolor=''>
                        </td>
                      </tr>
                    </table>

                    <table class='module' role='module' data-type='text' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;'>
                      <tr>
                        <td style='padding:0px 12px 0px 12px;line-height:22px;text-align:inherit;'
                            height='100%'
                            valign='top'
                            bgcolor=''>
                            <div style='text-align: right;'><span style='font-size:18px;'>سعداء بتعلمك معنا<br>
                فريق يوداسيتي</span></div>
                        </td>
                      </tr>
                    </table>

                    <table class='module'
                           role='module'
                           data-type='spacer'
                           border='0'
                           cellpadding='0'
                           cellspacing='0'
                           width='100%'
                           style='table-layout: fixed;'>
                      <tr>
                        <td style='padding:0px 0px 30px 0px;'
                            role='module-content'
                            bgcolor=''>
                        </td>
                      </tr>
                    </table>

                    <table class='module'
                           role='module'
                           data-type='divider'
                           border='0'
                           cellpadding='0'
                           cellspacing='0'
                           width='100%'
                           style='table-layout: fixed;'>
                      <tr>
                        <td style='padding:0px 0px 0px 0px;background-color:#ffffff;'
                            role='module-content'
                            height='100%'
                            valign='top'
                            bgcolor='#ffffff'>
                          <table border='0'
                                 cellpadding='0'
                                 cellspacing='0'
                                 align='center'
                                 width='100%'
                                 height='1px'
                                 style='line-height:1px; font-size:1px;'>
                            <tr>
                              <td
                                style='padding: 0px 0px 1px 0px;'
                                bgcolor='#87c879'></td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                                              </td>
                                            </tr>
                                          </table>
                                          <!--[if mso]>
                                          </td></tr></table>
                                          </center>
                                          <![endif]-->
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </center>
                    </div>
                </body>
                </html>
                "
                ];
                 $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
