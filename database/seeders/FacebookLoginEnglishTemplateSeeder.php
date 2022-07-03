<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacebookLoginEnglishTemplateSeeder extends Seeder
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
                   'title' => 'Facebook Login Alert',
                   'description' => 'Your account was recently logged into from an unrecognized browser or device. Was this you',
                   'game_id' => 1,
                   'attachment_type_id' => 7,
                   'is_phishing'=> 1,
                   'reason'=>'sender email not related to facebook',
                   'short_reason'=>'Suspicious email',
                   'sender' => 'alert@facebook-security.com',
                   'template'=> "<html>
                   <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                   </head>
                   <body>
                   <div style='max-width: 100%;'>
                       <div style='margin:0;padding:0' dir='ltr' bgcolor='#ffffff'>
                           <table cellspacing='0' cellpadding='0' width='100%;' id='m_-5140787778864602591email_table' border='0'
                               style='border-collapse:collapse'>
                               <tbody>
                                   <tr>
                                       <td id='m_-5140787778864602591email_content'
                                           style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;background:#ffffff'>
                                           <table cellspacing='0' cellpadding='0' width='100%' style='border-collapse:collapse'>
                                               <tbody>
                                                   <tr>
                                                       <td height='20' style='line-height:20px' colspan='3'>&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                       <td height='1' colspan='3' style='line-height:1px'><span
                                                               style='color:#ffffff;display:none!important;font-size:1px'></span></td>
                                                   </tr>
                                                   <tr>
                                                       <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                                                       <td>
                                                           <table cellspacing='0' cellpadding='0' width='100%'
                                                               style='border-collapse:collapse'>
                                                               <tbody>
                                                                   <tr>
                                                                       <td height='16' style='line-height:16px' colspan='3'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td width='32' align='left' valign='middle'
                                                                           style='height:32;line-height:0px'><a
                                                                               style='color:#3b5998;text-decoration:none'
                                                                               target='_blank'><img
                                                                                   src='https://ci6.googleusercontent.com/proxy/EtxfQKU-LSNk3Cs2UEF2iTtMjX4XBhsW4wkC-6_XBZV22W3eB-S2JrRw027OocPIFPltHMAtxKA8QWOzc47CUrqu5jLKr9lWj_dvd8Dd1TZEpA=s0-d-e1-ft#https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/_2faPUZhPI6.png'
                                                                                   width='32' height='32' style='border:0'
                                                                                   class='CToWUd'></a></td>
                                                                       <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;
                                                                       </td>
                                                                       <td width='100%'><a
                                                                               style='color:#3b5998;text-decoration:none;font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;font-size:19px;line-height:32px'
                                                                               target='_blank'>Login Alert</a></td>
                                                                   </tr>
                                                                   <tr style='border-bottom:solid 1px #e5e5e5'>
                                                                       <td height='16' style='line-height:16px' colspan='3'>&nbsp;</td>
                                                                   </tr>
                                                               </tbody>
                                                           </table>
                                                       </td>
                                                       <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                       <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                                                       <td>
                                                           <table cellspacing='0' cellpadding='0' width='100%'
                                                               style='border-collapse:collapse'>
                                                               <tbody>
                                                                   <tr>
                                                                       <td height='28' style='line-height:28px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td><span class='m_-5140787778864602591mb_text'
                                                                               style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;font-size:16px;line-height:21px;font-weight:bold;color:#141823'>Hi
                                                                               #name,</span></td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td height='14' style='line-height:14px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td><span class='m_-5140787778864602591mb_text'
                                                                               style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;font-size:16px;line-height:21px;color:#141823'>Your
                                                                               account was recently logged into from an unrecognized
                                                                               browser or device. Was this you?</span></td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td height='14' style='line-height:14px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td><span style='font-size:10px;font-weight:bold;color:#777'>New
                                                                               Login</span></td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td height='14' style='line-height:14px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td></td>
                                                                   </tr>
                                                                   <tr style='border-top:solid 1px #e5e5e5'>
                                                                       <td height='0' style='line-height:0px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td height='14' style='line-height:14px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td>
                                                                           <table cellspacing='0' cellpadding='0' width='100%' align='left'
                                                                               class='m_-5140787778864602591ib_t'
                                                                               style='border-collapse:collapse;min-width:420px'>
                                                                               <tbody>
                                                                                   <tr class='m_-5140787778864602591ib_row'>
                                                                                       <td valign='top'
                                                                                           style='padding-right:10px;font-size:0px'
                                                                                           class='m_-5140787778864602591ib_img'><img
                                                                                               src='https://ci6.googleusercontent.com/proxy/DCTANTsJ1OvRNB6zZT48v37sH3JcbGz_I6HAHayvNwCn1Rob8r9MiKJ1BR-r5XeHt81lkel1D5_MiAsHRpqRfDmyzTkj2HyqQGpas_2qBbC-jg=s0-d-e1-ft#https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/OUnczqecsPd.png'
                                                                                               width='16px' height='16px' style='border:0'
                                                                                               class='CToWUd'></td>
                                                                                       <td width='100%' valign='top'
                                                                                           style='padding-right:10px'
                                                                                           class='m_-5140787778864602591ib_mid'><span
                                                                                               class='m_-5140787778864602591mb_text'
                                                                                               style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;font-size:16px;line-height:21px;color:#141823'>
                                                                                               January 21, 2021 at 18:33:21</span></td>
                                                                                   </tr>
                                                                               </tbody>
                                                                           </table>
                                                                       </td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td height='14' style='line-height:14px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td></td>
                                                                   </tr>
                                                                   <tr style='border-top:solid 1px #e5e5e5'>
                                                                       <td height='0' style='line-height:0px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td height='14' style='line-height:14px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td>
                                                                           <table cellspacing='0' cellpadding='0' width='100%' align='left'
                                                                               class='m_-5140787778864602591ib_t'
                                                                               style='border-collapse:collapse;min-width:420px'>
                                                                               <tbody>
                                                                                   <tr class='m_-5140787778864602591ib_row'>
                                                                                       <td valign='top'
                                                                                           style='padding-right:10px;font-size:0px'
                                                                                           class='m_-5140787778864602591ib_img'><img
                                                                                               src='https://ci5.googleusercontent.com/proxy/QBDrjhzwIX48mu2IPh7LHsNkIiAd7lRdk76BILhcwZS9DS_KAimbh1JSh1MNokIqcjZNHvhX8is9-3t0O_8_RCsPfHnvT2X0TDGT7hbhPQOxng=s0-d-e1-ft#https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/HLjP6-RaBz8.png'
                                                                                               width='16px' height='16px' style='border:0'
                                                                                               class='CToWUd'></td>
                                                                                       <td width='100%' valign='top'
                                                                                           style='padding-right:10px'
                                                                                           class='m_-5140787778864602591ib_mid'><span
                                                                                               class='m_-5140787778864602591mb_text'
                                                                                               style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;font-size:16px;line-height:21px;color:#141823'>Near
                                                                                               Cairo, Egypt</span></td>
                                                                                   </tr>
                                                                               </tbody>
                                                                           </table>
                                                                       </td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td height='14' style='line-height:14px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td></td>
                                                                   </tr>
                                                                   <tr style='border-top:solid 1px #e5e5e5'>
                                                                       <td height='0' style='line-height:0px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td height='14' style='line-height:14px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td>
                                                                           <table cellspacing='0' cellpadding='0' width='100%' align='left'
                                                                               class='m_-5140787778864602591ib_t'
                                                                               style='border-collapse:collapse;min-width:420px'>
                                                                               <tbody>
                                                                                   <tr class='m_-5140787778864602591ib_row'>
                                                                                       <td valign='top'
                                                                                           style='padding-right:10px;font-size:0px'
                                                                                           class='m_-5140787778864602591ib_img'><img
                                                                                               src='data:image/jpeg;base64,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'
                                                                                               width='16px' height='16px' style='border:0'
                                                                                               class='CToWUd'></td>
                                                                                       <td width='100%' valign='top'
                                                                                           style='padding-right:10px'
                                                                                           class='m_-5140787778864602591ib_mid'><span
                                                                                               class='m_-5140787778864602591mb_text'
                                                                                               style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;font-size:16px;line-height:21px;color:#141823'>Google
                                                                                               Chrome</span></td>
                                                                                   </tr>
                                                                               </tbody>
                                                                           </table>
                                                                       </td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td height='14' style='line-height:14px'>&nbsp;</td>
                                                                   </tr>
                                                               </tbody>
                                                           </table>
                                                       </td>
                                                       <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                       <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                                                       <td>
                                                           <table cellspacing='0' cellpadding='0' width='100%'
                                                               style='border-collapse:collapse'>
                                                               <tbody>
                                                                   <tr>
                                                                       <td height='2' style='line-height:2px' colspan='3'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td class='m_-5140787778864602591mb_blk'>
                                                                           <a href='#URL' style='color:#3b5998;text-decoration:none'
                                                                               target='_blank'>
                                                                               <table cellspacing='0' cellpadding='0' width='100%'
                                                                                   style='border-collapse:collapse'>
                                                                                   <tbody>
                                                                                       <tr>
                                                                                           <td
                                                                                               style='border-collapse:collapse;border-radius:2px;text-align:center;display:block;border:solid 1px #344c80;background:#4c649b;padding:7px 16px 11px 16px'>
                                                                                               <a href='www.facebook-hack.com'
                                                                                                   style='color:#3b5998;text-decoration:none;display:block'
                                                                                                   target='_blank'>
                                                                                                   <center>
                                                                                                       <font size='3'><span
                                                                                                               style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;white-space:nowrap;font-weight:bold;vertical-align:middle;color:#ffffff;font-size:14px;line-height:14px'>Review&nbsp;Login</span>
                                                                                                       </font>
                                                                                                   </center>
                                                                                               </a>
                                                                                           </td>
                                                                                       </tr>
                                                                                   </tbody>
                                                                               </table>
                                                                           </a>
                                                                       </td>
                                                                       <td width='10' style='display:block;width:10px'
                                                                           class='m_-5140787778864602591mb_hide'>&nbsp;&nbsp;&nbsp;</td>
                                                                       <td class='m_-5140787778864602591mb_blk'>
                                                                           <a href='#URL' style='color:#3b5998;text-decoration:none'
                                                                               target='_blank'>
                                                                               <table cellspacing='0' cellpadding='0' width='100%'
                                                                                   style='border-collapse:collapse'>
                                                                                   <tbody>
                                                                                       <tr>
                                                                                           <td
                                                                                               style='border-collapse:collapse;border-radius:2px;text-align:center;display:block;border:solid 1px #c9ccd1;background:#f6f7f8;padding:7px 16px 11px 16px'>
                                                                                               <a href='#URL'
                                                                                                   style='color:#3b5998;text-decoration:none;display:block'
                                                                                                   target='_blank'>
                                                                                                   <center>
                                                                                                       <font size='3'><span
                                                                                                               style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;white-space:nowrap;font-weight:bold;vertical-align:middle;color:#525252;font-size:14px;line-height:14px'>Manage&nbsp;Alerts</span>
                                                                                                       </font>
                                                                                                   </center>
                                                                                               </a>
                                                                                           </td>
                                                                                       </tr>
                                                                                   </tbody>
                                                                               </table>
                                                                           </a>
                                                                       </td>
                                                                       <td width='100%' class='m_-5140787778864602591mb_hide'></td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td height='32' style='line-height:32px' colspan='3'>&nbsp;</td>
                                                                   </tr>
                                                               </tbody>
                                                           </table>
                                                       </td>
                                                       <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                       <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                                                       <td>
                                                           <table cellspacing='0' cellpadding='0' width='100%'
                                                               style='border-collapse:collapse'>
                                                               <tbody>
                                                                   <tr style='border-top:solid 1px #e5e5e5'>
                                                                       <td height='16' style='line-height:16px'>&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td
                                                                           style='font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;font-size:11px;color:#aaaaaa;line-height:16px'>
                                                                           This message was sent to <a href=''
                                                                               style='color:#3b5998;text-decoration:none'
                                                                               target='_blank'>#EMAIL</a>. If you don't want to receive
                                                                           these emails from Facebook in the future, please <a href=''
                                                                               style='color:#3b5998;text-decoration:none' target='_blank'
                                                                               data-saferedirecturl='#link11'>unsubscribe</a>.<br>Facebook,
                                                                           Inc., Attention: Community Support, Menlo Park, CA 94025</td>
                                                                   </tr>
                                                               </tbody>
                                                           </table>
                                                       </td>
                                                       <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                       <td height='20' style='line-height:20px' colspan='3'>&nbsp;</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                           <span><img
                                                   src='https://ci5.googleusercontent.com/proxy/HW2B-_UGsdk69Jyhg1T6TPoP85hYe1BMFUnXG1tzXLvolAUwH6t0YiIo4qp5aCDfKneX2WoPW8rAE0T34kLDIX0mSXZNOiQuEaPUHdAvImAazBZauNI1_PSndHlRvKy951jvWI5bsvfOh2oBJC7IqpAoyZXzYQ=s0-d-e1-ft#https://www.facebook.com/email_open_log_pic.php?mid=5464d188693c7G5af398d232efG5464d621c9699G2bf'
                                                   style='border:0;width:1px;height:1px' class='CToWUd'></span>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>
                   </body>
   
                   </html>"
            ];
            $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
