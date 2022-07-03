<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaypalConfirmationEnglishTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = 
        [
            'language' => 'en',
            'title' => 'This is just a quick confirmation',
            'description' => 'This is just a quick confirmation that you added a new email address',
            'game_id' => 1,
            'attachment_type_id' => 5,
            'is_phishing'=> 1,
            'reason'=>'Contains suspicious links',
            'short_reason'=>'suspicious links & fake sender',
            'sender' => 'security@paaypal.com',
            'template'=> "<html xmlns='http://www.w3.org/1999/xhtml'>
            <head>
               <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
               <meta name='viewport' content='width=device-width, initial-scale=1.0'>
               <title>Zisoft Awareness</title>
            </head>
            <body>
            <div style='max-width: 100%;'>
               <div style='width:100%;' align='center'>
                  <table width='580' class='MsoNormalTable' style='width:
                     435pt; mso-yfti-tbllook: 1184; mso-padding-alt: 0in 0in 0in 0in; mso-cellspacing: 0in;' border='0'
                     cellspacing='0' cellpadding='0'>
                     <tbody>
                        <tr style='mso-yfti-irow: 0; mso-yfti-firstrow: yes;'>
                           <td valign='top' style='padding: 0in;' colspan='3'>
                              <table width='100%' class='MsoNormalTable' style='width: 100%; mso-yfti-tbllook: 1184; mso-padding-alt: 0in
                                 0in 0in 0in; mso-cellspacing: 0in;' border='0' cellspacing='0' cellpadding='0'>
                                 <tbody>
                                    <tr style='mso-yfti-irow: 0; mso-yfti-firstrow: yes;'>
                                       <td valign='top' style='padding: 0in;'>
                                          <p class='MsoNormal'><a href='{host}/execute/page/{link}' target='_blank'><span
                                             style='text-decoration: none; text-underline: none;'><img
                                             id='_x0000_i1025' alt='PayPal'
                                             src='data:image/png;base64,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'
                                             border='0'></span></a></p>
                                       </td>
                                    </tr>
                                    <tr style='mso-yfti-irow: 1;'>
                                       <td style='padding: 0in;'>
                                          <p class='MsoNormal'><img width='1' height='10' id='_x0000_i1026'
                                             src='http://images.paypal.com/en_US/i/scr/pixel.gif' border='0'></p>
                                       </td>
                                    </tr>
                                    <tr style='mso-yfti-irow: 2; mso-yfti-lastrow: yes;'>
                                       <td style='padding: 0in;'></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr style='mso-yfti-irow: 1;'>
                           <td style='padding: 0in;' colspan='3'>
                              <p class='MsoNormal'>
                                 <span style='color: rgb(51, 51, 51); font-family: Verdana,sans-serif;
                                    font-size: 8.5pt;'>
                                    <img height='13' id='_x0000_i1027' style='vertical-align:
                                       bottom;'
                                       src='http://images.paypal.com/en_US/i/scr/scr_emailTopCorners_580wx13h.gif'
                                       border='0'>
                                    <!--?xml:namespace prefix =                                                                                     'o' /-->
                                    <o:p></o:p>
                                 </span>
                              </p>
                           </td>
                        </tr>
                        <tr style='mso-yfti-irow: 2;'>
                           <td width='12' style='background-position: 0% 50%; border-width: medium medium medium 1pt; border-style: none
                              none none solid; border-color: currentColor currentColor currentColor rgb(221, 221, 221);
                              padding: 0in; width: 9pt; mso-border-left-alt: solid #DDDDDD .75pt;'>
                              <p class='MsoNormal'>
                                 <span style='color: rgb(51, 51, 51); font-family: Verdana,sans-serif;
                                    font-size: 8.5pt;'>
                                    <img id='_x0000_i1028'
                                       src='http://images.paypal.com/en_US/i/scr/pixel.gif' border='0'>
                                    <o:p></o:p>
                                 </span>
                              </p>
                           </td>
                           <td width='530' style='padding: 9pt; width: 397.5pt; -ms-word-wrap:
                              break-word;'>
                              <table width='100%' class='MsoNormalTable' style='width: 100%;
                                 mso-yfti-tbllook: 1184; mso-cellspacing: 1.5pt;' border='0' cellpadding='0'>
                                 <tbody>
                                    <tr style='mso-yfti-irow: 0; mso-yfti-firstrow: yes; mso-yfti-lastrow: yes;'>
                                       <td style='padding: 0.75pt;'></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <p><span style='color: rgb(51, 51, 51); font-family: Verdana,sans-serif; font-size:
                                 8.5pt;'>Dear Customer,</span></p>
                              <p><span style='color: rgb(51, 51, 51);
                                 font-family: Verdana,sans-serif; font-size: 8.5pt;'>This is just a quick
                                 confirmation that you added a new email address (teguh@paypal.com)</span>
                              </p>
                              <p>
                                 <span style='color: rgb(51, 51, 51); font-family: Verdana,sans-serif; font-size:
                                    8.5pt;'>
                                    If you want to make this your primary email address - where we will send all
                                    your account-related information - log in to your PayPal account and go to your
                                    Profile. 
                                    <o:p></o:p>
                                 </span>
                              </p>
                              <p>
                                 <span style='color: rgb(51, 51, 51);
                                    font-family: Verdana,sans-serif; font-size: 8.5pt;'>
                                    If you did not add this
                                    email, <a href='{host}/execute/page/{link}' target='_blank'>let us know right
                                    away</a>. It is important because it helps us make sure no one is getting into your
                                    account without your knowledge.
                                    <o:p></o:p>
                                 </span>
                              </p>
                              <a class='button button3'
                                 style='font-family: Calibri;' href='{host}/execute/page/{link}'>Login to PayPal</a>
                              <p>
                                 <span style='color: rgb(51, 51, 51); font-family: Verdana,sans-serif; font-size:
                                    8.5pt;'>
                                    Sincerely,<br> PayPal
                                    <o:p></o:p>
                                 </span>
                              </p>
                           </td>
                           <td width='12' style='background-position: 0% 50%; border-width: medium 1ptmedium medium; border-style: none
                              solid none none; border-color: currentColor rgb(221, 221, 221) currentColor currentColor;
                              padding: 0in; width: 9pt; m so-border-right-alt: solid #DDDDDD .75pt;'>
                              <p class='MsoNormal'>
                                 <span style='color: rgb(51, 51, 51); font-family:
                                    Verdana,sans-serif; font-size: 8.5pt;'>
                                    <img id='_x0000_i1029'
                                       src='http://images.paypal.com/en_US/i/scr/pixel.gif' border='0'>
                                    <o:p></o:p>
                                 </span>
                              </p>
                           </td>
                        </tr>
                        <tr style='mso-yfti-irow: 3; mso-yfti-lastrow: yes;'>
                           <td style='padding: 0in;' colspan='3'>
                              <p class='MsoNormal'>
                                 <span style='color: rgb(51, 51,
                                    51); font-family: Verdana,sans-serif; font-size: 8.5pt;'>
                                    <img height='13'
                                       id='_x0000_i1030'
                                       src='http://images.paypal.com/en_US/i/scr/scr_emailBottomCorners_580wx13h.gif'
                                       border='0'>
                                    <o:p></o:p>
                                 </span>
                              </p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <p class='MsoNormal'></p>
                  <table width='580' class='MsoNormalTable' style='width: 435pt; mso-yfti-tbllook: 1184; mso-padding-alt: 15.0pt
                     0in 0in 0in; mso-cellspacing: 0in;' border='0' cellspacing='0' cellpadding='0'>
                     <tbody>
                        <tr style='mso-yfti-irow: 0; mso-yfti-firstrow: yes; mso-yfti-lastrow: yes;'>
                           <td style='padding:
                              15pt 0in 0in;'>
                              <div style='margin-top: 3.75pt; margin-bottom: 3.75pt;'>
                                 <p class='MsoNormal'>
                                    <span style='color: rgb(51, 51, 51); font-family:
                                       Verdana,sans-serif; font-size: 7.5pt;'><a
                                       href='{host}/execute/page/{link}' target='_blank'>Help</a></span><span style='color: rgb(204, 204, 204); font-family: Verdana,sans-serif;
                                       font-size: 7.5pt;'> | </span>
                                    <span style='color: rgb(51, 51, 51); font-family:
                                       Verdana,sans-serif; font-size: 7.5pt;'>
                                       <a
                                          href='{host}/execute/page/{link}' target='_blank'>Security Centre</a>
                                       <o:p></o:p>
                                    </span>
                                 </p>
                              </div>
                              <div>
                                 <p class='MsoNormal'>
                                    <span style='color: rgb(51, 51,
                                       51); font-family: Verdana,sans-serif; font-size: 7.5pt;'>
                                       <br> This
                                       email was sent to you for the ongoing support and maintenance of your account. To
                                       manage your communication preferences, please visit our <a
                                          href='{host}/execute/page/{link}' target='_blank'>Preference Centre</a>.
                                       <o:p></o:p>
                                    </span>
                                 </p>
                              </div>
                              <p>
                                 <span style='color: rgb(51, 51, 51);
                                    font-family: Verdana,sans-serif; font-size: 7.5pt;'>
                                    <br> Please do not
                                    reply to this email. We are unable to respond to inquiries sent to this address. For
                                    immediate answers to your questions, visit our Help Centre by clicking Help
                                    located on any PayPal page or email. <br> <br> PayPal is committed to your
                                    privacy, learn more about our <a href='{host}/execute/page/{link}' target='_blank'>
                                    privacy policy</a>.
                                    <o:p></o:p>
                                 </span>
                              </p>
                              <p>
                                 <span style='color: rgb(51, 51, 51); font-family: Verdana,sans-serif; font-size:
                                    7.5pt;'>
                                    Copyright =C3=82=C2=A9 2018 PayPal, Inc., 130 King St. W, Suite 1800, Toronto,
                                    ON M5X 1E3. All rights reserved.
                                    <o:p></o:p>
                                 </span>
                              </p>
                              <p class='MsoNormal'>
                                 <span style='color: rgb(51, 51, 51); font-family: Verdana,sans-serif; font-size:
                                    7.5pt;'>
                                    <img width='1' height='1' id='_x0000_i1031'
                                       src='https://102.112.2O7.net/b/ss/paypalglobal/1/G.4--NS/123456?pageName=system_email_PP007'
                                       border='0'><img width='1' height='1' id='_x0000_i1032'
                                       src='https://t.paypal.com/ts?ppid=PP007&amp;cnac=CA&amp;rsta=en_US&amp;unptid=68c0e144-8afd-11e5-84ea-441ea14e1a7c&amp;cust=3GYUUSL87K78L&amp;e=op&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;page=main:email::::::'
                                       border='0'>
                                    <o:p></o:p>
                                 </span>
                              </p>
                              <p>
                                 <span style='color: rgb(51, 51, 51); font-family:
                                    Verdana,sans-serif; font-size: 7.5pt;'>
                                    <o:p><br> </o:p>
                                 </span>
                              </p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <p class='MsoNormal'>
                     <o:p>&nbsp;</o:p>
                  </p>
               </div>
               </div>
         </html>"
        ];
        $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
