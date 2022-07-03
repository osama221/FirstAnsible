<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KasperskyTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'an',
                'title' => 'Verify your email address',
                'description' => 'Verify your email address',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => null, // Random between 1 to 10
                'is_phishing'=> 0, // 0 = false / 1 = true
                'reason'=>'Fake sender Email',
                'short_reason'=>'trusted sender Email',
                'sender' => 'security@kaspersky.com>>',
                'template'=> "<!DOCTYPE html>
                <html dir='ltr' style='-ms-text-size-adjust: none; -webkit-text-size-adjust: none; height: 100%;'>
                  <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Please verify your email</title>

                    <style type='text/css'>
                      html {
                          -webkit-text-size-adjust: none;
                          -ms-text-size-adjust: none;
                          height: 100%;
                      }

                      body {
                          height: 100%;
                      }

                      .text a {
                          color: #007361;
                          font-weight: bold;
                          text-decoration: none;
                          white-space: normal;
                          word-break: break-word;
                      }

                      @media only screen and (min-device-width: 600px) {
                          .table600 {
                              width: 600px !important;
                          }
                      }

                      @media only screen and (max-device-width: 600px), only screen and (max-width: 600px) {
                          table[class='table600'] {
                              width: 100% !important;
                          }
                      }

                      .table600 {
                          width: 600px;
                      }
                    </style>
                  <style type='text/css'>

                    h4
                    {
                        text-align: left;
                    }

                </style>
                </head>
                  <body class='at-emailBody' leftmargin='0' marginwidth='0' topmargin='0' marginheight='0' offset='0' style='color: #505050; font: 12px Arial, Helvetica, sans-serif; height: 100%; margin: 0; padding: 0;' dir='ltr'>
                  <div style='max-width: 100%;'>  
                  <table dir='ltr' cellpadding='0' cellspacing='0' border='0' width='100%' style='border-collapse: collapse; border-spacing: 0; font-size: 1px; line-height: normal; min-height: 100%;'>

                      <tr>
                        <td align='center' bgcolor='#f3f3f3' style='background-color: #f3f3f3;'>
                          <!--[if (gte mso 9)|(IE)]>
                          <table cellpadding='0' cellspacing='0' border='0' width='600'><tr><td>
                          <![endif]-->
                          <table class='table600' cellpadding='0' cellspacing='0' width='600' border='0' style='border-collapse: collapse; border-spacing: 0; max-width: 600px; min-width: 320px; width: 600px;'>
                            <tr>
                              <td align='center' valign='top'>
                                <!-- White Background-->
                                <table cellpadding='0' cellspacing='0' border='0' width='100%' style='border-collapse: collapse; border-spacing: 0;'>
                                  <tr>
                                    <td align='left' valign='top' bgcolor='#ffffff' style='background-color: #ffffff;'>
                                      <!-- Header-->
                                      <div style='height: 50px; line-height: 50px; font-size: 48px'>&nbsp;</div>
                                      <table class='at-Header' cellpadding='0' cellspacing='0' border='0' align='center' width='83.3%' style='border-collapse: collapse; border-spacing: 0; margin: 0 auto; min-width: 83.3% !important; width: 83.3% !important;'>
                                        <tr>
                                          <td valign='top'><img src='data:image/png;base64,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' alt='Kaspersky' width='140' height='30' border='0' style='display: inline-block;'></td>
                                        </tr>
                                      </table>
                                      <div style='height: 40px; line-height: 40px; font-size: 38px'>&nbsp;</div>
                                      <!-- End Header-->
                                      <!-- Text with Title-->

                                      <!-- End Text with Title-->
                                      <table class='at-Content' cellpadding='0' cellspacing='0' border='0' align='center' width='83.3%' style='border-collapse: collapse; border-spacing: 0; color: #888888; font-family: ArialMT, sans-serif; font-size: 14px; line-height: 23px; margin: 0 auto; min-width: 83.3% !important; width: 83.3% !important;'>

                                        <tr>
                                          <td>Dear User,</td>
                                        </tr>
                                        <tr>
                                          <td height='10'></td>
                                        </tr>
                                        <tr>
                                          <td>Please verify your email address to complete your registration. Your new My Kaspersky account will make security a lot easier by connecting all settings, downloads, and subscriptions.</td>
                                        </tr>
                                        <tr>
                                          <td height='10'></td>
                                        </tr>
                                        <tr>
                                          <td height='10'></td>
                                        </tr>
                                        <tr>
                                          <td height='30' align='center'><span style='font-size: 24px; line-height: 36px; color: #333333;'>How My Kaspersky helps you</span></td>
                                        </tr>
                                        <tr>
                                          <td height='10'></td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <!-- Splitter Line-->
                                            <div style='height: 1px; line-height: 1px; font-size: 1px; border-top-width: 1px; border-top-style: solid; border-top-color: #ebf3f2'>&nbsp;</div>
                                            <!-- End Splitter Line-->
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <table style='border-collapse: collapse; border-spacing: 0;'>
                                              <tr>
                                                <td height='25'></td>
                                              </tr>
                                              <tr valign='top'>
                                                <td width='175' align='left'>
                                                  <table style='border-collapse: collapse; border-spacing: 0;'>
                                                    <tr>
                                                      <td align='center'><img src='data:image/png;base64,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' alt width='140'></td>
                                                    </tr>
                                                    <tr>
                                                      <td height='20' align='center' width='140' style='font-size: 13px;color: #8b8b8b;font-family: ArialMT, sans-serif;'>Guides you through installation and setup of all the applications available in your subscription</td>
                                                    </tr>
                                                  </table>
                                                </td>
                                                <td width='140'>
                                                  <table style='border-collapse: collapse; border-spacing: 0;'>
                                                    <tr>
                                                      <td align='center'><img src='data:image/png;base64,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' alt width='140'></td>
                                                    </tr>
                                                    <tr>
                                                      <td height='20' align='center' width='140' style='font-size: 13px;color: #8b8b8b;font-family: ArialMT, sans-serif;'>Connects all your devices and shares security settings across these</td>
                                                    </tr>
                                                  </table>
                                                </td>
                                                <td width='175' align='right'>
                                                  <table style='border-collapse: collapse; border-spacing: 0;'>
                                                    <tr>
                                                      <td align='center'><img src='data:image/png;base64,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' alt width='140'></td>
                                                    </tr>
                                                    <tr>
                                                      <td height='20' align='center' width='140' style='font-size: 13px;color: #8b8b8b;font-family: ArialMT, sans-serif;'>Helps you manage protection and reminds you when something needs your attention</td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td height='10'>&#xA0;</td>
                                        </tr>
                                        <tr>
                                          <td height='40' align='center'><a class='green-button' href='https://moscow.my.kaspersky.com/?login=fmarafa8@gmail.com&utm_source=MailRegistration,myk-email&utm_medium=From%3AKSecurity,email&utm_campaign=ff26d93d-4fb1-46a3-9c3b-99a7bb1b69db,en-GB,kart-lc' title='Verify email' style='background-color: #007361; border: 12px solid #007361; border-left: 24px solid #007361; border-right: 24px solid #007361; color: #fff; display: inline-block; font-family: ArialMT, Helvetica, sans-serif; font-size: 14px; line-height: 1.3em; text-align: center; text-decoration: none; text-transform: none;'><!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->Verify email<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<![endif]--></a></td>
                                        </tr>
                                        <tr>
                                          <td height='30'>&#xA0;</td>
                                        </tr>
                                      </table>
                                      <!-- Farewell-->
                                      <div style='height: 10px; line-height: 10px; font-size: 10px'>&nbsp;</div>
                                      <table class='at-Farewell' cellpadding='0' cellspacing='0' border='0' align='center' width='83.3%' style='border-collapse: collapse; border-spacing: 0; margin: 0 auto; max-width: 83.3% !important; min-width: 83.3% !important; width: 83.3% !important;'>
                                        <tr>
                                          <td valign='top'>
                                            <div style='line-height: 26px'><span style='font-family: ArialMT, sans-serif; font-size: 14px; line-height: 26px; color: #888888;'>Sincerely,<br />The Kaspersky team</span></div>
                                          </td>
                                        </tr>
                                      </table>

                                      <div style='height: 20px; line-height: 20px; font-size: 18px'>&nbsp;</div>
                                      <table class='at-FollowBlock' cellpadding='0' cellspacing='0' border='0' align='center' width='83.3%' style='border-collapse: collapse; border-spacing: 0; margin: 0 auto; max-width: 83.3% !important; min-width: 83.3% !important; width: 83.3% !important;'>
                                        <tr>
                                          <td valign='top'>
                                            <table width='100%' align='center' border='0' cellspacing='0' cellpadding='0' style='border-collapse: separate; border-spacing: 0;'>
                                              <tr>
                                                <td valign='top'>
                                                  <!--[if (gte mso 9)|(IE)]>
                                                  <table border='0' cellspacing='0' cellpadding='0'>
                                                  <tr><![endif]-->
                                                  <!--[if (gte mso 9)|(IE)]><td width='100%'><![endif]-->

                                                  </td></tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </table>
                                      <!-- End Follow Block-->
                                      <!-- Logo Line-->


                                          </td>
                                        </tr>
                                      </table>
                                      <!-- End Footer-->
                                    </td>
                                    <!-- End White Background-->
                                  </tr>
                                </table>
                                <!-- Copyrights-->
                                <div style='height: 5px; line-height: 5px; font-size: 3px'>&nbsp;</div>
                                <table class='at-copyrights' cellpadding='0' cellspacing='0' border='0' align='center' width='90%' style='border-collapse: collapse; border-spacing: 0; margin: 0 auto; max-width: 90% !important; min-width: 90% !important; width: 90% !important;'>
                                  <tr>
                                    <td align='center' valign='top'>
                                      <div style='line-height: 15px'><span style='font-family: ArialMT, sans-serif; font-size: 10px; line-height: 15px; color: #adadad;'>&copy; {year} AO Kaspersky Lab.</span></div>
                                    </td>
                                  </tr>
                                </table>
                                <div style='height: 30px; line-height: 30px; font-size: 28px'>&nbsp;</div>
                                <!-- End Copyrights-->

                          <!--[if (gte mso 9)|(IE)]>
                          </td></tr></table>
                          <![endif]-->
                    </div>
                  </body>
                </html>"
                ];
                 $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
