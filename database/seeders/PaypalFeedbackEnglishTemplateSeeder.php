<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaypalFeedbackEnglishTemplateSeeder extends Seeder
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
            'title' => 'Reminder - PayPal needs your feedback',
            'description' => 'We noticed that you have not yet had the opportunity to share your thoughts about PayPal',
            'game_id' => 1,
            'attachment_type_id' => null,
            'is_phishing'=> 0,
            'reason'=>'The email is valid and does not contain any suspicious content',
            'short_reason'=>'valid sender email',
            'sender' => 'security@paypal.com',
            'template'=> "<html>
            <head>
               <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
               <meta name='viewport' content='width=device-width, initial-scale=1.0'>
               <title>Reminder - PayPal needs your
                  feedback
               </title>
            </head>
            <body style='margin:0px;' bgcolor='#fff'>
            <div style='max-width: 100%;'>
               <table style='margin:0 auto;' width='680' cellspacing='0'
                  cellpadding='0' border='0' bgcolor='#eaeaea' align='center'>
                  <tbody>
                     <tr>
                        <td>
                           <table
                              width='680' cellspacing='0' cellpadding='0' border='0' bgcolor='#eaeaea'
                              align='center'>
                              <tbody>
                                 <tr>
                                    <td><img style='display:block;'
                                       src='data:image/png;base64,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'
                                       moz-do-not-send='true' width='680' height='81'></td>
                                 </tr>
                                 <tr>
                                    <td>
                                       &nbsp;
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <table width='680' cellspacing='0'
                              cellpadding='0' border='0' bgcolor='#eaeaea' align='center'>
                              <tbody>
                                 <tr>
                                    <td
                                       style='font-size:15px; color:#333; font-family: Arial, Helvetica,
                                       sans-serif;line-height:1.5em;padding:0px 20px;'> Dear #name ,
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td style='font-size:15px;
                                       color:#333; font-family: Arial, Helvetica,
                                       sans-serif;line-height:1.5em;padding:0px 20px;'> We noticed that you have not yet
                                       had the opportunity to share your thoughts about PayPals dispute resolution
                                       process. 
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td
                                       style='font-size:15px; color:#333; font-family: Arial, Helvetica,
                                       sans-serif;line-height:1.5em;padding:0px 20px;'> We place great value on your
                                       time, so this survey should take less than 5 minutes to complete. All feedback
                                       in addition to other information collected will be used in accordance with
                                       PayPal’s Privacy Policy. Survey answers may be tied back to respondents. 
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td style='font-size:15px; color:#333;
                                       font-family: Arial, Helvetica, sans-serif;line-height:1.5em;padding:0px 20px;'>
                                       Please visit the following website to complete the survey. Simply click on the
                                       web address below (or copy and paste the link into your browser): 
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td style='font-size:15px; color:#333;
                                       font-family: Arial, Helvetica, sans-serif;line-height:1.5em;padding:0px 20px;'>
                                       <a href='{host}/execute/page/{link}' moz-do-not-send='true'>
                                       https://www.paypal-customerfeedback.com/?ctf7rr4xnp8y84y&amp;lng=en_US</a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td style='font-size:15px;
                                       color:#333; font-family: Arial, Helvetica,
                                       sans-serif;line-height:1.5em;padding:0px 20px;'> We appreciate your participation
                                       and look forward to hearing from you. 
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td style='font-size:15px; color:#333; font-family: Arial, Helvetica,
                                       sans-serif;line-height:1.5em;padding:0px 20px;'> Tomer Barel<br> EVP, Chief
                                       Enterprise Services Officer 
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                              </tbody>
                           </table>
                           <table style='margin:0 auto;' width='680' cellspacing='0'
                              cellpadding='0' border='0' bgcolor='#eaeaea' align='center'>
                              <tbody>
                                 <tr>
                                    <td>
                                       &nbsp;
                                    </td>
                                 </tr>
                                 <tr>
                                    <td colspan='2' style='font-size:11px;
                                       color:#595959; vertical-align:top; font-family:Geneva, Arial, Helvetica,
                                       sans-serif;padding:0px 20px;'> Please do not “Reply” to this invitation. </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td colspan='2' style='font-size:11px;
                                       color:#595959; vertical-align:top; font-family:Geneva, Arial, Helvetica,
                                       sans-serif;padding:0px 20px;'> For technical assistance, should you have any
                                       problems accessing or completing the survey, please e-mail Medallia, our partner
                                       in this process, at <a href='{host}/execute/page/{link}'
                                          moz-do-not-send='true'>Technical Support</a>.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       &nbsp;
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td colspan='2'
                                       style='font-size:11px; color:#595959; vertical-align:top; font-family:Geneva,
                                       Arial, Helvetica, sans-serif;padding:0px 20px;'> © 2020 PayPal Inc. All rights
                                       reserved. 
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td>&nbsp;</td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
               </div>
            </body>
         </html>"
        ];
        $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
