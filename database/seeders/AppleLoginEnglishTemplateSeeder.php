<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppleLoginEnglishTemplateSeeder extends Seeder
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
            'title' => 'login to your account from a restricted country',
            'description' => 'We have noticed that you tried to login to your account from a restricted country',
            'game_id' => 1,
            'attachment_type_id' => 1,
            'is_phishing'=> 1,
            'reason'=>'apple not the sender',
            'short_reason'=> 'fake sender email',
            'sender' => 'hack@apple-hackers.com',
            'template'=> "<html>
            <head>
               <meta http-equiv='X-UA-Compatible' content='IE=edge'>
               <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            </head>
            <body>
            <div style='max-width: 100%;'>
            <table style='margin:0 auto' align='center' bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' width='648'>
               <tbody>
                  <tr>
                     <td><img src='http://images.apple.com/dm/misc/notification1/top.gif' alt='' style='display:block;margin:0'
                        border='0' height='122' width='648'></td>
                  </tr>
               </tbody>
            </table>
            <table style='margin:0 auto;background-color:#f1f1f1' align='center' border='0' cellpadding='0'
               cellspacing='0' width='630'>
               <tbody>
                  <tr>
                     <td>
                        <table style='margin:0 auto;background-color:#f1f1f1;border-top:1px solid #cccccc' align='center'
                           border='0' cellpadding='0' cellspacing='0' width='490'>
                           <tbody>
                              <tr>
                                 <td style='padding:0 0 22px 0' align='left' width='490'>
                                    <div
                                       style='font-family:Lucida Grande,Lucida Sans,Lucida Sans
                                       Unicode,Arial,Helvetica,Verdana,sans-serif;color:#333333;font-size:12px;line-height:1.25em'>
                                       <br><br> Hello,<br><br>n We have noticed that you tried to login to your
                                       account from a restricted country Thats why our security system froze your account,
                                       we apologize for any inconvenience but you have to verify your identity by updating
                                       your information,<br><br>Please click on the following link to update your
                                       information: <a href='http:attacks-appleusers.commmm' style='color:#0088cc'
                                          target='_blank'>appleid.apple.com</a>.<br><br>This is an automated message.
                                       Please do not reply to this email. If you need additional help, visit <a
                                          href='http:attacks-appleusers.commmm' style='color:#0088cc' target='_blank'>Apple
                                       Support</a>.<br><br> Thanks,<br> Apple Customer
                                       Support<br>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td style='padding-top:40px'><img src='http://images.apple.com/dm/misc/notification1/btm.gif' alt=''
                        style='display:block;margin:0' border='0' height='21' width='630'></td>
                  </tr>
               </tbody>
            </table>
            <table style='margin:0 auto' align='center' border='0' cellpadding='0' cellspacing='0' width='490'>
               <tbody>
                  <tr>
                     <td style='padding:20px 20px 10px 0'>
                        <div
                           style='font-family:Geneva,Verdana,Arial,Helvetica,sans-serif;font-size:9px;line-height:1.34em;color:#999999'>
                           TM and copyright © 2013 Apple Inc. 1 Infinite Loop, MS 96-DM, Cupertino, CA 95014.
                        </div>
                        <div
                           style='font-family:Geneva,Verdana,Arial,Helvetica,sans-serif;font-size:9px;line-height:1.34em;color:#999999'>
                           n <a href='http:attacks-appleusers.commmm'
                              style='font-family:Geneva,Verdana,Arial,Helvetica,sans-serif;font-size:9px;line-height:1.34em;color:#999999;text-decoration:underline'
                              target='_blank'>All Rights Reserved</a> / <a href='http:attacks-appleusers.commmm'
                              style='font-family:Geneva,Verdana,Arial,Helvetica,sans-serif;font-size:9px;line-height:1.34em;color:#999999;text-decoration:underline'
                              target='_blank'>Keep Informed</a> / <a href='http:attacks-appleusers.commmm'
                              style='font-family:Geneva,Verdana,Arial,Helvetica,sans-serif;font-size:9px;line-height:1.34em;color:#999999;text-decoration:underline'
                              target='_blank'>Privacy Policy</a> / <a href='http:attacks-appleusers.commmm'
                              style='font-family:Geneva,Verdana,Arial,Helvetica,sans-serif;font-size:9px;line-height:1.34em;color:#999999;text-decoration:underline'
                              target='_blank'>My Apple ID</a> 
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td><img
                        src='http://insideapple.apple.com/img/APPLE_EMAIL_LINK/spacer4.gif?v=2&amp;a=k%2BmjWPCFEH1m5ry2zndhAqYXs0S%2Fg9CTMi5bvFMsZL%2FSwqTQ8qCg8C55Qf9RrDWZFc6dI5f9VPzlO2T59N58qBEX15rGvBGgpEaEeUrXGko6Zm29bnMEVGJSRtNzQmwGM04ly1NB88louAPI2l%2Biernd8nb9tiBJ5nM8jWODevkoiP%2B3GyUOA%2FsYcwaGjflbxSd3hO%2F4FtxNBkpp1t%2FbQxina4j6pvDd3nC9nKv0SC9cD5OCWiYVEtGAaTby5slMO9lMeGgl42W%2FtEfAwr8IJNP5LCHMpcj7DJc84lITJPkts7zffSdKapz9YKc%2BrhJcepMhz8ynYxh3q3DhEbgHZfrTxbiqhkubJOq%2BozSaosrKWxP960KRRPxbCQLiiL%2FLCrwGqipeOMVmdhTRMlLcNg%3D%3D'>
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
