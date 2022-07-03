<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NikeArabicTemplateSeeder extends Seeder
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
            'language' => 'ar',
            'title' => 'خصومات نايكى',
            'description' => 'خصم 50% على جميع الاحذية الرياضية',
            'game_id' => 1,
            'attachment_type_id' => null,
            'is_phishing'=> 0,
            'reason'=>'الايميل سليم ولا يحتوى على اى محتوى مشبوه',
            'short_reason'=>'الايميل سليم',
            'sender' => 'sales@nike.com',
            'template'=> "<!DOCTYPE html>
            <html lang='en'>
               <head>
                  <meta charset='utf-8'>
                  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  <meta content='' name='keywords'>
                  <meta content='' name='description'>
                  <style>
                     * {
                     margin: 0;
                     padding: 0;
                     }
                     a {
                     color: #fca84d;
                     cursor: pointer;
                     }
                     #shop-link-text:hover {
                     background-color: #ffd5af !important;
                     color: #fff !important;
                     font-size: 9px !important;
                     }
                     #footer a:hover {
                     color: #ffbe77 !important;
                     font-size: 13px !important;
                     }
                     @media (max-width: 480px) {
                     #con-2 {
                     background: linear-gradient(#ececec, #ffe6cf 40%) !important;
                     }
                     #logo {
                     margin-top: 20px !important;
                     width: 65px !important;
                     }
                     #head-1 {
                     font-size: 10px !important;
                     margin-top: 30px !important;
                     }
                     #head-2 {
                     font-size: 45px !important;
                     }
                     #head-3 {
                     font-size: 18px !important;
                     }
                     #main-img {
                     width: 200px !important;
                     }
                     #main-msg {
                     font-size: 11px !important;
                     padding-left: 16px !important;
                     padding-right: 16px !important;
                     }
                     #shop-link-text {
                     font-size: 11px !important;
                     }
                     #footer {
                     font-size: 11px !important;
                     padding-left: 16px !important;
                     padding-right: 16px !important;
                     }
                     #footer a {
                     font-size: 13px !important;
                     }
                     }
                  </style>
               </head>
               <body style='margin: 0; padding: 0;'>
                  <style>
                     * {
                     margin: 0;
                     padding: 0;
                     }
                     a {
                     color: #fca84d;
                     cursor: pointer;
                     }
                     #shop-link-text:hover {
                     background-color: #ffd5af !important;
                     color: #fff !important;
                     font-size: 9px !important;
                     }
                     #footer a:hover {
                     color: #ffbe77 !important;
                     font-size: 13px !important;
                     }
                     @media (max-width: 480px) {
                     #con-2 {
                     background: linear-gradient(#ececec, #ffe6cf 40%) !important;
                     }
                     #logo {
                     margin-top: 20px !important;
                     width: 65px !important;
                     }
                     #head-1 {
                     font-size: 10px !important;
                     margin-top: 30px !important;
                     }
                     #head-2 {
                     font-size: 45px !important;
                     }
                     #head-3 {
                     font-size: 18px !important;
                     }
                     #main-img {
                     width: 200px !important;
                     }
                     #main-msg {
                     font-size: 11px !important;
                     padding-left: 16px !important;
                     padding-right: 16px !important;
                     }
                     #shop-link-text {
                     font-size: 11px !important;
                     }
                     #footer {
                     font-size: 11px !important;
                     padding-left: 16px !important;
                     padding-right: 16px !important;
                     }
                     #footer a {
                     font-size: 13px !important;
                     }
                     }
                  </style>
                  <div style='max-width: 100%;'>
                  <table id='con-1' class='con' style='width: 100%; border-spacing: 0; background: #969696;'>
                     <tr>
                        <td style='padding: 0;'>
                           <table id='con-2' class='con'
                              style='width: 100%; border-spacing: 0; max-width: 600px; background: linear-gradient(#ececec, #ffe6cf 60%); background-color: #f9e7d7; margin-top: 0; margin-bottom: 0; margin-left: auto; margin-right: auto;'>
                              <tr>
                                 <td style='padding: 0;'>
                                    <img id='logo' src='https://i.imgur.com/Yp9DYCC.png'
                                       style='display: block; margin-top: 30px; margin-left: auto; margin-right: auto; margin-bottom: 0; width: 70px;'>
                                    <p id='head-1'
                                       style='text-align: center; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-size: 11px; margin-top: 40px;margin-bottom: 0;margin-left: 0;margin-right: 0;font-weight: bold; color: #696365; '>
                                       لفترة محدودة فقط
                                    </p>
                                    <h1 id='head-2'
                                       style='text-align: center; font-family: Arial, Helvetica, sans-serif; font-style: normal; margin-top: 5px; margin-bottom: 0; margin-left: 0; margin-right: 0; font-size: 55px; color: #fff;'>
                                       خصم 50% 
                                    </h1>
                                    <h3 id='head-3'
                                       style='text-align: center; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-size: 25px; margin-top: 10px;margin-bottom: 0; margin-left: 0;margin-right: 0; color: #564a50;'>
                                       على جميع احذية التدريب
                                    </h3>
                                    <img id='main-img' src='https://i.imgur.com/xigakn9.png'
                                       style='display: block; margin-top: 50px; margin-bottom: 0; margin-left: auto; margin-right: auto;  width: 270px;'>
                                    <p id='main-msg'
                                       style='margin-top: 70px; margin-bottom: 0; margin-left: 0; margin-right: 0; padding-top: 0; padding-bottom: 0; padding-left: 36px; padding-right: 36px; color: #86767f; line-height: 1.6; font-size: 13px; text-align: center; font-family: Arial, Helvetica, sans-serif; font-style: normal;'>
                                       أدخل الرمز الترويجي MOTION عند الخروج. خصم 50٪ صالح على البضائع الموجودة على الإنترنت
                                       قسم التخليص فقط. يتم احتساب رسوم الشحن بعد الخصم. غير قابل للتحويل
                                       وغير قابلة للاسترداد نقدًا أو ائتمانيًا تجاه المشتريات السابقة. يمكن استردادها في Nike.com
                                       و Swoosh.com في الولايات المتحدة. يمكن استخدامها مع عرض الشحن المجاني
                                       رموز فقط. ينتهي العرض ، ويجب استرداد الرمز بحلول 17 أيار (مايو) 2016 الساعة 11:59 مساءً.
                                    </p>
                                    <a id='shop-link' href='https://www.nike.com/'
                                       style='color: #fca84d; display: block; margin-top: 40px; margin-bottom: 40px; margin-left: auto; margin-right: auto; width: 140px; text-decoration: none;'>
                                       <p id='shop-link-text'
                                          style='background-color: #fff; padding-top: 12px; padding-bottom: 12px; padding-left: 0; padding-right: 0; color: #aa7469; font-size: 10px; border-radius: 4px; font-weight: bold; text-align: center; font-family: Arial, Helvetica, sans-serif; font-style: normal;'>
                                          SHOP NOW
                                       </p>
                                    </a>
                                    <p id='footer'
                                       style='margin-top: 0; margin-bottom: 10px; margin-left: 0; margin-right: 0; padding-top: 0; padding-bottom: 0; padding-left: 36px; padding-right: 36px; color: #86767f; line-height: 1.6; font-size: 11px; text-align: center; font-family: Arial, Helvetica, sans-serif; font-style: normal;'>
                                       قد أرسلنا إليك هذا البريد لأنك سجلت في Tachyon.tk للحصول على أفضل العروض الترويجية -
                                       أو أنك اشتركت بطريقة أخرى لتلقي البريد الإلكتروني من Tachyon. عنوانك مدرج باسم
                                       name@email.com. إذا كنت تفضل عدم تلقي رسائل بريد إلكتروني مستقبلية من هذا النوع من Tachyon.tk ،
                                       please <a style='color: #fb8f1b; font-size: 12px;'>opt-out here</a>.
                                    </p>
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
                  </div>
               </body>
            </html>"
        ];
        $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
